<?php namespace Anomaly\Streams\Platform\Ui\Form\Command;

use Anomaly\Streams\Platform\Support\Value;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;
use Anomaly\Streams\Platform\Version\Contract\VersionInterface;
use Anomaly\Streams\Platform\Version\Contract\VersionRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class SetFormVersion
 *
 * @link    http://pyrocms.com/
 * @author  PyroCMS, Inc. <support@pyrocms.com>
 * @author  Ryan Thompson <ryan@pyrocms.com>
 */
class SetFormVersion
{

    /**
     * The form builder.
     *
     * @var \Anomaly\Streams\Platform\Ui\Form\FormBuilder
     */
    protected $builder;

    /**
     * Create a new BuildFormColumnsCommand instance.
     *
     * @param FormBuilder $builder
     */
    public function __construct(FormBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Set the form model object from the builder's model.
     *
     * @param Request                    $request
     * @param VersionRepositoryInterface $versions
     */
    public function handle(Request $request, VersionRepositoryInterface $versions)
    {
        if (!$version = $request->get('version')) {
            return;
        }

        if ($this->builder->getFormModelName() != $request->get('versionable')) {
            return;
        }

        /* @var VersionInterface $version */
        if (!$version = $versions->find($version)) {
            return;
        }

        $this->builder->setFormEntry($version->getModel());
    }
}
