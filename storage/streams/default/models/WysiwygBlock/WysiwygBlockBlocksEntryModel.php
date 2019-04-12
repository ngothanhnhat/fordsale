<?php namespace Anomaly\Streams\Platform\Model\WysiwygBlock;

use Anomaly\Streams\Platform\Entry\EntryModel;

class WysiwygBlockBlocksEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'wysiwyg_block_blocks';

    protected $titleName = 'id';

    protected $rules = [
        'content' => '',
];

    protected $fields = [
        'content',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['content'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\WysiwygBlock\WysiwygBlockBlocksEntryTranslationsModel';

    protected $stream = [
'id' => '26',
'sort_order' => '',
'namespace' => 'wysiwyg_block',
'slug' => 'blocks',
'prefix' => 'wysiwyg_block_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '0',
'translatable' => '1',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 154,
'sort_order' => 153,
'stream_id' => 26,
'field_id' => 134,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '134',
'namespace' => 'wysiwyg_block',
'slug' => 'content',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 134,
'field_id' => 134,
'locale' => 'en',
'name' => 'anomaly.extension.wysiwyg_block::field.content.name',
'placeholder' => 'anomaly.extension.wysiwyg_block::field.content.placeholder',
'warning' => 'anomaly.extension.wysiwyg_block::field.content.warning',
'instructions' => 'anomaly.extension.wysiwyg_block::field.content.instructions',
],
],
],
'translations' => [
[
'id' => 154,
'assignment_id' => 154,
'locale' => 'en',
'label' => 'anomaly.extension.wysiwyg_block::field.content.label.blocks',
'warning' => 'anomaly.extension.wysiwyg_block::field.content.warning.blocks',
'placeholder' => 'anomaly.extension.wysiwyg_block::field.content.placeholder.blocks',
'instructions' => 'anomaly.extension.wysiwyg_block::field.content.instructions.blocks',
],
],
],
],
'translations' => [
[
'id' => 26,
'stream_id' => 26,
'locale' => 'en',
'name' => 'anomaly.extension.wysiwyg_block::stream.blocks.name',
'description' => 'anomaly.extension.wysiwyg_block::stream.blocks.description',
],
],
];

    
}
