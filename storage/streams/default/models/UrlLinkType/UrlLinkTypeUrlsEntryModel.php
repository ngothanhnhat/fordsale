<?php namespace Anomaly\Streams\Platform\Model\UrlLinkType;

use Anomaly\Streams\Platform\Entry\EntryModel;

class UrlLinkTypeUrlsEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'url_link_type_urls';

    protected $titleName = 'title';

    protected $rules = [
        'title' => 'required',
        'url' => 'required',
        'description' => '',
];

    protected $fields = [
        'title',
        'url',
        'description',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = [];

    protected $translatedAttributes = ['title', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\UrlLinkType\UrlLinkTypeUrlsEntryTranslationsModel';

    protected $stream = [
'id' => '25',
'sort_order' => '',
'namespace' => 'url_link_type',
'slug' => 'urls',
'prefix' => 'url_link_type_',
'title_column' => 'title',
'order_by' => 'id',
'locked' => '0',
'hidden' => '0',
'sortable' => '0',
'searchable' => '0',
'trashable' => '0',
'translatable' => '1',
'versionable' => '0',
'config' => 'a:0:{}',
'assignments' => [
[
'id' => 151,
'sort_order' => 150,
'stream_id' => 25,
'field_id' => 131,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '131',
'namespace' => 'url_link_type',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 131,
'field_id' => 131,
'locale' => 'en',
'name' => 'anomaly.extension.url_link_type::field.title.name',
'placeholder' => 'anomaly.extension.url_link_type::field.title.placeholder',
'warning' => 'anomaly.extension.url_link_type::field.title.warning',
'instructions' => 'anomaly.extension.url_link_type::field.title.instructions',
],
],
],
'translations' => [
[
'id' => 151,
'assignment_id' => 151,
'locale' => 'en',
'label' => 'anomaly.extension.url_link_type::field.title.label.urls',
'warning' => 'anomaly.extension.url_link_type::field.title.warning.urls',
'placeholder' => 'anomaly.extension.url_link_type::field.title.placeholder.urls',
'instructions' => 'anomaly.extension.url_link_type::field.title.instructions.urls',
],
],
],
[
'id' => 152,
'sort_order' => 151,
'stream_id' => 25,
'field_id' => 132,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '132',
'namespace' => 'url_link_type',
'slug' => 'url',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 132,
'field_id' => 132,
'locale' => 'en',
'name' => 'anomaly.extension.url_link_type::field.url.name',
'placeholder' => 'anomaly.extension.url_link_type::field.url.placeholder',
'warning' => 'anomaly.extension.url_link_type::field.url.warning',
'instructions' => 'anomaly.extension.url_link_type::field.url.instructions',
],
],
],
'translations' => [
[
'id' => 152,
'assignment_id' => 152,
'locale' => 'en',
'label' => 'anomaly.extension.url_link_type::field.url.label.urls',
'warning' => 'anomaly.extension.url_link_type::field.url.warning.urls',
'placeholder' => 'anomaly.extension.url_link_type::field.url.placeholder.urls',
'instructions' => 'anomaly.extension.url_link_type::field.url.instructions.urls',
],
],
],
[
'id' => 153,
'sort_order' => 152,
'stream_id' => 25,
'field_id' => 133,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '133',
'namespace' => 'url_link_type',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 133,
'field_id' => 133,
'locale' => 'en',
'name' => 'anomaly.extension.url_link_type::field.description.name',
'placeholder' => 'anomaly.extension.url_link_type::field.description.placeholder',
'warning' => 'anomaly.extension.url_link_type::field.description.warning',
'instructions' => 'anomaly.extension.url_link_type::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 153,
'assignment_id' => 153,
'locale' => 'en',
'label' => 'anomaly.extension.url_link_type::field.description.label.urls',
'warning' => 'anomaly.extension.url_link_type::field.description.warning.urls',
'placeholder' => 'anomaly.extension.url_link_type::field.description.placeholder.urls',
'instructions' => 'anomaly.extension.url_link_type::field.description.instructions.urls',
],
],
],
],
'translations' => [
[
'id' => 25,
'stream_id' => 25,
'locale' => 'en',
'name' => 'anomaly.extension.url_link_type::stream.urls.name',
'description' => 'anomaly.extension.url_link_type::stream.urls.description',
],
],
];

    
}
