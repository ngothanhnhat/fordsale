<?php namespace Anomaly\Streams\Platform\Model\Settings;

use Anomaly\Streams\Platform\Entry\EntryModel;

class SettingsSettingsEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'settings_settings';

    protected $titleName = 'id';

    protected $rules = [
        'key' => 'required|unique:settings_settings,key',
        'value' => '',
];

    protected $fields = [
        'key',
        'value',
];

    protected $with = [];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    

    

    

    protected $stream = [
'id' => '20',
'sort_order' => '',
'namespace' => 'settings',
'slug' => 'settings',
'prefix' => 'settings_',
'title_column' => 'id',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '0',
'translatable' => '0',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 125,
'sort_order' => 124,
'stream_id' => 20,
'field_id' => 104,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '104',
'namespace' => 'settings',
'slug' => 'key',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 104,
'field_id' => 104,
'locale' => 'en',
'name' => 'anomaly.module.settings::field.key.name',
'placeholder' => 'anomaly.module.settings::field.key.placeholder',
'warning' => 'anomaly.module.settings::field.key.warning',
'instructions' => 'anomaly.module.settings::field.key.instructions',
],
],
],
'translations' => [
[
'id' => 125,
'assignment_id' => 125,
'locale' => 'en',
'label' => 'anomaly.module.settings::field.key.label.settings',
'warning' => 'anomaly.module.settings::field.key.warning.settings',
'placeholder' => 'anomaly.module.settings::field.key.placeholder.settings',
'instructions' => 'anomaly.module.settings::field.key.instructions.settings',
],
],
],
[
'id' => 126,
'sort_order' => 125,
'stream_id' => 20,
'field_id' => 105,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '105',
'namespace' => 'settings',
'slug' => 'value',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 105,
'field_id' => 105,
'locale' => 'en',
'name' => 'anomaly.module.settings::field.value.name',
'placeholder' => 'anomaly.module.settings::field.value.placeholder',
'warning' => 'anomaly.module.settings::field.value.warning',
'instructions' => 'anomaly.module.settings::field.value.instructions',
],
],
],
'translations' => [
[
'id' => 126,
'assignment_id' => 126,
'locale' => 'en',
'label' => 'anomaly.module.settings::field.value.label.settings',
'warning' => 'anomaly.module.settings::field.value.warning.settings',
'placeholder' => 'anomaly.module.settings::field.value.placeholder.settings',
'instructions' => 'anomaly.module.settings::field.value.instructions.settings',
],
],
],
],
'translations' => [
[
'id' => 20,
'stream_id' => 20,
'locale' => 'en',
'name' => 'anomaly.module.settings::stream.settings.name',
'description' => 'anomaly.module.settings::stream.settings.description',
],
],
];

    
}
