<?php namespace Anomaly\Streams\Platform\Model\Car;

use Anomaly\Streams\Platform\Entry\EntryModel;

class CarCarsEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'car_cars';

    protected $titleName = 'name';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:car_cars,slug',
        'meta_title' => '',
        'meta_description' => '',
        'meta_image' => '',
        'price' => '',
        'type' => '',
];

    protected $fields = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'meta_image',
        'price',
        'type',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['meta_image', 'type'];

    protected $translatedAttributes = ['name'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Car\CarCarsEntryTranslationsModel';

    protected $stream = [
'id' => '81',
'sort_order' => '',
'namespace' => 'car',
'slug' => 'cars',
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
'id' => 444,
'sort_order' => 188,
'stream_id' => 81,
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
'id' => 441,
'assignment_id' => 444,
'locale' => 'en',
'label' => 'creatihub.module.car::field.name.label.cars',
'warning' => 'creatihub.module.car::field.name.warning.cars',
'placeholder' => 'creatihub.module.car::field.name.placeholder.cars',
'instructions' => 'creatihub.module.car::field.name.instructions.cars',
],
],
],
[
'id' => 445,
'sort_order' => 189,
'stream_id' => 81,
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
'id' => 442,
'assignment_id' => 445,
'locale' => 'en',
'label' => 'creatihub.module.car::field.slug.label.cars',
'warning' => 'creatihub.module.car::field.slug.warning.cars',
'placeholder' => 'creatihub.module.car::field.slug.placeholder.cars',
'instructions' => 'creatihub.module.car::field.slug.instructions.cars',
],
],
],
[
'id' => 446,
'sort_order' => 190,
'stream_id' => 81,
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
'id' => 443,
'assignment_id' => 446,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_title.label.cars',
'warning' => 'creatihub.module.car::field.meta_title.warning.cars',
'placeholder' => 'creatihub.module.car::field.meta_title.placeholder.cars',
'instructions' => 'creatihub.module.car::field.meta_title.instructions.cars',
],
],
],
[
'id' => 447,
'sort_order' => 191,
'stream_id' => 81,
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
'id' => 444,
'assignment_id' => 447,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_description.label.cars',
'warning' => 'creatihub.module.car::field.meta_description.warning.cars',
'placeholder' => 'creatihub.module.car::field.meta_description.placeholder.cars',
'instructions' => 'creatihub.module.car::field.meta_description.instructions.cars',
],
],
],
[
'id' => 448,
'sort_order' => 192,
'stream_id' => 81,
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
'id' => 445,
'assignment_id' => 448,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_image.label.cars',
'warning' => 'creatihub.module.car::field.meta_image.warning.cars',
'placeholder' => 'creatihub.module.car::field.meta_image.placeholder.cars',
'instructions' => 'creatihub.module.car::field.meta_image.instructions.cars',
],
],
],
[
'id' => 449,
'sort_order' => 193,
'stream_id' => 81,
'field_id' => 345,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '345',
'namespace' => 'car',
'slug' => 'price',
'type' => 'anomaly.field_type.text',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 345,
'field_id' => 345,
'locale' => 'en',
'name' => 'creatihub.module.car::field.price.name',
'placeholder' => 'creatihub.module.car::field.price.placeholder',
'warning' => 'creatihub.module.car::field.price.warning',
'instructions' => 'creatihub.module.car::field.price.instructions',
],
],
],
'translations' => [
[
'id' => 446,
'assignment_id' => 449,
'locale' => 'en',
'label' => 'creatihub.module.car::field.price.label.cars',
'warning' => 'creatihub.module.car::field.price.warning.cars',
'placeholder' => 'creatihub.module.car::field.price.placeholder.cars',
'instructions' => 'creatihub.module.car::field.price.instructions.cars',
],
],
],
[
'id' => 450,
'sort_order' => 194,
'stream_id' => 81,
'field_id' => 349,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '349',
'namespace' => 'car',
'slug' => 'type',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:2:{s:4:"mode";s:8:"dropdown";s:7:"related";s:34:"Creatihub\CarModule\Type\TypeModel";}',
'locked' => '1',
'translations' => [
[
'id' => 349,
'field_id' => 349,
'locale' => 'en',
'name' => 'creatihub.module.car::field.type.name',
'placeholder' => 'creatihub.module.car::field.type.placeholder',
'warning' => 'creatihub.module.car::field.type.warning',
'instructions' => 'creatihub.module.car::field.type.instructions',
],
],
],
'translations' => [
[
'id' => 447,
'assignment_id' => 450,
'locale' => 'en',
'label' => 'creatihub.module.car::field.type.label.cars',
'warning' => 'creatihub.module.car::field.type.warning.cars',
'placeholder' => 'creatihub.module.car::field.type.placeholder.cars',
'instructions' => 'creatihub.module.car::field.type.instructions.cars',
],
],
],
],
'translations' => [
[
'id' => 84,
'stream_id' => 81,
'locale' => 'en',
'name' => 'creatihub.module.car::stream.cars.name',
'description' => 'creatihub.module.car::stream.cars.description',
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

    /**
     * The type relation
     *
     * @return Relation
     */
    public function type()
    {
        return $this->getFieldType('type')->getRelation();
    }

}
