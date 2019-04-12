<?php namespace Anomaly\Streams\Platform\Model\Variables;

use Anomaly\Streams\Platform\Entry\EntryModel;

class VariablesThemeEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'variables_theme';

    protected $titleName = 'id';

    protected $rules = [
        'site_name' => '',
        'favicon' => '',
        'logo' => '',
        'footer_infomation' => '',
];

    protected $fields = [
        'site_name',
        'favicon',
        'logo',
        'footer_infomation',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['favicon', 'logo'];

    

    

    

    protected $stream = [
'id' => '68',
'sort_order' => '',
'namespace' => 'variables',
'slug' => 'theme',
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
'id' => 386,
'sort_order' => 1,
'stream_id' => 68,
'field_id' => 301,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '301',
'namespace' => 'variables',
'slug' => 'site_name',
'type' => 'anomaly.field_type.text',
'config' => 'a:6:{s:4:"type";s:4:"text";s:4:"mask";N;s:3:"min";N;s:3:"max";s:3:"255";s:12:"show_counter";b:0;s:13:"default_value";N;}',
'locked' => '0',
'translations' => [
[
'id' => 301,
'field_id' => 301,
'locale' => 'vi',
'name' => 'Site name',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 383,
'assignment_id' => 386,
'locale' => 'vi',
'label' => 'Tên trang',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 384,
'sort_order' => 2,
'stream_id' => 68,
'field_id' => 300,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '300',
'namespace' => 'variables',
'slug' => 'favicon',
'type' => 'anomaly.field_type.file',
'config' => 'a:4:{s:7:"folders";N;s:3:"max";N;s:4:"mode";s:7:"default";s:13:"allowed_types";a:0:{}}',
'locked' => '0',
'translations' => [
[
'id' => 300,
'field_id' => 300,
'locale' => 'vi',
'name' => 'Favicon',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 381,
'assignment_id' => 384,
'locale' => 'vi',
'label' => 'Favicon',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 383,
'sort_order' => 3,
'stream_id' => 68,
'field_id' => 299,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '299',
'namespace' => 'variables',
'slug' => 'logo',
'type' => 'anomaly.field_type.file',
'config' => 'a:4:{s:7:"folders";N;s:3:"max";N;s:4:"mode";s:7:"default";s:13:"allowed_types";a:0:{}}',
'locked' => '0',
'translations' => [
[
'id' => 299,
'field_id' => 299,
'locale' => 'vi',
'name' => 'Logo',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 380,
'assignment_id' => 383,
'locale' => 'vi',
'label' => 'Logo',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 382,
'sort_order' => 4,
'stream_id' => 68,
'field_id' => 298,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '298',
'namespace' => 'variables',
'slug' => 'footer_infomation',
'type' => 'anomaly.field_type.wysiwyg',
'config' => 'a:4:{s:7:"buttons";a:8:{i:0;s:6:"format";i:1;s:4:"bold";i:2;s:6:"italic";i:3;s:7:"deleted";i:4;s:5:"lists";i:5;s:4:"link";i:6;s:14:"horizontalrule";i:7;s:9:"underline";}s:7:"plugins";a:8:{i:0;s:9:"alignment";i:1;s:11:"inlinestyle";i:2;s:5:"table";i:3;s:5:"video";i:4;s:11:"filemanager";i:5;s:12:"imagemanager";i:6;s:6:"source";i:7;s:10:"fullscreen";}s:6:"height";s:2:"75";s:11:"line_breaks";b:0;}',
'locked' => '0',
'translations' => [
[
'id' => 298,
'field_id' => 298,
'locale' => 'vi',
'name' => 'Footer Infomation',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 379,
'assignment_id' => 382,
'locale' => 'vi',
'label' => 'Thông tin Footer',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 71,
'stream_id' => 68,
'locale' => 'vi',
'name' => 'Giao diện Website',
'description' => '',
],
],
];

    
    /**
     * The favicon relation
     *
     * @return Relation
     */
    public function favicon()
    {
        return $this->getFieldType('favicon')->getRelation();
    }

    /**
     * The logo relation
     *
     * @return Relation
     */
    public function logo()
    {
        return $this->getFieldType('logo')->getRelation();
    }

}
