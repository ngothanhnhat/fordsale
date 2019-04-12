<?php namespace Anomaly\Streams\Platform\Model\Navigation;

use Anomaly\Streams\Platform\Entry\EntryModel;

class NavigationLinksEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'navigation_links';

    protected $titleName = 'id';

    protected $rules = [
        'menu' => 'required',
        'type' => 'required',
        'entry' => 'required',
        'target' => 'required',
        'class' => '',
        'parent' => '',
        'allowed_roles' => '',
];

    protected $fields = [
        'menu',
        'type',
        'entry',
        'target',
        'class',
        'parent',
        'allowed_roles',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['menu', 'entry', 'parent', 'allowed_roles'];

    

    

    

    protected $stream = [
'id' => '11',
'sort_order' => '',
'namespace' => 'navigation',
'slug' => 'links',
'prefix' => 'navigation_',
'title_column' => 'id',
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
'id' => 59,
'sort_order' => 59,
'stream_id' => 11,
'field_id' => 50,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '50',
'namespace' => 'navigation',
'slug' => 'menu',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Anomaly\NavigationModule\Menu\MenuModel";}',
'locked' => '1',
'translations' => [
[
'id' => 50,
'field_id' => 50,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.menu.name',
'placeholder' => 'anomaly.module.navigation::field.menu.placeholder',
'warning' => 'anomaly.module.navigation::field.menu.warning',
'instructions' => 'anomaly.module.navigation::field.menu.instructions',
],
],
],
'translations' => [
[
'id' => 59,
'assignment_id' => 59,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.menu.label.links',
'warning' => 'anomaly.module.navigation::field.menu.warning.links',
'placeholder' => 'anomaly.module.navigation::field.menu.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.menu.instructions.links',
],
],
],
[
'id' => 60,
'sort_order' => 60,
'stream_id' => 11,
'field_id' => 53,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '53',
'namespace' => 'navigation',
'slug' => 'type',
'type' => 'anomaly.field_type.addon',
'config' => 'a:2:{s:4:"type";s:9:"extension";s:6:"search";s:38:"anomaly.module.navigation::link_type.*";}',
'locked' => '1',
'translations' => [
[
'id' => 53,
'field_id' => 53,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.type.name',
'placeholder' => 'anomaly.module.navigation::field.type.placeholder',
'warning' => 'anomaly.module.navigation::field.type.warning',
'instructions' => 'anomaly.module.navigation::field.type.instructions',
],
],
],
'translations' => [
[
'id' => 60,
'assignment_id' => 60,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.type.label.links',
'warning' => 'anomaly.module.navigation::field.type.warning.links',
'placeholder' => 'anomaly.module.navigation::field.type.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.type.instructions.links',
],
],
],
[
'id' => 61,
'sort_order' => 61,
'stream_id' => 11,
'field_id' => 48,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '48',
'namespace' => 'navigation',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 48,
'field_id' => 48,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.entry.name',
'placeholder' => 'anomaly.module.navigation::field.entry.placeholder',
'warning' => 'anomaly.module.navigation::field.entry.warning',
'instructions' => 'anomaly.module.navigation::field.entry.instructions',
],
],
],
'translations' => [
[
'id' => 61,
'assignment_id' => 61,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.entry.label.links',
'warning' => 'anomaly.module.navigation::field.entry.warning.links',
'placeholder' => 'anomaly.module.navigation::field.entry.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.entry.instructions.links',
],
],
],
[
'id' => 62,
'sort_order' => 62,
'stream_id' => 11,
'field_id' => 54,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '54',
'namespace' => 'navigation',
'slug' => 'target',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:13:"default_value";s:5:"_self";s:7:"options";a:2:{s:5:"_self";s:51:"anomaly.module.navigation::field.target.option.self";s:6:"_blank";s:52:"anomaly.module.navigation::field.target.option.blank";}}',
'locked' => '1',
'translations' => [
[
'id' => 54,
'field_id' => 54,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.target.name',
'placeholder' => 'anomaly.module.navigation::field.target.placeholder',
'warning' => 'anomaly.module.navigation::field.target.warning',
'instructions' => 'anomaly.module.navigation::field.target.instructions',
],
],
],
'translations' => [
[
'id' => 62,
'assignment_id' => 62,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.target.label.links',
'warning' => 'anomaly.module.navigation::field.target.warning.links',
'placeholder' => 'anomaly.module.navigation::field.target.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.target.instructions.links',
],
],
],
[
'id' => 63,
'sort_order' => 63,
'stream_id' => 11,
'field_id' => 46,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '46',
'namespace' => 'navigation',
'slug' => 'class',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 46,
'field_id' => 46,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.class.name',
'placeholder' => 'anomaly.module.navigation::field.class.placeholder',
'warning' => 'anomaly.module.navigation::field.class.warning',
'instructions' => 'anomaly.module.navigation::field.class.instructions',
],
],
],
'translations' => [
[
'id' => 63,
'assignment_id' => 63,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.class.label.links',
'warning' => 'anomaly.module.navigation::field.class.warning.links',
'placeholder' => 'anomaly.module.navigation::field.class.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.class.instructions.links',
],
],
],
[
'id' => 64,
'sort_order' => 64,
'stream_id' => 11,
'field_id' => 51,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '51',
'namespace' => 'navigation',
'slug' => 'parent',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:39:"Anomaly\NavigationModule\Link\LinkModel";}',
'locked' => '1',
'translations' => [
[
'id' => 51,
'field_id' => 51,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.parent.name',
'placeholder' => 'anomaly.module.navigation::field.parent.placeholder',
'warning' => 'anomaly.module.navigation::field.parent.warning',
'instructions' => 'anomaly.module.navigation::field.parent.instructions',
],
],
],
'translations' => [
[
'id' => 64,
'assignment_id' => 64,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.parent.label.links',
'warning' => 'anomaly.module.navigation::field.parent.warning.links',
'placeholder' => 'anomaly.module.navigation::field.parent.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.parent.instructions.links',
],
],
],
[
'id' => 65,
'sort_order' => 65,
'stream_id' => 11,
'field_id' => 52,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '52',
'namespace' => 'navigation',
'slug' => 'allowed_roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => 52,
'field_id' => 52,
'locale' => 'en',
'name' => 'anomaly.module.navigation::field.allowed_roles.name',
'placeholder' => 'anomaly.module.navigation::field.allowed_roles.placeholder',
'warning' => 'anomaly.module.navigation::field.allowed_roles.warning',
'instructions' => 'anomaly.module.navigation::field.allowed_roles.instructions',
],
],
],
'translations' => [
[
'id' => 65,
'assignment_id' => 65,
'locale' => 'en',
'label' => 'anomaly.module.navigation::field.allowed_roles.label.links',
'warning' => 'anomaly.module.navigation::field.allowed_roles.warning.links',
'placeholder' => 'anomaly.module.navigation::field.allowed_roles.placeholder.links',
'instructions' => 'anomaly.module.navigation::field.allowed_roles.instructions.links',
],
],
],
],
'translations' => [
[
'id' => 11,
'stream_id' => 11,
'locale' => 'en',
'name' => 'anomaly.module.navigation::stream.links.name',
'description' => 'anomaly.module.navigation::stream.links.description',
],
],
];

    
    /**
     * The menu relation
     *
     * @return Relation
     */
    public function menu()
    {
        return $this->getFieldType('menu')->getRelation();
    }

    /**
     * The entry relation
     *
     * @return Relation
     */
    public function entry()
    {
        return $this->getFieldType('entry')->getRelation();
    }

    /**
     * The parent relation
     *
     * @return Relation
     */
    public function parent()
    {
        return $this->getFieldType('parent')->getRelation();
    }

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
