<?php namespace Anomaly\Streams\Platform\Model\HtmlBlock;

use Anomaly\Streams\Platform\Entry\EntryModel;

class HtmlBlockBlocksEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'html_block_blocks';

    protected $titleName = 'id';

    protected $rules = [
        'html' => '',
];

    protected $fields = [
        'html',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['html'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\HtmlBlock\HtmlBlockBlocksEntryTranslationsModel';

    protected $stream = [
'id' => '23',
'sort_order' => '',
'namespace' => 'html_block',
'slug' => 'blocks',
'prefix' => 'html_block_',
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
'id' => 147,
'sort_order' => 146,
'stream_id' => 23,
'field_id' => 127,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '127',
'namespace' => 'html_block',
'slug' => 'html',
'type' => 'anomaly.field_type.editor',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 127,
'field_id' => 127,
'locale' => 'en',
'name' => 'anomaly.extension.html_block::field.html.name',
'placeholder' => 'anomaly.extension.html_block::field.html.placeholder',
'warning' => 'anomaly.extension.html_block::field.html.warning',
'instructions' => 'anomaly.extension.html_block::field.html.instructions',
],
],
],
'translations' => [
[
'id' => 147,
'assignment_id' => 147,
'locale' => 'en',
'label' => 'anomaly.extension.html_block::field.html.label.blocks',
'warning' => 'anomaly.extension.html_block::field.html.warning.blocks',
'placeholder' => 'anomaly.extension.html_block::field.html.placeholder.blocks',
'instructions' => 'anomaly.extension.html_block::field.html.instructions.blocks',
],
],
],
],
'translations' => [
[
'id' => 23,
'stream_id' => 23,
'locale' => 'en',
'name' => 'anomaly.extension.html_block::stream.blocks.name',
'description' => 'anomaly.extension.html_block::stream.blocks.description',
],
],
];

    
}
