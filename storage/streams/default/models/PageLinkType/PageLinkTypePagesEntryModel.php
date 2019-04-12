<?php namespace Anomaly\Streams\Platform\Model\PageLinkType;

use Anomaly\Streams\Platform\Entry\EntryModel;

class PageLinkTypePagesEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'page_link_type_pages';

    protected $titleName = 'title';

    protected $rules = [
        'title' => '',
        'page' => 'required',
        'description' => '',
];

    protected $fields = [
        'title',
        'page',
        'description',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['page'];

    protected $translatedAttributes = ['title', 'description'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\PageLinkType\PageLinkTypePagesEntryTranslationsModel';

    protected $stream = [
'id' => '24',
'sort_order' => '',
'namespace' => 'page_link_type',
'slug' => 'pages',
'prefix' => 'page_link_type_',
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
'id' => 148,
'sort_order' => 147,
'stream_id' => 24,
'field_id' => 128,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '128',
'namespace' => 'page_link_type',
'slug' => 'title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 128,
'field_id' => 128,
'locale' => 'en',
'name' => 'anomaly.extension.page_link_type::field.title.name',
'placeholder' => 'anomaly.extension.page_link_type::field.title.placeholder',
'warning' => 'anomaly.extension.page_link_type::field.title.warning',
'instructions' => 'anomaly.extension.page_link_type::field.title.instructions',
],
],
],
'translations' => [
[
'id' => 148,
'assignment_id' => 148,
'locale' => 'en',
'label' => 'anomaly.extension.page_link_type::field.title.label.pages',
'warning' => 'anomaly.extension.page_link_type::field.title.warning.pages',
'placeholder' => 'anomaly.extension.page_link_type::field.title.placeholder.pages',
'instructions' => 'anomaly.extension.page_link_type::field.title.instructions.pages',
],
],
],
[
'id' => 149,
'sort_order' => 148,
'stream_id' => 24,
'field_id' => 129,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '129',
'namespace' => 'page_link_type',
'slug' => 'page',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:2:{s:4:"mode";s:6:"lookup";s:7:"related";s:34:"Anomaly\PagesModule\Page\PageModel";}',
'locked' => '1',
'translations' => [
[
'id' => 129,
'field_id' => 129,
'locale' => 'en',
'name' => 'anomaly.extension.page_link_type::field.page.name',
'placeholder' => 'anomaly.extension.page_link_type::field.page.placeholder',
'warning' => 'anomaly.extension.page_link_type::field.page.warning',
'instructions' => 'anomaly.extension.page_link_type::field.page.instructions',
],
],
],
'translations' => [
[
'id' => 149,
'assignment_id' => 149,
'locale' => 'en',
'label' => 'anomaly.extension.page_link_type::field.page.label.pages',
'warning' => 'anomaly.extension.page_link_type::field.page.warning.pages',
'placeholder' => 'anomaly.extension.page_link_type::field.page.placeholder.pages',
'instructions' => 'anomaly.extension.page_link_type::field.page.instructions.pages',
],
],
],
[
'id' => 150,
'sort_order' => 149,
'stream_id' => 24,
'field_id' => 130,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '130',
'namespace' => 'page_link_type',
'slug' => 'description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 130,
'field_id' => 130,
'locale' => 'en',
'name' => 'anomaly.extension.page_link_type::field.description.name',
'placeholder' => 'anomaly.extension.page_link_type::field.description.placeholder',
'warning' => 'anomaly.extension.page_link_type::field.description.warning',
'instructions' => 'anomaly.extension.page_link_type::field.description.instructions',
],
],
],
'translations' => [
[
'id' => 150,
'assignment_id' => 150,
'locale' => 'en',
'label' => 'anomaly.extension.page_link_type::field.description.label.pages',
'warning' => 'anomaly.extension.page_link_type::field.description.warning.pages',
'placeholder' => 'anomaly.extension.page_link_type::field.description.placeholder.pages',
'instructions' => 'anomaly.extension.page_link_type::field.description.instructions.pages',
],
],
],
],
'translations' => [
[
'id' => 24,
'stream_id' => 24,
'locale' => 'en',
'name' => 'anomaly.extension.page_link_type::stream.pages.name',
'description' => 'anomaly.extension.page_link_type::stream.pages.description',
],
],
];

    
    /**
     * The page relation
     *
     * @return Relation
     */
    public function page()
    {
        return $this->getFieldType('page')->getRelation();
    }

}
