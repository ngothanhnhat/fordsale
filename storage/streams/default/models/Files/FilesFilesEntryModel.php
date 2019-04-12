<?php namespace Anomaly\Streams\Platform\Model\Files;

use Anomaly\Streams\Platform\Entry\EntryModel;

class FilesFilesEntryModel extends EntryModel
{

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $searchable = true;

    protected $versionable = false;

    protected $table = 'files_files';

    protected $titleName = 'name';

    protected $rules = [
        'name' => 'required',
        'disk' => 'required',
        'folder' => 'required',
        'extension' => 'required',
        'size' => 'required',
        'mime_type' => 'required',
        'entry' => '',
        'keywords' => '',
        'height' => '',
        'width' => '',
        'alt_text' => '',
        'title' => '',
        'caption' => '',
        'description' => '',
];

    protected $fields = [
        'name',
        'disk',
        'folder',
        'extension',
        'size',
        'mime_type',
        'entry',
        'keywords',
        'height',
        'width',
        'alt_text',
        'title',
        'caption',
        'description',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $relationships = ['disk', 'folder', 'entry'];

    

    

    

    protected $stream = [
'id' => '9',
'sort_order' => '',
'namespace' => 'files',
'slug' => 'files',
'prefix' => 'files_',
'title_column' => 'name',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '1',
'trashable' => '1',
'translatable' => '0',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 42,
'sort_order' => 42,
'stream_id' => 9,
'field_id' => 28,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
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
'id' => 42,
'assignment_id' => 42,
'locale' => 'en',
'label' => 'anomaly.module.files::field.name.label.files',
'warning' => 'anomaly.module.files::field.name.warning.files',
'placeholder' => 'anomaly.module.files::field.name.placeholder.files',
'instructions' => 'anomaly.module.files::field.name.instructions.files',
],
],
],
[
'id' => 43,
'sort_order' => 43,
'stream_id' => 9,
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
'id' => 43,
'assignment_id' => 43,
'locale' => 'en',
'label' => 'anomaly.module.files::field.disk.label.files',
'warning' => 'anomaly.module.files::field.disk.warning.files',
'placeholder' => 'anomaly.module.files::field.disk.placeholder.files',
'instructions' => 'anomaly.module.files::field.disk.instructions.files',
],
],
],
[
'id' => 44,
'sort_order' => 44,
'stream_id' => 9,
'field_id' => 31,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '31',
'namespace' => 'files',
'slug' => 'folder',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:1:{s:7:"related";s:38:"Anomaly\FilesModule\Folder\FolderModel";}',
'locked' => '1',
'translations' => [
[
'id' => 31,
'field_id' => 31,
'locale' => 'en',
'name' => 'anomaly.module.files::field.folder.name',
'placeholder' => 'anomaly.module.files::field.folder.placeholder',
'warning' => 'anomaly.module.files::field.folder.warning',
'instructions' => 'anomaly.module.files::field.folder.instructions',
],
],
],
'translations' => [
[
'id' => 44,
'assignment_id' => 44,
'locale' => 'en',
'label' => 'anomaly.module.files::field.folder.label.files',
'warning' => 'anomaly.module.files::field.folder.warning.files',
'placeholder' => 'anomaly.module.files::field.folder.placeholder.files',
'instructions' => 'anomaly.module.files::field.folder.instructions.files',
],
],
],
[
'id' => 45,
'sort_order' => 45,
'stream_id' => 9,
'field_id' => 37,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '37',
'namespace' => 'files',
'slug' => 'extension',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 37,
'field_id' => 37,
'locale' => 'en',
'name' => 'anomaly.module.files::field.extension.name',
'placeholder' => 'anomaly.module.files::field.extension.placeholder',
'warning' => 'anomaly.module.files::field.extension.warning',
'instructions' => 'anomaly.module.files::field.extension.instructions',
],
],
],
'translations' => [
[
'id' => 45,
'assignment_id' => 45,
'locale' => 'en',
'label' => 'anomaly.module.files::field.extension.label.files',
'warning' => 'anomaly.module.files::field.extension.warning.files',
'placeholder' => 'anomaly.module.files::field.extension.placeholder.files',
'instructions' => 'anomaly.module.files::field.extension.instructions.files',
],
],
],
[
'id' => 46,
'sort_order' => 46,
'stream_id' => 9,
'field_id' => 41,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '41',
'namespace' => 'files',
'slug' => 'size',
'type' => 'anomaly.field_type.integer',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 41,
'field_id' => 41,
'locale' => 'en',
'name' => 'anomaly.module.files::field.size.name',
'placeholder' => 'anomaly.module.files::field.size.placeholder',
'warning' => 'anomaly.module.files::field.size.warning',
'instructions' => 'anomaly.module.files::field.size.instructions',
],
],
],
'translations' => [
[
'id' => 46,
'assignment_id' => 46,
'locale' => 'en',
'label' => 'anomaly.module.files::field.size.label.files',
'warning' => 'anomaly.module.files::field.size.warning.files',
'placeholder' => 'anomaly.module.files::field.size.placeholder.files',
'instructions' => 'anomaly.module.files::field.size.instructions.files',
],
],
],
[
'id' => 47,
'sort_order' => 47,
'stream_id' => 9,
'field_id' => 40,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '40',
'namespace' => 'files',
'slug' => 'mime_type',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 40,
'field_id' => 40,
'locale' => 'en',
'name' => 'anomaly.module.files::field.mime_type.name',
'placeholder' => 'anomaly.module.files::field.mime_type.placeholder',
'warning' => 'anomaly.module.files::field.mime_type.warning',
'instructions' => 'anomaly.module.files::field.mime_type.instructions',
],
],
],
'translations' => [
[
'id' => 47,
'assignment_id' => 47,
'locale' => 'en',
'label' => 'anomaly.module.files::field.mime_type.label.files',
'warning' => 'anomaly.module.files::field.mime_type.warning.files',
'placeholder' => 'anomaly.module.files::field.mime_type.placeholder.files',
'instructions' => 'anomaly.module.files::field.mime_type.instructions.files',
],
],
],
[
'id' => 48,
'sort_order' => 48,
'stream_id' => 9,
'field_id' => 33,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '33',
'namespace' => 'files',
'slug' => 'entry',
'type' => 'anomaly.field_type.polymorphic',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 33,
'field_id' => 33,
'locale' => 'en',
'name' => 'anomaly.module.files::field.entry.name',
'placeholder' => 'anomaly.module.files::field.entry.placeholder',
'warning' => 'anomaly.module.files::field.entry.warning',
'instructions' => 'anomaly.module.files::field.entry.instructions',
],
],
],
'translations' => [
[
'id' => 48,
'assignment_id' => 48,
'locale' => 'en',
'label' => 'anomaly.module.files::field.entry.label.files',
'warning' => 'anomaly.module.files::field.entry.warning.files',
'placeholder' => 'anomaly.module.files::field.entry.placeholder.files',
'instructions' => 'anomaly.module.files::field.entry.instructions.files',
],
],
],
[
'id' => 49,
'sort_order' => 49,
'stream_id' => 9,
'field_id' => 36,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '36',
'namespace' => 'files',
'slug' => 'keywords',
'type' => 'anomaly.field_type.tags',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 36,
'field_id' => 36,
'locale' => 'en',
'name' => 'anomaly.module.files::field.keywords.name',
'placeholder' => 'anomaly.module.files::field.keywords.placeholder',
'warning' => 'anomaly.module.files::field.keywords.warning',
'instructions' => 'anomaly.module.files::field.keywords.instructions',
],
],
],
'translations' => [
[
'id' => 49,
'assignment_id' => 49,
'locale' => 'en',
'label' => 'anomaly.module.files::field.keywords.label.files',
'warning' => 'anomaly.module.files::field.keywords.warning.files',
'placeholder' => 'anomaly.module.files::field.keywords.placeholder.files',
'instructions' => 'anomaly.module.files::field.keywords.instructions.files',
],
],
],
[
'id' => 50,
'sort_order' => 50,
'stream_id' => 9,
'field_id' => 39,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '39',
'namespace' => 'files',
'slug' => 'height',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 39,
'field_id' => 39,
'locale' => 'en',
'name' => 'anomaly.module.files::field.height.name',
'placeholder' => 'anomaly.module.files::field.height.placeholder',
'warning' => 'anomaly.module.files::field.height.warning',
'instructions' => 'anomaly.module.files::field.height.instructions',
],
],
],
'translations' => [
[
'id' => 50,
'assignment_id' => 50,
'locale' => 'en',
'label' => 'anomaly.module.files::field.height.label.files',
'warning' => 'anomaly.module.files::field.height.warning.files',
'placeholder' => 'anomaly.module.files::field.height.placeholder.files',
'instructions' => 'anomaly.module.files::field.height.instructions.files',
],
],
],
[
'id' => 51,
'sort_order' => 51,
'stream_id' => 9,
'field_id' => 38,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '38',
'namespace' => 'files',
'slug' => 'width',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 38,
'field_id' => 38,
'locale' => 'en',
'name' => 'anomaly.module.files::field.width.name',
'placeholder' => 'anomaly.module.files::field.width.placeholder',
'warning' => 'anomaly.module.files::field.width.warning',
'instructions' => 'anomaly.module.files::field.width.instructions',
],
],
],
'translations' => [
[
'id' => 51,
'assignment_id' => 51,
'locale' => 'en',
'label' => 'anomaly.module.files::field.width.label.files',
'warning' => 'anomaly.module.files::field.width.warning.files',
'placeholder' => 'anomaly.module.files::field.width.placeholder.files',
'instructions' => 'anomaly.module.files::field.width.instructions.files',
],
],
],
[
'id' => 52,
'sort_order' => 52,
'stream_id' => 9,
'field_id' => 42,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '42',
'namespace' => 'files',
'slug' => 'alt_text',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 42,
'field_id' => 42,
'locale' => 'en',
'name' => 'anomaly.module.files::field.alt_text.name',
'placeholder' => 'anomaly.module.files::field.alt_text.placeholder',
'warning' => 'anomaly.module.files::field.alt_text.warning',
'instructions' => 'anomaly.module.files::field.alt_text.instructions',
],
],
],
'translations' => [
[
'id' => 52,
'assignment_id' => 52,
'locale' => 'en',
'label' => 'anomaly.module.files::field.alt_text.label.files',
'warning' => 'anomaly.module.files::field.alt_text.warning.files',
'placeholder' => 'anomaly.module.files::field.alt_text.placeholder.files',
'instructions' => 'anomaly.module.files::field.alt_text.instructions.files',
],
],
],
[
'id' => 53,
'sort_order' => 53,
'stream_id' => 9,
'field_id' => 43,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '43',
'namespace' => 'files',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 43,
'field_id' => 43,
'locale' => 'en',
'name' => 'anomaly.module.files::field.title.name',
'placeholder' => 'anomaly.module.files::field.title.placeholder',
'warning' => 'anomaly.module.files::field.title.warning',
'instructions' => 'anomaly.module.files::field.title.instructions',
],
],
],
'translations' => [
[
'id' => 53,
'assignment_id' => 53,
'locale' => 'en',
'label' => 'anomaly.module.files::field.title.label.files',
'warning' => 'anomaly.module.files::field.title.warning.files',
'placeholder' => 'anomaly.module.files::field.title.placeholder.files',
'instructions' => 'anomaly.module.files::field.title.instructions.files',
],
],
],
[
'id' => 54,
'sort_order' => 54,
'stream_id' => 9,
'field_id' => 44,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '44',
'namespace' => 'files',
'slug' => 'caption',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 44,
'field_id' => 44,
'locale' => 'en',
'name' => 'anomaly.module.files::field.caption.name',
'placeholder' => 'anomaly.module.files::field.caption.placeholder',
'warning' => 'anomaly.module.files::field.caption.warning',
'instructions' => 'anomaly.module.files::field.caption.instructions',
],
],
],
'translations' => [
[
'id' => 54,
'assignment_id' => 54,
'locale' => 'en',
'label' => 'anomaly.module.files::field.caption.label.files',
'warning' => 'anomaly.module.files::field.caption.warning.files',
'placeholder' => 'anomaly.module.files::field.caption.placeholder.files',
'instructions' => 'anomaly.module.files::field.caption.instructions.files',
],
],
],
[
'id' => 55,
'sort_order' => 55,
'stream_id' => 9,
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
'id' => 55,
'assignment_id' => 55,
'locale' => 'en',
'label' => 'anomaly.module.files::field.description.label.files',
'warning' => 'anomaly.module.files::field.description.warning.files',
'placeholder' => 'anomaly.module.files::field.description.placeholder.files',
'instructions' => 'anomaly.module.files::field.description.instructions.files',
],
],
],
],
'translations' => [
[
'id' => 9,
'stream_id' => 9,
'locale' => 'en',
'name' => 'anomaly.module.files::stream.files.name',
'description' => 'anomaly.module.files::stream.files.description',
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

    /**
     * The folder relation
     *
     * @return Relation
     */
    public function folder()
    {
        return $this->getFieldType('folder')->getRelation();
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

}
