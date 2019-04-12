<?php namespace Anomaly\Streams\Platform\Model\Grid;

use Anomaly\Streams\Platform\Entry\EntryModel;

class GridFeatureRegionsEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'grid_feature_regions';

    protected $titleName = 'id';

    protected $rules = [
        'feature_section' => '',
        'feature_image' => '',
        'feature_child_image' => '',
];

    protected $fields = [
        'feature_section',
        'feature_image',
        'feature_child_image',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['feature_image', 'feature_child_image'];

    

    

    

    protected $stream = [
'id' => '60',
'sort_order' => '',
'namespace' => 'grid',
'slug' => 'feature_regions',
'prefix' => 'grid_',
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
'id' => 332,
'sort_order' => 188,
'stream_id' => 60,
'field_id' => 245,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '245',
'namespace' => 'grid',
'slug' => 'feature_section',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 245,
'field_id' => 245,
'locale' => 'vi',
'name' => 'Đặc điểm',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 329,
'assignment_id' => 332,
'locale' => 'vi',
'label' => 'Tên đặc trưng',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 333,
'sort_order' => 189,
'stream_id' => 60,
'field_id' => 249,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '249',
'namespace' => 'grid',
'slug' => 'feature_image',
'type' => 'anomaly.field_type.file',
'config' => 'a:4:{s:7:"folders";a:1:{i:0;s:1:"1";}s:3:"max";N;s:4:"mode";s:7:"default";s:13:"allowed_types";a:0:{}}',
'locked' => '0',
'translations' => [
[
'id' => 249,
'field_id' => 249,
'locale' => 'vi',
'name' => 'Ảnh đại diện',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 330,
'assignment_id' => 333,
'locale' => 'vi',
'label' => 'Ảnh đại diện',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 334,
'sort_order' => 190,
'stream_id' => 60,
'field_id' => 250,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '250',
'namespace' => 'grid',
'slug' => 'feature_child_image',
'type' => 'anomaly.field_type.repeater',
'config' => 'a:4:{s:7:"related";s:71:"Anomaly\Streams\Platform\Model\Repeater\RepeaterFeatureImagesEntryModel";s:7:"add_row";s:11:"Thêm mới";s:3:"min";N;s:3:"max";s:1:"4";}',
'locked' => '0',
'translations' => [
[
'id' => 250,
'field_id' => 250,
'locale' => 'vi',
'name' => 'Ảnh con',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 331,
'assignment_id' => 334,
'locale' => 'vi',
'label' => 'Hình ảnh con',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 63,
'stream_id' => 60,
'locale' => 'vi',
'name' => 'Đặc điểm nổi bật',
'description' => '',
],
],
];

    
    /**
     * The feature image relation
     *
     * @return Relation
     */
    public function featureImage()
    {
        return $this->getFieldType('feature_image')->getRelation();
    }

    /**
     * The feature child image relation
     *
     * @return Relation
     */
    public function featureChildImage()
    {
        return $this->getFieldType('feature_child_image')->getRelation();
    }

}
