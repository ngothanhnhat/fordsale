<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesDisksEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'files_disks';

    protected $titleName = 'name';

    protected $rules = [
        'name' => 'required|unique:files_disks,name',
        'slug' => 'required|unique:files_disks,slug',
        'adapter' => 'required',
        'description' => '',
];

    protected $fields = [
        'name',
        'slug',
        'adapter',
        'description',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Files\FilesDisksEntryTranslationsModel';

    protected $stream = [
'id' => '7',
'sort_order' => '',
'namespace' => 'files',
'slug' => 'disks',
'prefix' => 'files_',
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
'id' => 33,
'sort_order' => 33,
'stream_id' => 7,
'field_id' => 28,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '28',
'namespace' => 'files',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 28,
'field_id' => 28,
'locale' => 'en',
'name' => 'anomaly.module.files::field.name.name',
'placeholder' => 'anomaly.module.files::field.name.placeholder',
'warning' => 'anomaly.module.files::field.name.warning',
'instructions' => 'anomaly.module.files::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 33,
'assignment_id' => 33,
'locale' => 'en',
'label' => 'anomaly.module.files::field.name.label.disks',
'warning' => 'anomaly.module.files::field.name.warning.disks',
'placeholder' => 'anomaly.module.files::field.name.placeholder.disks',
'instructions' => 'anomaly.module.files::field.name.instructions.disks',
],
],
],
[
'id' => 34,
'sort_order' => 34,
'stream_id' => 7,
'field_id' => 29,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '29',
'namespace' => 'files',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 29,
'field_id' => 29,
'locale' => 'en',
'name' => 'anomaly.module.files::field.slug.name',
'placeholder' => 'anomaly.module.files::field.slug.placeholder',
'warning' => 'anomaly.module.files::field.slug.warning',
'instructions' => 'anomaly.module.files::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 34,
'assignment_id' => 34,
'locale' => 'en',
'label' => 'anomaly.module.files::field.slug.label.disks',
'warning' => 'anomaly.module.files::field.slug.warning.disks',
'placeholder' => 'anomaly.module.files::field.slug.placeholder.disks',
'instructions' => 'anomaly.module.files::field.slug.instructions.disks',
],
],
],
[
'id' => 35,
'sort_order' => 35,
'stream_id' => 7,
'field_id' => 30,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '30',
'namespace' => 'files',
'slug' => 'adapter',
'type' => 'anomaly.field_type.addon',
'config' => 'a:2:{s:4:"type";s:10:"extensions";s:6:"search";s:31:"anomaly.module.files::adapter.*";}',
'locked' => '1',
'translations' => [
[
'id' => 30,
'field_id' => 30,
'locale' => 'en',
'name' => 'anomaly.module.files::field.adapter.name',
'placeholder' => 'anomaly.module.files::field.adapter.placeholder',
'warning' => 'anomaly.module.files::field.adapter.warning',
'instructions' => 'anomaly.module.files::field.adapter.instructions',
],
],
],
'translations' => [
[
'id' => 35,
'assignment_id' => 35,
'locale' => 'en',
'label' => 'anomaly.module.files::field.adapter.label.disks',
'warning' => 'anomaly.module.files::field.adapter.warning.disks',
'placeholder' => 'anomaly.module.files::field.adapter.placeholder.disks',
'instructions' => 'anomaly.module.files::field.adapter.instructions.disks',
],
],
],
[
'id' => 36,
'sort_order' => 36,
'stream_id' => 7,
'field_id' => 34,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '34',
'namespace' => 'files',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 34,
'field_id' => 34,
'locale' => 'en',
'name' => 'anomaly.module.files::field.description.name',
'placeholder' => 'anomaly.module.files::field.description.placeholder',
'warning' => 'anomaly.module.files::field.description.warning',
'instructions' => 'anomaly.module.files::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 36,
'assignment_id' => 36,
'locale' => 'en',
'label' => 'anomaly.module.files::field.description.label.disks',
'warning' => 'anomaly.module.files::field.description.warning.disks',
'placeholder' => 'anomaly.module.files::field.description.placeholder.disks',
'instructions' => 'anomaly.module.files::field.description.instructions.disks',
],
],
],
],
'translations' => [
[
'id' => 7,
'stream_id' => 7,
'locale' => 'en',
'name' => 'anomaly.module.files::stream.disks.name',
'description' => 'anomaly.module.files::stream.disks.description',
],
],
];

    
}
