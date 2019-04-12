<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesFoldersEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'files_folders';

    protected $titleName = 'name';

    protected $rules = [
        'disk' => 'required',
        'name' => 'required',
        'slug' => 'required|unique:files_folders,slug',
        'description' => '',
        'allowed_types' => '',
];

    protected $fields = [
        'disk',
        'name',
        'slug',
        'description',
        'allowed_types',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['disk'];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Files\FilesFoldersEntryTranslationsModel';

    protected $stream = [
'id' => '8',
'sort_order' => '',
'namespace' => 'files',
'slug' => 'folders',
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
'id' => 37,
'sort_order' => 37,
'stream_id' => 8,
'field_id' => 32,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '32',
'namespace' => 'files',
'slug' => 'disk',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:34:"Anomaly\FilesModule\Disk\DiskModel";}',
'locked' => '1',
'translations' => [
[
'id' => 32,
'field_id' => 32,
'locale' => 'en',
'name' => 'anomaly.module.files::field.disk.name',
'placeholder' => 'anomaly.module.files::field.disk.placeholder',
'warning' => 'anomaly.module.files::field.disk.warning',
'instructions' => 'anomaly.module.files::field.disk.instructions',
],
],
],
'translations' => [
[
'id' => 37,
'assignment_id' => 37,
'locale' => 'en',
'label' => 'anomaly.module.files::field.disk.label.folders',
'warning' => 'anomaly.module.files::field.disk.warning.folders',
'placeholder' => 'anomaly.module.files::field.disk.placeholder.folders',
'instructions' => 'anomaly.module.files::field.disk.instructions.folders',
],
],
],
[
'id' => 38,
'sort_order' => 38,
'stream_id' => 8,
'field_id' => 28,
'config' => 'a:1:{s:3:"max";i:50;}',
'unique' => 0,
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
'id' => 38,
'assignment_id' => 38,
'locale' => 'en',
'label' => 'anomaly.module.files::field.name.label.folders',
'warning' => 'anomaly.module.files::field.name.warning.folders',
'placeholder' => 'anomaly.module.files::field.name.placeholder.folders',
'instructions' => 'anomaly.module.files::field.name.instructions.folders',
],
],
],
[
'id' => 39,
'sort_order' => 39,
'stream_id' => 8,
'field_id' => 29,
'config' => 'a:1:{s:3:"max";i:50;}',
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
'id' => 39,
'assignment_id' => 39,
'locale' => 'en',
'label' => 'anomaly.module.files::field.slug.label.folders',
'warning' => 'anomaly.module.files::field.slug.warning.folders',
'placeholder' => 'anomaly.module.files::field.slug.placeholder.folders',
'instructions' => 'anomaly.module.files::field.slug.instructions.folders',
],
],
],
[
'id' => 40,
'sort_order' => 40,
'stream_id' => 8,
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
'id' => 40,
'assignment_id' => 40,
'locale' => 'en',
'label' => 'anomaly.module.files::field.description.label.folders',
'warning' => 'anomaly.module.files::field.description.warning.folders',
'placeholder' => 'anomaly.module.files::field.description.placeholder.folders',
'instructions' => 'anomaly.module.files::field.description.instructions.folders',
],
],
],
[
'id' => 41,
'sort_order' => 41,
'stream_id' => 8,
'field_id' => 35,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '35',
'namespace' => 'files',
'slug' => 'allowed_types',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 35,
'field_id' => 35,
'locale' => 'en',
'name' => 'anomaly.module.files::field.allowed_types.name',
'placeholder' => 'anomaly.module.files::field.allowed_types.placeholder',
'warning' => 'anomaly.module.files::field.allowed_types.warning',
'instructions' => 'anomaly.module.files::field.allowed_types.instructions',
],
],
],
'translations' => [
[
'id' => 41,
'assignment_id' => 41,
'locale' => 'en',
'label' => 'anomaly.module.files::field.allowed_types.label.folders',
'warning' => 'anomaly.module.files::field.allowed_types.warning.folders',
'placeholder' => 'anomaly.module.files::field.allowed_types.placeholder.folders',
'instructions' => 'anomaly.module.files::field.allowed_types.instructions.folders',
],
],
],
],
'translations' => [
[
'id' => 8,
'stream_id' => 8,
'locale' => 'en',
'name' => 'anomaly.module.files::stream.folders.name',
'description' => 'anomaly.module.files::stream.folders.description',
],
],
];

    
    /**
     * The disk relation
     *
     * @return Relation
     */
    public function disk()
    {
        return $this->getFieldType('disk')->getRelation();
    }

}
