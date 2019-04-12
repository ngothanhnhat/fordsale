<?php namespace Anomaly\GridFieldType\Command;

use Anomaly\GridFieldType\Grid\GridModel;
use Anomaly\GridFieldType\GridFieldType;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryCollection;
use Anomaly\Streams\Platform\Field\Contract\FieldInterface;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Ui\Form\Multiple\MultipleFormBuilder;

/**
 * Class GetMultiformFromRelation
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetMultiformFromRelation
{

    /**
     * The field type instance.
     *
     * @var GridFieldType
     */
    protected $fieldType;

    /**
     * Create a new GetMultiformFromRelation instance.
     *
     * @param GridFieldType $fieldType
     */
    public function __construct(GridFieldType $fieldType)
    {
        $this->fieldType = $fieldType;
    }

    /**
     * Get the multiple form builder from the value.
     *
     * @param FieldRepositoryInterface $fields
     * @param MultipleFormBuilder      $forms
     * @return MultipleFormBuilder|null
     */
    public function handle(FieldRepositoryInterface $fields, MultipleFormBuilder $forms)
    {
        /* @var EntryCollection $value */
        if (!$value = $this->fieldType->getValue()) {
            return null;
        }

        /* @var GridModel $grid */
        foreach ($value as $instance => $grid) {

            /* @var FieldInterface $field */
            if (!$field = $fields->find($this->fieldType->id())) {
                continue;
            }

            /**
             * If the entry no longer exists
             * we need to skip this row.
             *
             * @var EntryInterface $entry
             */
            if (!$entry = $grid->getEntry()) {
                continue;
            }

            /* @var GridFieldType $type */
            $type = $field->getType();

            $type->setPrefix($this->fieldType->getPrefix());

            $form = $type
                ->form($field, $entry->getStream(), $instance)
                ->setEntry($entry);

            $form->setReadOnly($this->fieldType->isReadOnly());

            $forms->addForm($this->fieldType->getFieldName() . '_' . $instance, $form);
        }

        $forms->setOption('success_message', false);

        return $forms;
    }
}
