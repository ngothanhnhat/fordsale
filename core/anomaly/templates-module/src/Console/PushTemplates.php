<?php namespace Anomaly\TemplatesModule\Console;

use Anomaly\TemplatesModule\Console\Command\PushTemplates as PushTemplatesCommand;
use Anomaly\TemplatesModule\Template\Command\CheckDirectory;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class PushTemplates
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class PushTemplates extends Command
{

    use DispatchesJobs;

    /**
     * The command name.
     *
     * @var string
     */
    protected $name = 'templates:push';

    /**
     * Fire the command.
     */
    public function handle()
    {
        $this->dispatch(new CheckDirectory());
        $this->dispatch(new PushTemplatesCommand());
    }
}
