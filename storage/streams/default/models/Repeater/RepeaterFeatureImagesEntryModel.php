<?php namespace Anomaly\Streams\Platform\Model\Repeater;

use Anomaly\Streams\Platform\Entry\EntryModel;

class RepeaterFeatureImagesEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'repeater_feature_images';

    protected $titleName = 'id';

    protected $rules = [
        'image' => '',
        'caption' => '',
];

    protected $fields = [
        'image',
        'caption',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['image'];

    

    

    

    protected $stream = [
'id' => '59',
'sort_order' => '',
'namespace' => 'repeater',
'slug' => 'feature_images',
'prefix' => 'repeater_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '0',
'translatable' => '0',
'versionable' => '0',
'config' => '',
'assignments' => [
[
'id' => 329,
'sort_order' => 186,
'stream_id' => 59,
'field_id' => 247,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '247',
'namespace' => 'repeater',
'slug' => 'image',
'type' => 'anomaly.field_type.file',
'config' => 'a:4:{s:7:"folders";a:1:{i:0;s:1:"1";}s:3:"max";N;s:4:"mode";s:7:"default";s:13:"allowed_types";a:0:{}}',
'locked' => '0',
'translations' => [
[
'id' => 247,
'field_id' => 247,
'locale' => 'vi',
'name' => 'Hình ảnh',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 326,
'assignment_id' => 329,
'locale' => 'vi',
'label' => 'Hình ảnh',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 331,
'sort_order' => 187,
'stream_id' => 59,
'field_id' => 248,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '248',
'namespace' => 'repeater',
'slug' => 'caption',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 248,
'field_id' => 248,
'locale' => 'vi',
'name' => 'Caption',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 328,
'assignment_id' => 331,
'locale' => 'vi',
'label' => 'Nội dung',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 62,
'stream_id' => 59,
'locale' => 'vi',
'name' => 'Ảnh đặc trưng',
'description' => '',
],
],
];

    
    /**
     * The image relation
     *
     * @return Relation
     */
    public function image()
    {
        return $this->getFieldType('image')->getRelation();
    }

}
