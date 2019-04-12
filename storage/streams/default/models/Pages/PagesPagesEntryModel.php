<?php namespace Anomaly\Streams\Platform\Model\Pages;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PagesPagesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = true;

    protected $versionable = false;

    protected $table = 'pages_pages';

    protected $titleName = 'title';

    protected $rules = [
        'str_id' => 'required',
        'title' => 'required',
        'slug' => 'required',
        'path' => 'required',
        'type' => 'required',
        'entry' => '',
        'parent' => '',
        'visible' => '',
        'enabled' => '',
        'exact' => '',
        'home' => '',
        'meta_title' => '',
        'meta_description' => '',
        'theme_layout' => '',
        'allowed_roles' => '',
];

    protected $fields = [
        'str_id',
        'title',
        'slug',
        'path',
        'type',
        'entry',
        'parent',
        'visible',
        'enabled',
        'exact',
        'home',
        'meta_title',
        'meta_description',
        'theme_layout',
        'allowed_roles',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['type', 'entry', 'parent', 'allowed_roles'];

    protected $translatedAttributes = ['title', 'meta_title', 'meta_description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Pages\PagesPagesEntryTranslationsModel';

    protected $stream = [
'id' => '12',
'sort_order' => '',
'namespace' => 'pages',
'slug' => 'pages',
'prefix' => 'pages_',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '1',
'searchable' => '1',
'trashable' => '1',
'translatable' => '1',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 66,
'sort_order' => 66,
'stream_id' => 12,
'field_id' => 55,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '55',
'namespace' => 'pages',
'slug' => 'str_id',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 55,
'field_id' => 55,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.str_id.name',
'placeholder' => 'anomaly.module.pages::field.str_id.placeholder',
'warning' => 'anomaly.module.pages::field.str_id.warning',
'instructions' => 'anomaly.module.pages::field.str_id.instructions',
],
],
],
'translations' => [
[
'id' => 66,
'assignment_id' => 66,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.str_id.label.pages',
'warning' => 'anomaly.module.pages::field.str_id.warning.pages',
'placeholder' => 'anomaly.module.pages::field.str_id.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.str_id.instructions.pages',
],
],
],
[
'id' => 67,
'sort_order' => 67,
'stream_id' => 12,
'field_id' => 56,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '56',
'namespace' => 'pages',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 56,
'field_id' => 56,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.title.name',
'placeholder' => 'anomaly.module.pages::field.title.placeholder',
'warning' => 'anomaly.module.pages::field.title.warning',
'instructions' => 'anomaly.module.pages::field.title.instructions',
],
],
],
'translations' => [
[
'id' => 67,
'assignment_id' => 67,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.title.label.pages',
'warning' => 'anomaly.module.pages::field.title.warning.pages',
'placeholder' => 'anomaly.module.pages::field.title.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.title.instructions.pages',
],
],
],
[
'id' => 68,
'sort_order' => 68,
'stream_id' => 12,
'field_id' => 57,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '57',
'namespace' => 'pages',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:2:{s:7:"slugify";s:5:"title";s:4:"type";s:1:"-";}',
'locked' => '1',
'translations' => [
[
'id' => 57,
'field_id' => 57,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.slug.name',
'placeholder' => 'anomaly.module.pages::field.slug.placeholder',
'warning' => 'anomaly.module.pages::field.slug.warning',
'instructions' => 'anomaly.module.pages::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 68,
'assignment_id' => 68,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.slug.label.pages',
'warning' => 'anomaly.module.pages::field.slug.warning.pages',
'placeholder' => 'anomaly.module.pages::field.slug.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.slug.instructions.pages',
],
],
],
[
'id' => 69,
'sort_order' => 69,
'stream_id' => 12,
'field_id' => 59,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '59',
'namespace' => 'pages',
'slug' => 'path',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 59,
'field_id' => 59,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.path.name',
'placeholder' => 'anomaly.module.pages::field.path.placeholder',
'warning' => 'anomaly.module.pages::field.path.warning',
'instructions' => 'anomaly.module.pages::field.path.instructions',
],
],
],
'translations' => [
[
'id' => 69,
'assignment_id' => 69,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.path.label.pages',
'warning' => 'anomaly.module.pages::field.path.warning.pages',
'placeholder' => 'anomaly.module.pages::field.path.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.path.instructions.pages',
],
],
],
[
'id' => 70,
'sort_order' => 70,
'stream_id' => 12,
'field_id' => 69,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '69',
'namespace' => 'pages',
'slug' => 'type',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\PagesModule\Type\TypeModel";}',
'locked' => '1',
'translations' => [
[
'id' => 69,
'field_id' => 69,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.type.name',
'placeholder' => 'anomaly.module.pages::field.type.placeholder',
'warning' => 'anomaly.module.pages::field.type.warning',
'instructions' => 'anomaly.module.pages::field.type.instructions',
],
],
],
'translations' => [
[
'id' => 70,
'assignment_id' => 70,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.type.label.pages',
'warning' => 'anomaly.module.pages::field.type.warning.pages',
'placeholder' => 'anomaly.module.pages::field.type.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.type.instructions.pages',
],
],
],
[
'id' => 71,
'sort_order' => 71,
'stream_id' => 12,
'field_id' => 73,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '73',
'namespace' => 'pages',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 73,
'field_id' => 73,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.entry.name',
'placeholder' => 'anomaly.module.pages::field.entry.placeholder',
'warning' => 'anomaly.module.pages::field.entry.warning',
'instructions' => 'anomaly.module.pages::field.entry.instructions',
],
],
],
'translations' => [
[
'id' => 71,
'assignment_id' => 71,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.entry.label.pages',
'warning' => 'anomaly.module.pages::field.entry.warning.pages',
'placeholder' => 'anomaly.module.pages::field.entry.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.entry.instructions.pages',
],
],
],
[
'id' => 72,
'sort_order' => 72,
'stream_id' => 12,
'field_id' => 67,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '67',
'namespace' => 'pages',
'slug' => 'parent',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:2:{s:4:"mode";s:6:"lookup";s:7:"related";s:34:"Anomaly\PagesModule\Page\PageModel";}',
'locked' => '1',
'translations' => [
[
'id' => 67,
'field_id' => 67,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.parent.name',
'placeholder' => 'anomaly.module.pages::field.parent.placeholder',
'warning' => 'anomaly.module.pages::field.parent.warning',
'instructions' => 'anomaly.module.pages::field.parent.instructions',
],
],
],
'translations' => [
[
'id' => 72,
'assignment_id' => 72,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.parent.label.pages',
'warning' => 'anomaly.module.pages::field.parent.warning.pages',
'placeholder' => 'anomaly.module.pages::field.parent.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.parent.instructions.pages',
],
],
],
[
'id' => 73,
'sort_order' => 73,
'stream_id' => 12,
'field_id' => 71,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '71',
'namespace' => 'pages',
'slug' => 'visible',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:1;}',
'locked' => '1',
'translations' => [
[
'id' => 71,
'field_id' => 71,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.visible.name',
'placeholder' => 'anomaly.module.pages::field.visible.placeholder',
'warning' => 'anomaly.module.pages::field.visible.warning',
'instructions' => 'anomaly.module.pages::field.visible.instructions',
],
],
],
'translations' => [
[
'id' => 73,
'assignment_id' => 73,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.visible.label.pages',
'warning' => 'anomaly.module.pages::field.visible.warning.pages',
'placeholder' => 'anomaly.module.pages::field.visible.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.visible.instructions.pages',
],
],
],
[
'id' => 74,
'sort_order' => 74,
'stream_id' => 12,
'field_id' => 60,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '60',
'namespace' => 'pages',
'slug' => 'enabled',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:1;}',
'locked' => '1',
'translations' => [
[
'id' => 60,
'field_id' => 60,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.enabled.name',
'placeholder' => 'anomaly.module.pages::field.enabled.placeholder',
'warning' => 'anomaly.module.pages::field.enabled.warning',
'instructions' => 'anomaly.module.pages::field.enabled.instructions',
],
],
],
'translations' => [
[
'id' => 74,
'assignment_id' => 74,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.enabled.label.pages',
'warning' => 'anomaly.module.pages::field.enabled.warning.pages',
'placeholder' => 'anomaly.module.pages::field.enabled.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.enabled.instructions.pages',
],
],
],
[
'id' => 75,
'sort_order' => 75,
'stream_id' => 12,
'field_id' => 72,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '72',
'namespace' => 'pages',
'slug' => 'exact',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:1;}',
'locked' => '1',
'translations' => [
[
'id' => 72,
'field_id' => 72,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.exact.name',
'placeholder' => 'anomaly.module.pages::field.exact.placeholder',
'warning' => 'anomaly.module.pages::field.exact.warning',
'instructions' => 'anomaly.module.pages::field.exact.instructions',
],
],
],
'translations' => [
[
'id' => 75,
'assignment_id' => 75,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.exact.label.pages',
'warning' => 'anomaly.module.pages::field.exact.warning.pages',
'placeholder' => 'anomaly.module.pages::field.exact.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.exact.instructions.pages',
],
],
],
[
'id' => 76,
'sort_order' => 76,
'stream_id' => 12,
'field_id' => 61,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '61',
'namespace' => 'pages',
'slug' => 'home',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:1:{s:13:"default_value";b:0;}',
'locked' => '1',
'translations' => [
[
'id' => 61,
'field_id' => 61,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.home.name',
'placeholder' => 'anomaly.module.pages::field.home.placeholder',
'warning' => 'anomaly.module.pages::field.home.warning',
'instructions' => 'anomaly.module.pages::field.home.instructions',
],
],
],
'translations' => [
[
'id' => 76,
'assignment_id' => 76,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.home.label.pages',
'warning' => 'anomaly.module.pages::field.home.warning.pages',
'placeholder' => 'anomaly.module.pages::field.home.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.home.instructions.pages',
],
],
],
[
'id' => 77,
'sort_order' => 77,
'stream_id' => 12,
'field_id' => 62,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '62',
'namespace' => 'pages',
'slug' => 'meta_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 62,
'field_id' => 62,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.meta_title.name',
'placeholder' => 'anomaly.module.pages::field.meta_title.placeholder',
'warning' => 'anomaly.module.pages::field.meta_title.warning',
'instructions' => 'anomaly.module.pages::field.meta_title.instructions',
],
],
],
'translations' => [
[
'id' => 77,
'assignment_id' => 77,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_title.label.pages',
'warning' => 'anomaly.module.pages::field.meta_title.warning.pages',
'placeholder' => 'anomaly.module.pages::field.meta_title.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.meta_title.instructions.pages',
],
],
],
[
'id' => 78,
'sort_order' => 78,
'stream_id' => 12,
'field_id' => 63,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '63',
'namespace' => 'pages',
'slug' => 'meta_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 63,
'field_id' => 63,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.meta_description.name',
'placeholder' => 'anomaly.module.pages::field.meta_description.placeholder',
'warning' => 'anomaly.module.pages::field.meta_description.warning',
'instructions' => 'anomaly.module.pages::field.meta_description.instructions',
],
],
],
'translations' => [
[
'id' => 78,
'assignment_id' => 78,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.meta_description.label.pages',
'warning' => 'anomaly.module.pages::field.meta_description.warning.pages',
'placeholder' => 'anomaly.module.pages::field.meta_description.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.meta_description.instructions.pages',
],
],
],
[
'id' => 80,
'sort_order' => 80,
'stream_id' => 12,
'field_id' => 68,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '68',
'namespace' => 'pages',
'slug' => 'theme_layout',
'type' => 'anomaly.field_type.select',
'config' => 'a:2:{s:13:"default_value";s:27:"theme::layouts/default.twig";s:7:"handler";s:46:"Anomaly\SelectFieldType\Handler\Layouts@handle";}',
'locked' => '1',
'translations' => [
[
'id' => 68,
'field_id' => 68,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.theme_layout.name',
'placeholder' => 'anomaly.module.pages::field.theme_layout.placeholder',
'warning' => 'anomaly.module.pages::field.theme_layout.warning',
'instructions' => 'anomaly.module.pages::field.theme_layout.instructions',
],
],
],
'translations' => [
[
'id' => 80,
'assignment_id' => 80,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.theme_layout.label.pages',
'warning' => 'anomaly.module.pages::field.theme_layout.warning.pages',
'placeholder' => 'anomaly.module.pages::field.theme_layout.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.theme_layout.instructions.pages',
],
],
],
[
'id' => 81,
'sort_order' => 81,
'stream_id' => 12,
'field_id' => 66,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '66',
'namespace' => 'pages',
'slug' => 'allowed_roles',
'type' => 'anomaly.field_type.multiple',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\UsersModule\Role\RoleModel";}',
'locked' => '1',
'translations' => [
[
'id' => 66,
'field_id' => 66,
'locale' => 'en',
'name' => 'anomaly.module.pages::field.allowed_roles.name',
'placeholder' => 'anomaly.module.pages::field.allowed_roles.placeholder',
'warning' => 'anomaly.module.pages::field.allowed_roles.warning',
'instructions' => 'anomaly.module.pages::field.allowed_roles.instructions',
],
],
],
'translations' => [
[
'id' => 81,
'assignment_id' => 81,
'locale' => 'en',
'label' => 'anomaly.module.pages::field.allowed_roles.label.pages',
'warning' => 'anomaly.module.pages::field.allowed_roles.warning.pages',
'placeholder' => 'anomaly.module.pages::field.allowed_roles.placeholder.pages',
'instructions' => 'anomaly.module.pages::field.allowed_roles.instructions.pages',
],
],
],
],
'translations' => [
[
'id' => 12,
'stream_id' => 12,
'locale' => 'en',
'name' => 'anomaly.module.pages::stream.pages.name',
'description' => 'anomaly.module.pages::stream.pages.description',
],
],
];

    
    /**
     * The type relation
     *
     * @return Relation
     */
    public function type()
    {
        return $this->getFieldType('type')->getRelation();
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
