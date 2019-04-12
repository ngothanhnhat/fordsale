<?php namespace Anomaly\Streams\Platform\Model\Pages;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PagesDefaultPagesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'pages_default_pages';

    protected $titleName = 'id';

    protected $rules = [
];

    protected $fields = [
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Pages\PagesDefaultPagesEntryTranslationsModel';

    protected $stream = [
'id' => '29',
'sort_order' => '',
'namespace' => 'pages',
'slug' => 'default_pages',
'prefix' => 'pages_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'hidden' => '1',
'sortable' => '0',
'searchable' => '0',
'trashable' => '1',
'translatable' => '1',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
],
'translations' => [
[
'id' => 29,
'stream_id' => 29,
'locale' => 'en',
'name' => 'Default',
'description' => 'A simple page type.',
],
],
];

    
}
