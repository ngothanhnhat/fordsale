<?php namespace Anomaly\Streams\Platform\Model\Repeater;

use Anomaly\Streams\Platform\Entry\EntryModel;

class RepeaterCarAttributeEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'repeater_car_attribute';

    protected $titleName = 'id';

    protected $rules = [
        'attribute' => '',
        'attribute_value' => '',
];

    protected $fields = [
        'attribute',
        'attribute_value',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    

    

    

    protected $stream = [
'id' => '61',
'sort_order' => '',
'namespace' => 'repeater',
'slug' => 'car_attribute',
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
'id' => 336,
'sort_order' => 192,
'stream_id' => 61,
'field_id' => 252,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '252',
'namespace' => 'repeater',
'slug' => 'attribute',
'type' => 'anomaly.field_type.select',
'config' => 'a:4:{s:4:"mode";s:6:"search";s:7:"options";s:704:"banh_xe: Bánh xe
co_lop: Cỡ lốp
phanh_sau: Phanh sau
phanh_truoc: Phanh trước
he_thong_treo_sau: Hệ thống treo sau
he_thong_treo_truoc: Hệ thống treo trước
chieu_dai_co_so: Chiều dài cơ sở
dai_rong_cao: Dài x Rộng x Cao
dung_tich_thung_nhien_lieu: Dung tích thùng nhiên liệu
khoang_sang_gam_xe: Khoảng sáng gầm xe
cam_bien_ho_tro_do_xe: Cảm biến hỗ trợ đỗ xe
camera_lui: Camera lùi
he_thong_can_bang_dien_tu: Hệ thống cân bằng điện tử
he_thong_canh_bao_lech_lan: Hệ thống cảnh báo lệch làn và Hỗ trợ duy trì làn đường
he_thong_canh_bao_va_cham_phia_truoc: Hệ thống cảnh báo va chạm phía trước
";s:9:"separator";N;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 252,
'field_id' => 252,
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
'id' => 333,
'assignment_id' => 336,
'locale' => 'vi',
'label' => 'Tên thông số',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 337,
'sort_order' => 193,
'stream_id' => 61,
'field_id' => 253,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '253',
'namespace' => 'repeater',
'slug' => 'attribute_value',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 253,
'field_id' => 253,
'locale' => 'vi',
'name' => 'Giá trị',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 334,
'assignment_id' => 337,
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
'id' => 64,
'stream_id' => 61,
'locale' => 'vi',
'name' => 'Thông số',
'description' => '',
],
],
];

    
}
