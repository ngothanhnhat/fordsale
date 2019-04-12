<?php namespace Anomaly\Streams\Platform\Model\Dashboard;

use Anomaly\Streams\Platform\Entry\EntryModel;

class DashboardDashboardsEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'dashboard_dashboards';

    protected $titleName = 'name';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:dashboard_dashboards,slug',
        'description' => '',
        'layout' => 'required',
        'allowed_roles' => '',
];

    protected $fields = [
        'name',
        'slug',
        'description',
        'layout',
        'allowed_roles',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['allowed_roles'];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Dashboard\DashboardDashboardsEntryTranslationsModel';

    protected $stream = [
'id' => '5',
'sort_order' => '',
'namespace' => 'dashboard',
'slug' => 'dashboards',
'prefix' => 'dashboard_',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '1',
'searchable' => '0',
'trashable' => '1',
'translatable' => '1',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 21,
'sort_order' => 21,
'stream_id' => 5,
'field_id' => 18,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '18',
'namespace' => 'dashboard',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 18,
'field_id' => 18,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.name.name',
'placeholder' => 'anomaly.module.dashboard::field.name.placeholder',
'warning' => 'anomaly.module.dashboard::field.name.warning',
'instructions' => 'anomaly.module.dashboard::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 21,
'assignment_id' => 21,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.name.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.name.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.name.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.name.instructions.dashboards',
],
],
],
[
'id' => 22,
'sort_order' => 22,
'stream_id' => 5,
'field_id' => 19,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '19',
'namespace' => 'dashboard',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 19,
'field_id' => 19,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.slug.name',
'placeholder' => 'anomaly.module.dashboard::field.slug.placeholder',
'warning' => 'anomaly.module.dashboard::field.slug.warning',
'instructions' => 'anomaly.module.dashboard::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 22,
'assignment_id' => 22,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.slug.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.slug.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.slug.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.slug.instructions.dashboards',
],
],
],
[
'id' => 23,
'sort_order' => 23,
'stream_id' => 5,
'field_id' => 20,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '20',
'namespace' => 'dashboard',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 20,
'field_id' => 20,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.description.name',
'placeholder' => 'anomaly.module.dashboard::field.description.placeholder',
'warning' => 'anomaly.module.dashboard::field.description.warning',
'instructions' => 'anomaly.module.dashboard::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 23,
'assignment_id' => 23,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.description.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.description.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.description.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.description.instructions.dashboards',
],
],
],
[
'id' => 24,
'sort_order' => 24,
'stream_id' => 5,
'field_id' => 21,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '21',
'namespace' => 'dashboard',
'slug' => 'layout',
'type' => 'anomaly.field_type.select',
'config' => 'a:1:{s:7:"options";a:9:{i:24;s:48:"anomaly.module.dashboard::field.layout.option.24";s:5:"12-12";s:51:"anomaly.module.dashboard::field.layout.option.12-12";s:4:"16-8";s:50:"anomaly.module.dashboard::field.layout.option.16-8";s:4:"8-16";s:50:"anomaly.module.dashboard::field.layout.option.8-16";s:5:"8-8-8";s:51:"anomaly.module.dashboard::field.layout.option.8-8-8";s:6:"6-12-6";s:52:"anomaly.module.dashboard::field.layout.option.6-12-6";s:6:"12-6-6";s:52:"anomaly.module.dashboard::field.layout.option.12-6-6";s:6:"6-6-12";s:52:"anomaly.module.dashboard::field.layout.option.6-6-12";s:7:"6-6-6-6";s:53:"anomaly.module.dashboard::field.layout.option.6-6-6-6";}}',
'locked' => '1',
'translations' => [
[
'id' => 21,
'field_id' => 21,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.layout.name',
'placeholder' => 'anomaly.module.dashboard::field.layout.placeholder',
'warning' => 'anomaly.module.dashboard::field.layout.warning',
'instructions' => 'anomaly.module.dashboard::field.layout.instructions',
],
],
],
'translations' => [
[
'id' => 24,
'assignment_id' => 24,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.layout.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.layout.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.layout.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.layout.instructions.dashboards',
],
],
],
[
'id' => 25,
'sort_order' => 25,
'stream_id' => 5,
'field_id' => 27,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '27',
'namespace' => 'dashboard',
'slug' => 'allowed_roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => 27,
'field_id' => 27,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::field.allowed_roles.name',
'placeholder' => 'anomaly.module.dashboard::field.allowed_roles.placeholder',
'warning' => 'anomaly.module.dashboard::field.allowed_roles.warning',
'instructions' => 'anomaly.module.dashboard::field.allowed_roles.instructions',
],
],
],
'translations' => [
[
'id' => 25,
'assignment_id' => 25,
'locale' => 'en',
'label' => 'anomaly.module.dashboard::field.allowed_roles.label.dashboards',
'warning' => 'anomaly.module.dashboard::field.allowed_roles.warning.dashboards',
'placeholder' => 'anomaly.module.dashboard::field.allowed_roles.placeholder.dashboards',
'instructions' => 'anomaly.module.dashboard::field.allowed_roles.instructions.dashboards',
],
],
],
],
'translations' => [
[
'id' => 5,
'stream_id' => 5,
'locale' => 'en',
'name' => 'anomaly.module.dashboard::stream.dashboards.name',
'description' => 'anomaly.module.dashboard::stream.dashboards.description',
],
],
];

    
    /**
     * The allowed roles relation
     *
     * @return Relation
     */
    public function allowedRoles()
    {
        return $this->getFieldType('allowed_roles')->getRelation();
    }

}
