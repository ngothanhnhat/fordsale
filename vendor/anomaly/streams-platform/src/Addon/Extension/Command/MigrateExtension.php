<?php namespace Anomaly\Streams\Platform\Addon\Extension\Command;

use Anomaly\Streams\Platform\Addon\AddonManager;
use Anomaly\Streams\Platform\Addon\Extension\Event\ExtensionWasMigrated;
use Anomaly\Streams\Platform\Addon\Extension\Extension;
use Anomaly\Streams\Platform\Console\Kernel;
use Illuminate\Contracts\Events\Dispatcher;

/**
 * Class InstallExtension
 *
 * @link    http://pyrocms.com/
 * @author  PyroCMS, Inc. <support@pyrocms.com>
 * @author  Ryan Thompson <ryan@pyrocms.com>
 */
class MigrateExtension
{

    /**
     * The seed flag.
     *
     * @var bool
     */
    protected $seed;

    /**
     * The extension to install.
     *
     * @var Extension
     */
    protected $extension;

    /**
     * Create a new InstallExtension instance.
     *
     * @param Extension $extension
     * @param bool      $seed
     */
    public function __construct(Extension $extension, $seed = false)
    {
        $this->seed      = $seed;
        $this->extension = $extension;
    }

    /**
     * Handle the command.
     *
     * @param  InstallExtension|Kernel      $console
     * @param  AddonManager                 $manager
     * @param  Dispatcher                   $dispatcher
     * @return bool
     */
    public function handle(
        Kernel $console,
        AddonManager $manager,
        Dispatcher $dispatcher
    ) {
        $this->extension->fire('migrating');

        $options = [
            '--addon' => $this->extension->getNamespace(),
            '--force' => true,
        ];

        $console->call('migrate', $options);

        $manager->register();

        if ($this->seed) {
            $console->call('db:seed', $options);
        }

        $this->extension->fire('migrated');

        $dispatcher->fire(new ExtensionWasMigrated($this->extension));

        return true;
    }
}
