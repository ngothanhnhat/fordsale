<?php namespace Anomaly\Streams\Platform\Model\Car;

use Anomaly\Streams\Platform\Entry\EntryModel;

class CarCategoriesEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'car_categories';

    protected $titleName = 'name';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:car_categories,slug',
        'meta_title' => '',
        'meta_description' => '',
        'meta_image' => '',
];

    protected $fields = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'meta_image',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['meta_image'];

    protected $translatedAttributes = ['name'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Car\CarCategoriesEntryTranslationsModel';

    protected $stream = [
'id' => '80',
'sort_order' => '',
'namespace' => 'car',
'slug' => 'categories',
'prefix' => 'car_',
'title_column' => 'name',
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
'id' => 439,
'sort_order' => 183,
'stream_id' => 80,
'field_id' => 339,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 1,
'searchable' => 0,
'translatable' => 1,
'versionable' => 0,
'field' => [
'id' => '339',
'namespace' => 'car',
'slug' => 'name',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 339,
'field_id' => 339,
'locale' => 'en',
'name' => 'creatihub.module.car::field.name.name',
'placeholder' => 'creatihub.module.car::field.name.placeholder',
'warning' => 'creatihub.module.car::field.name.warning',
'instructions' => 'creatihub.module.car::field.name.instructions',
],
],
],
'translations' => [
[
'id' => 436,
'assignment_id' => 439,
'locale' => 'en',
'label' => 'creatihub.module.car::field.name.label.categories',
'warning' => 'creatihub.module.car::field.name.warning.categories',
'placeholder' => 'creatihub.module.car::field.name.placeholder.categories',
'instructions' => 'creatihub.module.car::field.name.instructions.categories',
],
],
],
[
'id' => 440,
'sort_order' => 184,
'stream_id' => 80,
'field_id' => 340,
'config' => 'a:0:{}',
'unique' => 1,
'required' => 1,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '340',
'namespace' => 'car',
'slug' => 'slug',
'type' => 'anomaly.field_type.slug',
'config' => 'a:2:{s:7:"slugify";s:4:"name";s:4:"type";s:1:"-";}',
'locked' => '1',
'translations' => [
[
'id' => 340,
'field_id' => 340,
'locale' => 'en',
'name' => 'creatihub.module.car::field.slug.name',
'placeholder' => 'creatihub.module.car::field.slug.placeholder',
'warning' => 'creatihub.module.car::field.slug.warning',
'instructions' => 'creatihub.module.car::field.slug.instructions',
],
],
],
'translations' => [
[
'id' => 437,
'assignment_id' => 440,
'locale' => 'en',
'label' => 'creatihub.module.car::field.slug.label.categories',
'warning' => 'creatihub.module.car::field.slug.warning.categories',
'placeholder' => 'creatihub.module.car::field.slug.placeholder.categories',
'instructions' => 'creatihub.module.car::field.slug.instructions.categories',
],
],
],
[
'id' => 441,
'sort_order' => 185,
'stream_id' => 80,
'field_id' => 341,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '341',
'namespace' => 'car',
'slug' => 'meta_title',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 341,
'field_id' => 341,
'locale' => 'en',
'name' => 'creatihub.module.car::field.meta_title.name',
'placeholder' => 'creatihub.module.car::field.meta_title.placeholder',
'warning' => 'creatihub.module.car::field.meta_title.warning',
'instructions' => 'creatihub.module.car::field.meta_title.instructions',
],
],
],
'translations' => [
[
'id' => 438,
'assignment_id' => 441,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_title.label.categories',
'warning' => 'creatihub.module.car::field.meta_title.warning.categories',
'placeholder' => 'creatihub.module.car::field.meta_title.placeholder.categories',
'instructions' => 'creatihub.module.car::field.meta_title.instructions.categories',
],
],
],
[
'id' => 442,
'sort_order' => 186,
'stream_id' => 80,
'field_id' => 342,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '342',
'namespace' => 'car',
'slug' => 'meta_description',
'type' => 'anomaly.field_type.textarea',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 342,
'field_id' => 342,
'locale' => 'en',
'name' => 'creatihub.module.car::field.meta_description.name',
'placeholder' => 'creatihub.module.car::field.meta_description.placeholder',
'warning' => 'creatihub.module.car::field.meta_description.warning',
'instructions' => 'creatihub.module.car::field.meta_description.instructions',
],
],
],
'translations' => [
[
'id' => 439,
'assignment_id' => 442,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_description.label.categories',
'warning' => 'creatihub.module.car::field.meta_description.warning.categories',
'placeholder' => 'creatihub.module.car::field.meta_description.placeholder.categories',
'instructions' => 'creatihub.module.car::field.meta_description.instructions.categories',
],
],
],
[
'id' => 443,
'sort_order' => 187,
'stream_id' => 80,
'field_id' => 343,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '343',
'namespace' => 'car',
'slug' => 'meta_image',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 343,
'field_id' => 343,
'locale' => 'en',
'name' => 'creatihub.module.car::field.meta_image.name',
'placeholder' => 'creatihub.module.car::field.meta_image.placeholder',
'warning' => 'creatihub.module.car::field.meta_image.warning',
'instructions' => 'creatihub.module.car::field.meta_image.instructions',
],
],
],
'translations' => [
[
'id' => 440,
'assignment_id' => 443,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_image.label.categories',
'warning' => 'creatihub.module.car::field.meta_image.warning.categories',
'placeholder' => 'creatihub.module.car::field.meta_image.placeholder.categories',
'instructions' => 'creatihub.module.car::field.meta_image.instructions.categories',
],
],
],
],
'translations' => [
[
'id' => 83,
'stream_id' => 80,
'locale' => 'en',
'name' => 'creatihub.module.car::stream.categories.name',
'description' => 'creatihub.module.car::stream.categories.description',
],
],
];

    
    /**
     * The meta image relation
     *
     * @return Relation
     */
    public function metaImage()
    {
        return $this->getFieldType('meta_image')->getRelation();
    }

}
