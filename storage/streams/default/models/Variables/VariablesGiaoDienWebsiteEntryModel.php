<?php namespace Anomaly\Streams\Platform\Model\Variables;

use Anomaly\Streams\Platform\Entry\EntryModel;

class VariablesGiaoDienWebsiteEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'variables_giao_dien_website';

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
'slug' => 'giao_dien_website',
'translatable' => '',
'versionable' => '',
'id' => '68',
'config' => 'a:1:{i:0;b:0;}',
'assignments' => [
],
'translations' => [
[
'locale' => 'vi',
'stream_id' => 68,
'name' => 'Giao diện Website',
'description' => '',
'id' => 71,
],
],
];

    
}
