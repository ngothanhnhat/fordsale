<?php namespace Anomaly\Streams\Platform\Model\StreamsUtilities;

use Anomaly\Streams\Platform\Entry\EntryModel;

class StreamsUtilitiesGroupsEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'streams_utilities_groups';

    protected $titleName = 'id';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:streams_utilities_groups,slug',
        'description' => '',
        'virtualize' => '',
        'icon' => '',
];

    protected $fields = [
        'name',
        'slug',
        'description',
        'virtualize',
        'icon',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['name', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\StreamsUtilities\StreamsUtilitiesGroupsEntryTranslationsModel';

    protected $stream = [
'id' => '58',
'sort_order' => '',
'namespace' => 'streams_utilities',
'slug' => 'groups',
'prefix' => 'streams_utilities_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '1',
'searchable' => '0',
'trashable' => '0',
'translatable' => '1',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 323,
'sort_order' => 180,
'stream_id' => 58,
'field_id' => 239,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '239',
'namespace' => 'streams_utilities',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 239,
'field_id' => 239,
'locale' => 'en',
'name' => 'anomaly.module.streams::field.name.name',
'placeholder' => 'anomaly.module.streams::field.name.placeholder',
'warning' => 'anomaly.module.streams::field.name.warning',
'instructions' => 'anomaly.module.streams::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 320,
'assignment_id' => 323,
'locale' => 'en',
'label' => 'anomaly.module.streams::field.name.label.groups',
'warning' => 'anomaly.module.streams::field.name.warning.groups',
'placeholder' => 'anomaly.module.streams::field.name.placeholder.groups',
'instructions' => 'anomaly.module.streams::field.name.instructions.groups',
],
],
],
[
'id' => 324,
'sort_order' => 181,
'stream_id' => 58,
'field_id' => 241,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '241',
'namespace' => 'streams_utilities',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:1:{s:7:"slugify";s:4:"name";}',
'locked' => '1',
'translations' => [
[
'id' => 241,
'field_id' => 241,
'locale' => 'en',
'name' => 'anomaly.module.streams::field.slug.name',
'placeholder' => 'anomaly.module.streams::field.slug.placeholder',
'warning' => 'anomaly.module.streams::field.slug.warning',
'instructions' => 'anomaly.module.streams::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 321,
'assignment_id' => 324,
'locale' => 'en',
'label' => 'anomaly.module.streams::field.slug.label.groups',
'warning' => 'anomaly.module.streams::field.slug.warning.groups',
'placeholder' => 'anomaly.module.streams::field.slug.placeholder.groups',
'instructions' => 'anomaly.module.streams::field.slug.instructions.groups',
],
],
],
[
'id' => 325,
'sort_order' => 182,
'stream_id' => 58,
'field_id' => 240,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '240',
'namespace' => 'streams_utilities',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 240,
'field_id' => 240,
'locale' => 'en',
'name' => 'anomaly.module.streams::field.description.name',
'placeholder' => 'anomaly.module.streams::field.description.placeholder',
'warning' => 'anomaly.module.streams::field.description.warning',
'instructions' => 'anomaly.module.streams::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 322,
'assignment_id' => 325,
'locale' => 'en',
'label' => 'anomaly.module.streams::field.description.label.groups',
'warning' => 'anomaly.module.streams::field.description.warning.groups',
'placeholder' => 'anomaly.module.streams::field.description.placeholder.groups',
'instructions' => 'anomaly.module.streams::field.description.instructions.groups',
],
],
],
[
'id' => 326,
'sort_order' => 183,
'stream_id' => 58,
'field_id' => 242,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '242',
'namespace' => 'streams_utilities',
'slug' => 'virtualize',
'type' => 'anomaly.field_type.boolean',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 242,
'field_id' => 242,
'locale' => 'en',
'name' => 'anomaly.module.streams::field.virtualize.name',
'placeholder' => 'anomaly.module.streams::field.virtualize.placeholder',
'warning' => 'anomaly.module.streams::field.virtualize.warning',
'instructions' => 'anomaly.module.streams::field.virtualize.instructions',
],
],
],
'translations' => [
[
'id' => 323,
'assignment_id' => 326,
'locale' => 'en',
'label' => 'anomaly.module.streams::field.virtualize.label.groups',
'warning' => 'anomaly.module.streams::field.virtualize.warning.groups',
'placeholder' => 'anomaly.module.streams::field.virtualize.placeholder.groups',
'instructions' => 'anomaly.module.streams::field.virtualize.instructions.groups',
],
],
],
[
'id' => 327,
'sort_order' => 184,
'stream_id' => 58,
'field_id' => 243,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '243',
'namespace' => 'streams_utilities',
'slug' => 'icon',
'type' => 'anomaly.field_type.icon',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 243,
'field_id' => 243,
'locale' => 'en',
'name' => 'anomaly.module.streams::field.icon.name',
'placeholder' => 'anomaly.module.streams::field.icon.placeholder',
'warning' => 'anomaly.module.streams::field.icon.warning',
'instructions' => 'anomaly.module.streams::field.icon.instructions',
],
],
],
'translations' => [
[
'id' => 324,
'assignment_id' => 327,
'locale' => 'en',
'label' => 'anomaly.module.streams::field.icon.label.groups',
'warning' => 'anomaly.module.streams::field.icon.warning.groups',
'placeholder' => 'anomaly.module.streams::field.icon.placeholder.groups',
'instructions' => 'anomaly.module.streams::field.icon.instructions.groups',
],
],
],
],
'translations' => [
[
'id' => 58,
'stream_id' => 58,
'locale' => 'en',
'name' => 'anomaly.module.streams::stream.groups.name',
'description' => 'anomaly.module.streams::stream.groups.description',
],
],
];

    
}
