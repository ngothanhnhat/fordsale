<?php namespace Anomaly\Streams\Platform\Ui\Form\Command;

use Anomaly\Streams\Platform\Lock\Contract\LockInterface;
use Anomaly\Streams\Platform\Lock\Contract\LockRepositoryInterface;
use Anomaly\Streams\Platform\Message\MessageBag;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Anomaly\UsersModule\User\Contract\UserInterface;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Http\Request;

/**
 * Class LockFormModel
 *
 * @link    http://pyrocms.com/
 * @author  PyroCMS, Inc. <support@pyrocms.com>
 * @author  Ryan Thompson <ryan@pyrocms.com>
 */
class LockFormModel
{

    /**
     * The table builder.
     *
     * @var FormBuilder
     */
    protected $builder;

    /**
     * Create a new SetDefaultOptions instance.
     *
     * @param FormBuilder $builder
     */
    public function __construct(FormBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Handle the command.
     *
     * @param LockRepositoryInterface $locks
     * @param MessageBag $messages
     * @param Repository $config
     * @param Request $request
     * @param Guard $auth
     */
    public function handle(
        LockRepositoryInterface $locks,
        MessageBag $messages,
        Repository $config,
        Request $request,
        Guard $auth
    ) {

        /**
         * If locking is disabled then skip it!
         */
        if ($config->get('streams::system.locking_enabled', true) == false) {
            return;
        }

        /**
         * If the form does not have a
         * model then we can't lock it.
         */
        if (!$entry = $this->builder->getFormEntry()) {
            return;
        }

        /**
         * Got to be a model!
         */
        if (!$entry instanceof EloquentModel) {
            return;
        }

        /**
         * If the entry is new then we
         * don't have anything to lock.
         */
        if (!$entry->getId()) {
            return;
        }

        /**
         * We need a user to
         * continue for now.
         *
         * @var UserInterface $user
         */
        if (!$user = $auth->user()) {
            return;
        }

        $locks->cleanup();

        /* @var LockInterface|EloquentModel $lock */
        if (!$lock = $locks->findByLockable($entry)) {
            $lock = $locks->create(
                [
                    'locked_by_id'  => $user->getId(),
                    'lockable_id'   => $entry->getId(),
                    'lockable_type' => get_class($entry),
                    'session_id'    => str_random(24), // @todo Remove this in 1.6
                    'url'           => $request->fullUrl(),
                ]
            );
        }

        if ($lock->locked_by_id == $user->getId()) {
            $lock->touch();
        }

        if ($lock->locked_by_id != $user->getId()) {

            $this->builder->setLock($lock);

            //$this->builder->setReadOnly(true);
            $this->builder->setLocked(true);
            $this->builder->setSave(false);

            $this->builder->setOption('locked', true);
        }

        if (!$this->builder->isChildForm() && $this->builder->isLocked()) {
            $messages->important(
                trans(
                    'streams::lock.locked_by_user',
                    [
                        'username' => $lock->lockedByUsername(),
                    ]
                )
            );
        }
    }
}
