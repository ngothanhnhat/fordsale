<?php namespace Anomaly\Streams\Platform\Model\Variables;

use Anomaly\Streams\Platform\Entry\EntryModel;

class VariablesContactEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'variables_contact';

    protected $titleName = 'id';

    protected $rules = [
        'hotline' => '',
];

    protected $fields = [
        'hotline',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    

    

    

    protected $stream = [
'id' => '69',
'sort_order' => '',
'namespace' => 'variables',
'slug' => 'contact',
'prefix' => 'variables_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '0',
'translatable' => '0',
'versionable' => '0',
'config' => 'a:1:{i:0;s:0:"";}',
'assignments' => [
[
'id' => 385,
'sort_order' => 239,
'stream_id' => 69,
'field_id' => 302,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '302',
'namespace' => 'variables',
'slug' => 'hotline',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 302,
'field_id' => 302,
'locale' => 'vi',
'name' => 'Hotline',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 382,
'assignment_id' => 385,
'locale' => 'vi',
'label' => 'Hotline',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 72,
'stream_id' => 69,
'locale' => 'vi',
'name' => 'Thông tin liên hệ',
'description' => '',
],
],
];

    
}
