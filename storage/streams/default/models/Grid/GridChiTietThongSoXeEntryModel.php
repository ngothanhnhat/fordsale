<?php namespace Anomaly\Streams\Platform\Model\Grid;

use Anomaly\Streams\Platform\Entry\EntryModel;

class GridChiTietThongSoXeEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'grid_chi_tiet_thong_so_xe';

    protected $titleName = 'id';

    protected $rules = [
        'nhom_thong_so' => '',
        'thong_so' => '',
];

    protected $fields = [
        'nhom_thong_so',
        'thong_so',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['thong_so'];

    

    

    

    protected $stream = [
'id' => '62',
'sort_order' => '',
'namespace' => 'grid',
'slug' => 'chi_tiet_thong_so_xe',
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
'id' => 338,
'sort_order' => 194,
'stream_id' => 62,
'field_id' => 255,
'config' => 'a:1:{i:0;s:23:"a:1:{i:0;s:6:"a:0:{}";}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '255',
'namespace' => 'grid',
'slug' => 'nhom_thong_so',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 255,
'field_id' => 255,
'locale' => 'vi',
'name' => 'Nhóm thông số',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 335,
'assignment_id' => 338,
'locale' => 'vi',
'label' => 'Nhóm thông số',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 339,
'sort_order' => 195,
'stream_id' => 62,
'field_id' => 254,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '254',
'namespace' => 'grid',
'slug' => 'thong_so',
'type' => 'anomaly.field_type.repeater',
'config' => 'a:4:{s:7:"related";s:70:"Anomaly\Streams\Platform\Model\Repeater\RepeaterCarAttributeEntryModel";s:7:"add_row";s:11:"Thêm mới";s:3:"min";N;s:3:"max";N;}',
'locked' => '0',
'translations' => [
[
'id' => 254,
'field_id' => 254,
'locale' => 'vi',
'name' => 'Thông số',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 336,
'assignment_id' => 339,
'locale' => 'vi',
'label' => 'Giá trị',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 65,
'stream_id' => 62,
'locale' => 'vi',
'name' => 'Chi tiết thông số xe',
'description' => '',
],
],
];

    
    /**
     * The thong so relation
     *
     * @return Relation
     */
    public function thongSo()
    {
        return $this->getFieldType('thong_so')->getRelation();
    }

}
