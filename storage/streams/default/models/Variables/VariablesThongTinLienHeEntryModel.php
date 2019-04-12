<?php namespace Anomaly\Streams\Platform\Model\Variables;

use Anomaly\Streams\Platform\Entry\EntryModel;

class VariablesThongTinLienHeEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'variables_thong_tin_lien_he';

    protected $titleName = '';

    protected $rules = [
];

    protected $fields = [
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    

    

    

    protected $stream = [
'prefix' => 'variables_',
'namespace' => 'variables',
'slug' => 'thong_tin_lien_he',
'translatable' => '',
'versionable' => '',
'id' => '69',
'config' => 'a:1:{i:0;b:0;}',
'assignments' => [
],
'translations' => [
[
'locale' => 'vi',
'stream_id' => 69,
'name' => 'Thông tin liên hệ',
'description' => '',
'id' => 72,
],
],
];

    
}
