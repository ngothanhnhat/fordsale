<?php namespace Anomaly\Streams\Platform\Model\Redirects;

use Anomaly\Streams\Platform\Entry\EntryModel;

class RedirectsRedirectsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'redirects_redirects';

    protected $titleName = 'from';

    protected $rules = [
        'from' => 'required|unique:redirects_redirects,from',
        'to' => 'required',
        'status' => 'required',
        'secure' => '',
];

    protected $fields = [
        'from',
        'to',
        'status',
        'secure',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    

    

    

    protected $stream = [
'id' => '18',
'sort_order' => '',
'namespace' => 'redirects',
'slug' => 'redirects',
'prefix' => 'redirects_',
'title_column' => 'from',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '1',
'searchable' => '0',
'trashable' => '1',
'translatable' => '0',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 117,
'sort_order' => 116,
'stream_id' => 18,
'field_id' => 100,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '100',
'namespace' => 'redirects',
'slug' => 'from',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 100,
'field_id' => 100,
'locale' => 'en',
'name' => 'anomaly.module.redirects::field.from.name',
'placeholder' => 'anomaly.module.redirects::field.from.placeholder',
'warning' => 'anomaly.module.redirects::field.from.warning',
'instructions' => 'anomaly.module.redirects::field.from.instructions',
],
],
],
'translations' => [
[
'id' => 117,
'assignment_id' => 117,
'locale' => 'en',
'label' => 'anomaly.module.redirects::field.from.label.redirects',
'warning' => 'anomaly.module.redirects::field.from.warning.redirects',
'placeholder' => 'anomaly.module.redirects::field.from.placeholder.redirects',
'instructions' => 'anomaly.module.redirects::field.from.instructions.redirects',
],
],
],
[
'id' => 118,
'sort_order' => 117,
'stream_id' => 18,
'field_id' => 101,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '101',
'namespace' => 'redirects',
'slug' => 'to',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 101,
'field_id' => 101,
'locale' => 'en',
'name' => 'anomaly.module.redirects::field.to.name',
'placeholder' => 'anomaly.module.redirects::field.to.placeholder',
'warning' => 'anomaly.module.redirects::field.to.warning',
'instructions' => 'anomaly.module.redirects::field.to.instructions',
],
],
],
'translations' => [
[
'id' => 118,
'assignment_id' => 118,
'locale' => 'en',
'label' => 'anomaly.module.redirects::field.to.label.redirects',
'warning' => 'anomaly.module.redirects::field.to.warning.redirects',
'placeholder' => 'anomaly.module.redirects::field.to.placeholder.redirects',
'instructions' => 'anomaly.module.redirects::field.to.instructions.redirects',
],
],
],
[
'id' => 119,
'sort_order' => 118,
'stream_id' => 18,
'field_id' => 102,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '102',
'namespace' => 'redirects',
'slug' => 'status',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:13:"default_value";s:3:"301";s:7:"options";a:2:{i:301;s:49:"anomaly.module.redirects::field.status.option.301";i:302;s:49:"anomaly.module.redirects::field.status.option.302";}}',
'locked' => '1',
'translations' => [
[
'id' => 102,
'field_id' => 102,
'locale' => 'en',
'name' => 'anomaly.module.redirects::field.status.name',
'placeholder' => 'anomaly.module.redirects::field.status.placeholder',
'warning' => 'anomaly.module.redirects::field.status.warning',
'instructions' => 'anomaly.module.redirects::field.status.instructions',
],
],
],
'translations' => [
[
'id' => 119,
'assignment_id' => 119,
'locale' => 'en',
'label' => 'anomaly.module.redirects::field.status.label.redirects',
'warning' => 'anomaly.module.redirects::field.status.warning.redirects',
'placeholder' => 'anomaly.module.redirects::field.status.placeholder.redirects',
'instructions' => 'anomaly.module.redirects::field.status.instructions.redirects',
],
],
],
[
'id' => 120,
'sort_order' => 119,
'stream_id' => 18,
'field_id' => 103,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '103',
'namespace' => 'redirects',
'slug' => 'secure',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 103,
'field_id' => 103,
'locale' => 'en',
'name' => 'anomaly.module.redirects::field.secure.name',
'placeholder' => 'anomaly.module.redirects::field.secure.placeholder',
'warning' => 'anomaly.module.redirects::field.secure.warning',
'instructions' => 'anomaly.module.redirects::field.secure.instructions',
],
],
],
'translations' => [
[
'id' => 120,
'assignment_id' => 120,
'locale' => 'en',
'label' => 'anomaly.module.redirects::field.secure.label.redirects',
'warning' => 'anomaly.module.redirects::field.secure.warning.redirects',
'placeholder' => 'anomaly.module.redirects::field.secure.placeholder.redirects',
'instructions' => 'anomaly.module.redirects::field.secure.instructions.redirects',
],
],
],
],
'translations' => [
[
'id' => 18,
'stream_id' => 18,
'locale' => 'en',
'name' => 'anomaly.module.redirects::stream.redirects.name',
'description' => 'anomaly.module.redirects::stream.redirects.description',
],
],
];

    
}
