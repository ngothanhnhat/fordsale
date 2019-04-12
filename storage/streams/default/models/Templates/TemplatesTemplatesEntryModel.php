<?php namespace Anomaly\Streams\Platform\Model\Templates;

use Anomaly\Streams\Platform\Entry\EntryModel;

class TemplatesTemplatesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'templates_templates';

    protected $titleName = 'name';

    protected $rules = [
        'path' => 'required|unique:templates_templates,path',
        'type' => 'required',
        'name' => 'required',
        'slug' => 'required',
        'description' => '',
        'group' => 'required',
        'content' => '',
        'override' => 'unique:templates_templates,override',
];

    protected $fields = [
        'path',
        'type',
        'name',
        'slug',
        'description',
        'group',
        'content',
        'override',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['group'];

    

    

    

    protected $stream = [
'id' => '74',
'sort_order' => '',
'namespace' => 'templates',
'slug' => 'templates',
'prefix' => 'templates_',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '1',
'translatable' => '0',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 404,
'sort_order' => 197,
'stream_id' => 74,
'field_id' => 318,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '318',
'namespace' => 'templates',
'slug' => 'path',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 318,
'field_id' => 318,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.path.name',
'placeholder' => 'anomaly.module.templates::field.path.placeholder',
'warning' => 'anomaly.module.templates::field.path.warning',
'instructions' => 'anomaly.module.templates::field.path.instructions',
],
],
],
'translations' => [
[
'id' => 401,
'assignment_id' => 404,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.path.label.templates',
'warning' => 'anomaly.module.templates::field.path.warning.templates',
'placeholder' => 'anomaly.module.templates::field.path.placeholder.templates',
'instructions' => 'anomaly.module.templates::field.path.instructions.templates',
],
],
],
[
'id' => 405,
'sort_order' => 198,
'stream_id' => 74,
'field_id' => 317,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '317',
'namespace' => 'templates',
'slug' => 'type',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 317,
'field_id' => 317,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.type.name',
'placeholder' => 'anomaly.module.templates::field.type.placeholder',
'warning' => 'anomaly.module.templates::field.type.warning',
'instructions' => 'anomaly.module.templates::field.type.instructions',
],
],
],
'translations' => [
[
'id' => 402,
'assignment_id' => 405,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.type.label.templates',
'warning' => 'anomaly.module.templates::field.type.warning.templates',
'placeholder' => 'anomaly.module.templates::field.type.placeholder.templates',
'instructions' => 'anomaly.module.templates::field.type.instructions.templates',
],
],
],
[
'id' => 406,
'sort_order' => 199,
'stream_id' => 74,
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
'id' => 403,
'assignment_id' => 406,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.name.label.templates',
'warning' => 'anomaly.module.templates::field.name.warning.templates',
'placeholder' => 'anomaly.module.templates::field.name.placeholder.templates',
'instructions' => 'anomaly.module.templates::field.name.instructions.templates',
],
],
],
[
'id' => 407,
'sort_order' => 200,
'stream_id' => 74,
'field_id' => 320,
'config' => 'a:0:{}',
'unique' => 0,
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
'id' => 404,
'assignment_id' => 407,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.slug.label.templates',
'warning' => 'anomaly.module.templates::field.slug.warning.templates',
'placeholder' => 'anomaly.module.templates::field.slug.placeholder.templates',
'instructions' => 'anomaly.module.templates::field.slug.instructions.templates',
],
],
],
[
'id' => 408,
'sort_order' => 201,
'stream_id' => 74,
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
'id' => 405,
'assignment_id' => 408,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.description.label.templates',
'warning' => 'anomaly.module.templates::field.description.warning.templates',
'placeholder' => 'anomaly.module.templates::field.description.placeholder.templates',
'instructions' => 'anomaly.module.templates::field.description.instructions.templates',
],
],
],
[
'id' => 409,
'sort_order' => 202,
'stream_id' => 74,
'field_id' => 321,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '321',
'namespace' => 'templates',
'slug' => 'group',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:40:"Anomaly\TemplatesModule\Group\GroupModel";}',
'locked' => '1',
'translations' => [
[
'id' => 321,
'field_id' => 321,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.group.name',
'placeholder' => 'anomaly.module.templates::field.group.placeholder',
'warning' => 'anomaly.module.templates::field.group.warning',
'instructions' => 'anomaly.module.templates::field.group.instructions',
],
],
],
'translations' => [
[
'id' => 406,
'assignment_id' => 409,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.group.label.templates',
'warning' => 'anomaly.module.templates::field.group.warning.templates',
'placeholder' => 'anomaly.module.templates::field.group.placeholder.templates',
'instructions' => 'anomaly.module.templates::field.group.instructions.templates',
],
],
],
[
'id' => 410,
'sort_order' => 203,
'stream_id' => 74,
'field_id' => 323,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '323',
'namespace' => 'templates',
'slug' => 'content',
'type' => 'anomaly.field_type.editor',
'config' => 'a:1:{s:7:"storage";s:48:"Anomaly\TemplatesModule\Template\TemplateStorage";}',
'locked' => '1',
'translations' => [
[
'id' => 323,
'field_id' => 323,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.content.name',
'placeholder' => 'anomaly.module.templates::field.content.placeholder',
'warning' => 'anomaly.module.templates::field.content.warning',
'instructions' => 'anomaly.module.templates::field.content.instructions',
],
],
],
'translations' => [
[
'id' => 407,
'assignment_id' => 410,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.content.label.templates',
'warning' => 'anomaly.module.templates::field.content.warning.templates',
'placeholder' => 'anomaly.module.templates::field.content.placeholder.templates',
'instructions' => 'anomaly.module.templates::field.content.instructions.templates',
],
],
],
[
'id' => 413,
'sort_order' => 206,
'stream_id' => 74,
'field_id' => 324,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '324',
'namespace' => 'templates',
'slug' => 'override',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 324,
'field_id' => 324,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.override.name',
'placeholder' => 'anomaly.module.templates::field.override.placeholder',
'warning' => 'anomaly.module.templates::field.override.warning',
'instructions' => 'anomaly.module.templates::field.override.instructions',
],
],
],
'translations' => [
[
'id' => 410,
'assignment_id' => 413,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.override.label.templates',
'warning' => 'anomaly.module.templates::field.override.warning.templates',
'placeholder' => 'anomaly.module.templates::field.override.placeholder.templates',
'instructions' => 'anomaly.module.templates::field.override.instructions.templates',
],
],
],
],
'translations' => [
[
'id' => 77,
'stream_id' => 74,
'locale' => 'en',
'name' => 'anomaly.module.templates::stream.templates.name',
'description' => 'anomaly.module.templates::stream.templates.description',
],
],
];

    
    /**
     * The group relation
     *
     * @return Relation
     */
    public function group()
    {
        return $this->getFieldType('group')->getRelation();
    }

}
