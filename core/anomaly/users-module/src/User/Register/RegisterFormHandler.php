<?php namespace Anomaly\UsersModule\User\Register;

use Anomaly\UsersModule\User\Contract\UserInterface;
use Anomaly\UsersModule\User\Event\UserHasRegistered;
use Anomaly\UsersModule\User\Register\Command\HandleAutomaticRegistration;
use Anomaly\UsersModule\User\Register\Command\HandleEmailRegistration;
use Anomaly\UsersModule\User\Register\Command\HandleManualRegistration;
use Anomaly\UsersModule\User\UserActivator;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class RegisterFormHandler
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RegisterFormHandler
{

    use DispatchesJobs;

    /**
     * Handle the form.
     *
     * @param  Repository          $config
     * @param  RegisterFormBuilder $builder
     * @param  UserActivator       $activator
     * @throws \Exception
     */
    public function handle(
        Repository $config,
        Dispatcher $events,
        RegisterFormBuilder $builder,
        UserActivator $activator
    ) {
        if (!$builder->canSave()) {
            return;
        }

        $builder->saveForm(); // Save the new user.

        /* @var UserInterface $user */
        $user = $builder->getFormEntry();

        $activator->start($user);

        $mode = $config->get('anomaly.module.users::config.activation_mode', 'automatic');

        switch ($mode) {
            case 'automatic':
                $this->dispatch(new HandleAutomaticRegistration($builder));
                break;

            case 'manual':
                $this->dispatch(new HandleManualRegistration($builder));
                break;

            case 'email':
                $this->dispatch(new HandleEmailRegistration($builder));
                break;
        }

        $events->dispatch(new UserHasRegistered($user));
    }
}
