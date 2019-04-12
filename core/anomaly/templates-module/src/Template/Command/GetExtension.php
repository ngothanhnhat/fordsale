<?php namespace Anomaly\TemplatesModule\Template\Command;

use Illuminate\Contracts\Config\Repository;

/**
 * Class GetExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetExtension
{

    /**
     * The file type.
     *
     * @var string
     */
    protected $type;

    /**
     * Create a new GetExtension instance.
     *
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * Handle the command.
     *
     * @param Repository $config
     * @return null|string
     */
    public function handle(Repository $config)
    {
        foreach ($config->get('anomaly.module.templates::templates.types') as $extension => $type) {
            if ($type == $this->type) {
                return $extension;
            }
        }

        return null;
    }
}
