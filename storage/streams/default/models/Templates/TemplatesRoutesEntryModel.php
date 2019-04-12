<?php namespace Anomaly\Streams\Platform\Model\Templates;

use Anomaly\Streams\Platform\Entry\EntryModel;

class TemplatesRoutesEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'templates_routes';

    protected $titleName = 'uri';

    protected $rules = [
        'uri' => 'required|unique:templates_routes,uri',
        'template' => 'required',
];

    protected $fields = [
        'uri',
        'template',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['template'];

    

    

    

    protected $stream = [
'id' => '75',
'sort_order' => '',
'namespace' => 'templates',
'slug' => 'routes',
'prefix' => 'templates_',
'title_column' => 'uri',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '1',
'searchable' => '0',
'trashable' => '0',
'translatable' => '0',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 411,
'sort_order' => 204,
'stream_id' => 75,
'field_id' => 315,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '315',
'namespace' => 'templates',
'slug' => 'uri',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 315,
'field_id' => 315,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.uri.name',
'placeholder' => 'anomaly.module.templates::field.uri.placeholder',
'warning' => 'anomaly.module.templates::field.uri.warning',
'instructions' => 'anomaly.module.templates::field.uri.instructions',
],
],
],
'translations' => [
[
'id' => 408,
'assignment_id' => 411,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.uri.label.routes',
'warning' => 'anomaly.module.templates::field.uri.warning.routes',
'placeholder' => 'anomaly.module.templates::field.uri.placeholder.routes',
'instructions' => 'anomaly.module.templates::field.uri.instructions.routes',
],
],
],
[
'id' => 412,
'sort_order' => 205,
'stream_id' => 75,
'field_id' => 322,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '322',
'namespace' => 'templates',
'slug' => 'template',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:2:{s:4:"mode";s:6:"lookup";s:7:"related";s:46:"Anomaly\TemplatesModule\Template\TemplateModel";}',
'locked' => '1',
'translations' => [
[
'id' => 322,
'field_id' => 322,
'locale' => 'en',
'name' => 'anomaly.module.templates::field.template.name',
'placeholder' => 'anomaly.module.templates::field.template.placeholder',
'warning' => 'anomaly.module.templates::field.template.warning',
'instructions' => 'anomaly.module.templates::field.template.instructions',
],
],
],
'translations' => [
[
'id' => 409,
'assignment_id' => 412,
'locale' => 'en',
'label' => 'anomaly.module.templates::field.template.label.routes',
'warning' => 'anomaly.module.templates::field.template.warning.routes',
'placeholder' => 'anomaly.module.templates::field.template.placeholder.routes',
'instructions' => 'anomaly.module.templates::field.template.instructions.routes',
],
],
],
],
'translations' => [
[
'id' => 78,
'stream_id' => 75,
'locale' => 'en',
'name' => 'anomaly.module.templates::stream.routes.name',
'description' => 'anomaly.module.templates::stream.routes.description',
],
],
];

    
    /**
     * The template relation
     *
     * @return Relation
     */
    public function template()
    {
        return $this->getFieldType('template')->getRelation();
    }

}
