<?php namespace Anomaly\TemplatesModule\Route;

use Anomaly\Streams\Platform\Model\Templates\TemplatesRoutesEntryModel;
use Anomaly\TemplatesModule\Route\Contract\RouteInterface;
use Anomaly\TemplatesModule\Template\Contract\TemplateInterface;

/**
 * Class RouteModel
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RouteModel extends TemplatesRoutesEntryModel implements RouteInterface
{

    /**
     * Get the URI.
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Get the template.
     *
     * @return TemplateInterface
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Get the template ID.
     *
     * @return int
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }
}
