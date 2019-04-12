<?php namespace Anomaly\Streams\Platform\Model\Users;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UsersRolesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'users_roles';

    protected $titleName = 'name';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:users_roles,slug',
        'description' => '',
        'permissions' => '',
];

    protected $fields = [
        'name',
        'slug',
        'description',
        'permissions',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Users\UsersRolesEntryTranslationsModel';

    protected $stream = [
'id' => '22',
'sort_order' => '',
'namespace' => 'users',
'slug' => 'roles',
'prefix' => 'users_',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '1',
'translatable' => '1',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 143,
'sort_order' => 142,
'stream_id' => 22,
'field_id' => 117,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '117',
'namespace' => 'users',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 117,
'field_id' => 117,
'locale' => 'en',
'name' => 'anomaly.module.users::field.name.name',
'placeholder' => 'anomaly.module.users::field.name.placeholder',
'warning' => 'anomaly.module.users::field.name.warning',
'instructions' => 'anomaly.module.users::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 143,
'assignment_id' => 143,
'locale' => 'en',
'label' => 'anomaly.module.users::field.name.label.roles',
'warning' => 'anomaly.module.users::field.name.warning.roles',
'placeholder' => 'anomaly.module.users::field.name.placeholder.roles',
'instructions' => 'anomaly.module.users::field.name.instructions.roles',
],
],
],
[
'id' => 144,
'sort_order' => 143,
'stream_id' => 22,
'field_id' => 125,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '125',
'namespace' => 'users',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 125,
'field_id' => 125,
'locale' => 'en',
'name' => 'anomaly.module.users::field.slug.name',
'placeholder' => 'anomaly.module.users::field.slug.placeholder',
'warning' => 'anomaly.module.users::field.slug.warning',
'instructions' => 'anomaly.module.users::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 144,
'assignment_id' => 144,
'locale' => 'en',
'label' => 'anomaly.module.users::field.slug.label.roles',
'warning' => 'anomaly.module.users::field.slug.warning.roles',
'placeholder' => 'anomaly.module.users::field.slug.placeholder.roles',
'instructions' => 'anomaly.module.users::field.slug.instructions.roles',
],
],
],
[
'id' => 145,
'sort_order' => 144,
'stream_id' => 22,
'field_id' => 118,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '118',
'namespace' => 'users',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 118,
'field_id' => 118,
'locale' => 'en',
'name' => 'anomaly.module.users::field.description.name',
'placeholder' => 'anomaly.module.users::field.description.placeholder',
'warning' => 'anomaly.module.users::field.description.warning',
'instructions' => 'anomaly.module.users::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 145,
'assignment_id' => 145,
'locale' => 'en',
'label' => 'anomaly.module.users::field.description.label.roles',
'warning' => 'anomaly.module.users::field.description.warning.roles',
'placeholder' => 'anomaly.module.users::field.description.placeholder.roles',
'instructions' => 'anomaly.module.users::field.description.instructions.roles',
],
],
],
[
'id' => 146,
'sort_order' => 145,
'stream_id' => 22,
'field_id' => 113,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '113',
'namespace' => 'users',
'slug' => 'permissions',
'type' => 'anomaly.field_type.checkboxes',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 113,
'field_id' => 113,
'locale' => 'en',
'name' => 'anomaly.module.users::field.permissions.name',
'placeholder' => 'anomaly.module.users::field.permissions.placeholder',
'warning' => 'anomaly.module.users::field.permissions.warning',
'instructions' => 'anomaly.module.users::field.permissions.instructions',
],
],
],
'translations' => [
[
'id' => 146,
'assignment_id' => 146,
'locale' => 'en',
'label' => 'anomaly.module.users::field.permissions.label.roles',
'warning' => 'anomaly.module.users::field.permissions.warning.roles',
'placeholder' => 'anomaly.module.users::field.permissions.placeholder.roles',
'instructions' => 'anomaly.module.users::field.permissions.instructions.roles',
],
],
],
],
'translations' => [
[
'id' => 22,
'stream_id' => 22,
'locale' => 'en',
'name' => 'anomaly.module.users::stream.roles.name',
'description' => 'anomaly.module.users::stream.roles.description',
],
],
];

    
}
