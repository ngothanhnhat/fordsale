<?php namespace Anomaly\Streams\Platform\Model\Variables;

use Anomaly\Streams\Platform\Entry\EntryModel;

class VariablesDigitalMarketingEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'variables_digital_marketing';

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
'slug' => 'digital_marketing',
'translatable' => '',
'versionable' => '',
'id' => '70',
'config' => 'a:1:{i:0;b:0;}',
'assignments' => [
],
'translations' => [
[
'locale' => 'vi',
'stream_id' => 70,
'name' => 'Digital Marketing',
'description' => '',
'id' => 73,
],
],
];

    
}
