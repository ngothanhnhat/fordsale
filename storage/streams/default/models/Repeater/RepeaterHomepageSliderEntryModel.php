<?php namespace Anomaly\Streams\Platform\Model\Repeater;

use Anomaly\Streams\Platform\Entry\EntryModel;

class RepeaterHomepageSliderEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'repeater_homepage_slider';

    protected $titleName = 'id';

    protected $rules = [
        'headline' => '',
        'tagline' => '',
        'button' => '',
        'slider_image' => '',
        'link_slider' => '',
];

    protected $fields = [
        'headline',
        'tagline',
        'button',
        'slider_image',
        'link_slider',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['slider_image'];

    

    

    

    protected $stream = [
'id' => '72',
'sort_order' => '',
'namespace' => 'repeater',
'slug' => 'homepage_slider',
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
'id' => 387,
'sort_order' => 241,
'stream_id' => 72,
'field_id' => 303,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '303',
'namespace' => 'repeater',
'slug' => 'headline',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 303,
'field_id' => 303,
'locale' => 'vi',
'name' => 'Headline',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 384,
'assignment_id' => 387,
'locale' => 'vi',
'label' => 'Tiêu đề',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 388,
'sort_order' => 242,
'stream_id' => 72,
'field_id' => 304,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '304',
'namespace' => 'repeater',
'slug' => 'tagline',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:4:{s:7:"buttons";a:8:{i:0;s:6:"format";i:1;s:4:"bold";i:2;s:6:"italic";i:3;s:7:"deleted";i:4;s:5:"lists";i:5;s:4:"link";i:6;s:14:"horizontalrule";i:7;s:9:"underline";}s:7:"plugins";a:8:{i:0;s:9:"alignment";i:1;s:11:"inlinestyle";i:2;s:5:"table";i:3;s:5:"video";i:4;s:11:"filemanager";i:5;s:12:"imagemanager";i:6;s:6:"source";i:7;s:10:"fullscreen";}s:6:"height";s:2:"75";s:11:"line_breaks";b:0;}',
'locked' => '0',
'translations' => [
[
'id' => 304,
'field_id' => 304,
'locale' => 'vi',
'name' => 'Tagline',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 385,
'assignment_id' => 388,
'locale' => 'vi',
'label' => 'Nội dung',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 389,
'sort_order' => 243,
'stream_id' => 72,
'field_id' => 305,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '305',
'namespace' => 'repeater',
'slug' => 'button',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 305,
'field_id' => 305,
'locale' => 'vi',
'name' => 'Button',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 386,
'assignment_id' => 389,
'locale' => 'vi',
'label' => 'Call to action',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 390,
'sort_order' => 244,
'stream_id' => 72,
'field_id' => 306,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '306',
'namespace' => 'repeater',
'slug' => 'slider_image',
'type' => 'anomaly.field_type.file',
'config' => 'a:4:{s:7:"folders";N;s:3:"max";N;s:4:"mode";s:7:"default";s:13:"allowed_types";a:0:{}}',
'locked' => '0',
'translations' => [
[
'id' => 306,
'field_id' => 306,
'locale' => 'vi',
'name' => 'Slider Image',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 387,
'assignment_id' => 390,
'locale' => 'vi',
'label' => 'Hình ảnh',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 392,
'sort_order' => 246,
'stream_id' => 72,
'field_id' => 308,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '308',
'namespace' => 'repeater',
'slug' => 'link_slider',
'type' => 'anomaly.field_type.url',
'config' => 'a:1:{s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 308,
'field_id' => 308,
'locale' => 'vi',
'name' => 'Link Slider',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 389,
'assignment_id' => 392,
'locale' => 'vi',
'label' => 'Link Call to action',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 75,
'stream_id' => 72,
'locale' => 'vi',
'name' => 'Homepage Slider',
'description' => '',
],
],
];

    
    /**
     * The slider image relation
     *
     * @return Relation
     */
    public function sliderImage()
    {
        return $this->getFieldType('slider_image')->getRelation();
    }

}
