<?php namespace Anomaly\TemplatesModule\Console\Command;

use Anomaly\Streams\Platform\Application\Application;
use Anomaly\Streams\Platform\Model\EloquentModel;
use Anomaly\Streams\Platform\Support\Str;
use Anomaly\TemplatesModule\Group\Contract\GroupInterface;
use Anomaly\TemplatesModule\Group\Contract\GroupRepositoryInterface;
use Anomaly\TemplatesModule\Template\Command\GetType;
use Anomaly\TemplatesModule\Template\Contract\TemplateInterface;
use Anomaly\TemplatesModule\Template\Contract\TemplateRepositoryInterface;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Class SyncTemplates
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SyncTemplates
{

    use DispatchesJobs;

    /**
     * Handle the command.
     *
     * @param Str                         $str
     * @param GroupRepositoryInterface    $groups
     * @param TemplateRepositoryInterface $templates
     * @param Filesystem                  $filesystem
     * @param Application                 $application
     */
    public function handle(
        Str $str,
        GroupRepositoryInterface $groups,
        TemplateRepositoryInterface $templates,
        Filesystem $filesystem,
        Application $application
    ) {
        $groups = $groups->all();

        /* @var SplFileInfo $file */
        foreach ($filesystem->allFiles($application->getStoragePath('templates')) as $file) {

            /* @var GroupInterface $group */
            if (!$group = $groups->findBy('slug', $directory = basename($file->getPath()))) {
                continue;
            }

            $slug = $slug = $file->getBasename('.' . $file->getExtension());

            /* @var TemplateInterface|EloquentModel $template */
            if (!$template = $group->getTemplates()->findBy('slug', $slug)) {
                $template = $templates->newInstance(
                    [
                        'slug'       => $slug,
                        'group'      => $group,
                        'name'       => ucwords($str->humanize($slug)),
                        'type'       => $this->dispatch(new GetType($file->getExtension())),
                        'created_at' => time(),
                    ]
                );
            }

            $template->getContent();

            $templates->save($template);
        }
    }
}
