<?php namespace Anomaly\Streams\Platform\Model\Templates;

use Anomaly\Streams\Platform\Entry\EntryModel;

class TemplatesGroupsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'templates_groups';

    protected $titleName = 'name';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:templates_groups,slug',
        'description' => '',
];

    protected $fields = [
        'name',
        'slug',
        'description',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    

    

    

    protected $stream = [
'id' => '73',
'sort_order' => '',
'namespace' => 'templates',
'slug' => 'groups',
'prefix' => 'templates_',
'title_column' => 'name',
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
'id' => 401,
'sort_order' => 194,
'stream_id' => 73,
'field_id' => 316,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '316',
'namespace' => 'templates',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 316,
'field_id' => 316,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.name.name',
'placeholder' => 'anomaly.module.templates::field.name.placeholder',
'warning' => 'anomaly.module.templates::field.name.warning',
'instructions' => 'anomaly.module.templates::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 398,
'assignment_id' => 401,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.name.label.groups',
'warning' => 'anomaly.module.templates::field.name.warning.groups',
'placeholder' => 'anomaly.module.templates::field.name.placeholder.groups',
'instructions' => 'anomaly.module.templates::field.name.instructions.groups',
],
],
],
[
'id' => 402,
'sort_order' => 195,
'stream_id' => 73,
'field_id' => 320,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '320',
'namespace' => 'templates',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:2:{s:4:"type";s:1:"-";s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 320,
'field_id' => 320,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.slug.name',
'placeholder' => 'anomaly.module.templates::field.slug.placeholder',
'warning' => 'anomaly.module.templates::field.slug.warning',
'instructions' => 'anomaly.module.templates::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 399,
'assignment_id' => 402,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.slug.label.groups',
'warning' => 'anomaly.module.templates::field.slug.warning.groups',
'placeholder' => 'anomaly.module.templates::field.slug.placeholder.groups',
'instructions' => 'anomaly.module.templates::field.slug.instructions.groups',
],
],
],
[
'id' => 403,
'sort_order' => 196,
'stream_id' => 73,
'field_id' => 319,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '319',
'namespace' => 'templates',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 319,
'field_id' => 319,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.description.name',
'placeholder' => 'anomaly.module.templates::field.description.placeholder',
'warning' => 'anomaly.module.templates::field.description.warning',
'instructions' => 'anomaly.module.templates::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 400,
'assignment_id' => 403,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.description.label.groups',
'warning' => 'anomaly.module.templates::field.description.warning.groups',
'placeholder' => 'anomaly.module.templates::field.description.placeholder.groups',
'instructions' => 'anomaly.module.templates::field.description.instructions.groups',
],
],
],
],
'translations' => [
[
'id' => 76,
'stream_id' => 73,
'locale' => 'en',
'name' => 'anomaly.module.templates::stream.groups.name',
'description' => 'anomaly.module.templates::stream.groups.description',
],
],
];

    
}
