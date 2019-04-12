<?php namespace Anomaly\Streams\Platform\Model\Pages;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PagesHomepagePagesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'pages_homepage_pages';

    protected $titleName = 'id';

    protected $rules = [
        'promotion_image' => '',
        'promotion_link' => '',
        'slider_trang_chu' => '',
        'tieu_de_cta' => '',
        'noi_dung_cta' => '',
        'button_cta' => '',
        'hinh_anh_cta' => '',
        'url_cta' => '',
];

    protected $fields = [
        'promotion_image',
        'promotion_link',
        'slider_trang_chu',
        'tieu_de_cta',
        'noi_dung_cta',
        'button_cta',
        'hinh_anh_cta',
        'url_cta',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['promotion_image', 'slider_trang_chu', 'hinh_anh_cta'];

    

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Pages\PagesHomepagePagesEntryTranslationsModel';

    protected $stream = [
'id' => '71',
'sort_order' => '',
'namespace' => 'pages',
'slug' => 'homepage_pages',
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
[
'id' => 414,
'sort_order' => 207,
'stream_id' => 71,
'field_id' => 325,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '325',
'namespace' => 'pages',
'slug' => 'promotion_image',
'type' => 'anomaly.field_type.file',
'config' => 'a:4:{s:7:"folders";a:1:{i:0;s:1:"1";}s:3:"max";N;s:4:"mode";s:7:"default";s:13:"allowed_types";a:0:{}}',
'locked' => '0',
'translations' => [
[
'id' => 325,
'field_id' => 325,
'locale' => 'vi',
'name' => 'promotion_image',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 411,
'assignment_id' => 414,
'locale' => 'vi',
'label' => 'Hình ảnh Khuyến mãi',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 415,
'sort_order' => 208,
'stream_id' => 71,
'field_id' => 326,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '326',
'namespace' => 'pages',
'slug' => 'promotion_link',
'type' => 'anomaly.field_type.url',
'config' => 'a:1:{s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 326,
'field_id' => 326,
'locale' => 'vi',
'name' => 'Promotion Link',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 412,
'assignment_id' => 415,
'locale' => 'vi',
'label' => 'Link Khuyến Mãi',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 391,
'sort_order' => 245,
'stream_id' => 71,
'field_id' => 307,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '307',
'namespace' => 'pages',
'slug' => 'slider_trang_chu',
'type' => 'anomaly.field_type.repeater',
'config' => 'a:4:{s:7:"related";s:72:"Anomaly\Streams\Platform\Model\Repeater\RepeaterHomepageSliderEntryModel";s:7:"add_row";N;s:3:"min";N;s:3:"max";N;}',
'locked' => '0',
'translations' => [
[
'id' => 307,
'field_id' => 307,
'locale' => 'vi',
'name' => 'Slider trang chủ',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 388,
'assignment_id' => 391,
'locale' => 'vi',
'label' => 'Slider',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 393,
'sort_order' => 247,
'stream_id' => 71,
'field_id' => 309,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '309',
'namespace' => 'pages',
'slug' => 'tieu_de_cta',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 309,
'field_id' => 309,
'locale' => 'vi',
'name' => 'Tiêu đề CTA',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 390,
'assignment_id' => 393,
'locale' => 'vi',
'label' => 'Tiêu đề CTA',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 394,
'sort_order' => 248,
'stream_id' => 71,
'field_id' => 310,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '310',
'namespace' => 'pages',
'slug' => 'noi_dung_cta',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:4:{s:7:"buttons";a:8:{i:0;s:6:"format";i:1;s:4:"bold";i:2;s:6:"italic";i:3;s:7:"deleted";i:4;s:5:"lists";i:5;s:4:"link";i:6;s:14:"horizontalrule";i:7;s:9:"underline";}s:7:"plugins";a:8:{i:0;s:9:"alignment";i:1;s:11:"inlinestyle";i:2;s:5:"table";i:3;s:5:"video";i:4;s:11:"filemanager";i:5;s:12:"imagemanager";i:6;s:6:"source";i:7;s:10:"fullscreen";}s:6:"height";s:2:"75";s:11:"line_breaks";b:0;}',
'locked' => '0',
'translations' => [
[
'id' => 310,
'field_id' => 310,
'locale' => 'vi',
'name' => 'Nội dung CTA',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 391,
'assignment_id' => 394,
'locale' => 'vi',
'label' => 'Nội dung CTA',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 395,
'sort_order' => 249,
'stream_id' => 71,
'field_id' => 312,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '312',
'namespace' => 'pages',
'slug' => 'button_cta',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 312,
'field_id' => 312,
'locale' => 'vi',
'name' => 'Button CTA',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 392,
'assignment_id' => 395,
'locale' => 'vi',
'label' => 'Button CTA',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 396,
'sort_order' => 250,
'stream_id' => 71,
'field_id' => 311,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '311',
'namespace' => 'pages',
'slug' => 'hinh_anh_cta',
'type' => 'anomaly.field_type.file',
'config' => 'a:4:{s:7:"folders";a:1:{i:0;s:1:"1";}s:3:"max";N;s:4:"mode";s:7:"default";s:13:"allowed_types";a:0:{}}',
'locked' => '0',
'translations' => [
[
'id' => 311,
'field_id' => 311,
'locale' => 'vi',
'name' => 'Hình ảnh CTA',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 393,
'assignment_id' => 396,
'locale' => 'vi',
'label' => 'Hình ảnh CTA',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 397,
'sort_order' => 251,
'stream_id' => 71,
'field_id' => 313,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '313',
'namespace' => 'pages',
'slug' => 'url_cta',
'type' => 'anomaly.field_type.url',
'config' => 'a:1:{s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 313,
'field_id' => 313,
'locale' => 'vi',
'name' => 'URL CTA',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 394,
'assignment_id' => 397,
'locale' => 'vi',
'label' => 'URL CTA',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 74,
'stream_id' => 71,
'locale' => 'en',
'name' => 'Homepage',
'description' => 'Trang chủ',
],
],
];

    
    /**
     * The promotion image relation
     *
     * @return Relation
     */
    public function promotionImage()
    {
        return $this->getFieldType('promotion_image')->getRelation();
    }

    /**
     * The slider trang chu relation
     *
     * @return Relation
     */
    public function sliderTrangChu()
    {
        return $this->getFieldType('slider_trang_chu')->getRelation();
    }

    /**
     * The hinh anh cta relation
     *
     * @return Relation
     */
    public function hinhAnhCta()
    {
        return $this->getFieldType('hinh_anh_cta')->getRelation();
    }

}
