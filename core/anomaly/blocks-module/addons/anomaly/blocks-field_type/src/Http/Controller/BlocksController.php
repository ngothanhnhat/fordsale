<?php namespace Anomaly\BlocksFieldType\Http\Controller;

use Anomaly\BlocksFieldType\BlocksFieldType;
use Anomaly\BlocksModule\Block\BlockCategories;
use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection;
use Anomaly\Streams\Platform\Field\Contract\FieldInterface;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Http\Controller\PublicController;

/**
 * Class BlocksController
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class BlocksController extends PublicController
{

    /**
     * Choose what kind of row to add.
     *
     * @param FieldRepositoryInterface $fields
     * @param ExtensionCollection      $extensions
     * @param BlockCategories          $categories
     * @param                          $field
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function category(
        FieldRepositoryInterface $fields,
        ExtensionCollection $extensions,
        BlockCategories $categories,
        $field
    ) {
        /* @var FieldInterface $field */
        $field = $fields->find($field);

        /* @var BlocksFieldType $type */
        $type = $field->getType();

        /* @var ExtensionCollection $extensions */
        $extensions = $extensions->search('anomaly.module.blocks::block.*')
            ->enabled()
            ->sort();

        $categories = $categories->getCategories();

        $allowed = $type->config('blocks', []);

        if (!$allowed) {
            $allowed = array_map(
                function (BlockExtension $extension) {
                    return $extension->getNamespace();
                },
                $extensions->all()
            );
        }

        $extensions = $extensions->filter(
            function ($extension) use ($allowed) {

                /* @var BlockExtension $extension */
                return in_array($extension->getNamespace(), $allowed);
            }
        );

        foreach ($categories as $slug => &$category) {
            $category['count'] = $extensions->filter(
                function ($extension) use ($slug) {

                    /* @var BlockExtension $extension */
                    return $extension->getCategory() == $slug;
                }
            )->count();
        }

        return $this->view->make(
            'anomaly.field_type.blocks::category',
            [
                'categories' => $categories,
            ]
        );
    }

    /**
     * Choose what kind of row to add.
     *
     * @param FieldRepositoryInterface $fields
     * @param                          $field
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function choose(FieldRepositoryInterface $fields, ExtensionCollection $extensions, $field, $category)
    {
        /* @var FieldInterface $field */
        $field = $fields->find($field);

        /* @var BlocksFieldType $type */
        $type = $field->getType();

        /* @var ExtensionCollection $extensions */
        $extensions = $extensions->search('anomaly.module.blocks::block.*')
            ->enabled()
            ->sort();

        $allowed = $type->config('blocks', []);

        if (!$allowed) {
            $allowed = array_map(
                function (BlockExtension $extension) {
                    return $extension->getNamespace();
                },
                $extensions->all()
            );
        }

        $extensions = $extensions->filter(
            function ($extension) use ($allowed) {

                /* @var BlockExtension $extension */
                return in_array($extension->getNamespace(), $allowed);
            }
        );

        if ($category !== 'all') {
            $extensions = $extensions->filter(
                function ($extension) use ($category) {

                    /* @var BlockExtension $extension */
                    return $extension->getCategory() == $category;
                }
            );
        }

        return $this->view->make(
            'anomaly.field_type.blocks::choose',
            [
                'blocks' => $extensions->all(),
            ]
        );
    }

    /**
     * Return a form row.
     *
     * @param FieldRepositoryInterface $fields
     * @param ExtensionCollection      $extensions
     * @param                          $field
     * @param                          $extension
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function form(
        FieldRepositoryInterface $fields,
        ExtensionCollection $extensions,
        $field,
        $extension
    ) {

        /* @var FieldInterface $field */
        /* @var BlockExtension $extension */
        $field     = $fields->find($field);
        $extension = $extensions->get($extension);

        /* @var BlocksFieldType $type */
        $type = $field->getType();

        $type->setPrefix($this->request->get('prefix'));

        return $type
            ->form(
                $field,
                $extension,
                $this->request->get('instance')
            )
            ->addFormData('field_type', $type)
            ->render();
    }
}
