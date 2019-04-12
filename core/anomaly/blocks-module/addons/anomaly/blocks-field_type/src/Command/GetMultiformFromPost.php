<?php namespace Anomaly\BlocksFieldType\Command;

use Anomaly\BlocksFieldType\BlocksFieldType;
use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\BlocksModule\Block\Contract\BlockInterface;
use Anomaly\BlocksModule\Block\Contract\BlockRepositoryInterface;
use Anomaly\BlocksModule\Block\Form\BlockFormBuilder;
use Anomaly\ConfigurationModule\Configuration\Form\ConfigurationFormBuilder;
use Anomaly\Streams\Platform\Addon\Extension\ExtensionCollection;
use Anomaly\Streams\Platform\Field\Contract\FieldInterface;
use Anomaly\Streams\Platform\Field\Contract\FieldRepositoryInterface;
use Anomaly\Streams\Platform\Ui\Form\Multiple\MultipleFormBuilder;
use Illuminate\Http\Request;

/**
 * Class GetMultiformFromPost
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GetMultiformFromPost
{

    /**
     * The field type instance.
     *
     * @var BlocksFieldType
     */
    protected $fieldType;

    /**
     * Create a new GetMultiformFromPost instance.
     *
     * @param BlocksFieldType $fieldType
     */
    public function __construct(BlocksFieldType $fieldType)
    {
        $this->fieldType = $fieldType;
    }

    /**
     * Handle the command.
     *
     * @param ExtensionCollection $extensions
     * @param FieldRepositoryInterface $fields
     * @param BlockRepositoryInterface $blocks
     * @param MultipleFormBuilder $forms
     * @param Request $request
     * @return MultipleFormBuilder|null
     */
    public function handle(
        ExtensionCollection $extensions,
        FieldRepositoryInterface $fields,
        BlockRepositoryInterface $blocks,
        MultipleFormBuilder $forms,
        Request $request
    ) {
        if (!$request->has($this->fieldType->getFieldName())) {
            return null;
        }

        foreach ($request->get($this->fieldType->getFieldName()) as $item) {

            /* @var FieldInterface $field */
            if (!$field = $fields->find($item['field'])) {
                continue;
            }

            /* @var BlockExtension $extension */
            if (!$extension = $extensions->get($item['extension'])) {
                continue;
            }

            /* @var BlocksFieldType $type */
            $type = $field->getType();

            $type->setPrefix($this->fieldType->getPrefix());

            $extension->unsetBlock();

            /* @var BlockInterface $block */
            if ($item['block'] && $block = $blocks->find($item['block'])) {
                $extension->setBlock($block);
            }

            $form = $type->form(
                $field,
                $extension,
                $item['instance']
            );

            /* @var BlockFormBuilder $block */
            if ($item['block'] && $block = $form->getChildForm('block')) {
                $block->setEntry($item['block']);
            }

            /* @var ConfigurationFormBuilder $configuration */
            if ($configuration = $form->getChildForm('configuration')) {
                $configuration
                    ->setEntry($extension->getNamespace())
                    ->setScope($item['block']);
            }

            $form
                ->setReadOnly($this->fieldType->isReadOnly())
                ->setOption('block_id', $item['block']);

            $form->build();

            $forms->addForm($this->fieldType->getFieldName() . '_' . $item['instance'], $form);
        }

        $forms
            ->setOption('locking_enabled', false)
            ->setOption('success_message', false);

        return $forms;
    }
}
