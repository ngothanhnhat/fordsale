<?php namespace Anomaly\Streams\Platform\Model\Car;

use Anomaly\Streams\Platform\Entry\EntryModel;

class CarTypesEntryModel extends EntryModel
{

    

    protected $searchable = false;

    protected $versionable = false;

    protected $table = 'car_types';

    protected $titleName = 'name';

    protected $rules = [
        'name' => 'required',
        'slug' => 'required|unique:car_types,slug',
        'meta_title' => '',
        'meta_description' => '',
        'meta_image' => '',
        'image' => '',
        'price' => '',
        'seat' => '',
        'catalogue' => '',
        'category' => '',
        'best_feature' => '',
        'hero_banner' => '',
];

    protected $fields = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'meta_image',
        'image',
        'price',
        'seat',
        'catalogue',
        'category',
        'best_feature',
        'hero_banner',
];

    protected $with = ["translations"];

    protected $dates = ['created_at', 'updated_at'];

    protected $relationships = ['meta_image', 'image', 'catalogue', 'category', 'best_feature', 'hero_banner'];

    protected $translatedAttributes = ['name'];

    protected $translationForeignKey = 'entry_id';

    protected $translationModel = 'Anomaly\Streams\Platform\Model\Car\CarTypesEntryTranslationsModel';

    protected $stream = [
'id' => '82',
'sort_order' => '',
'namespace' => 'car',
'slug' => 'types',
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
'id' => 451,
'sort_order' => 195,
'stream_id' => 82,
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
'id' => 448,
'assignment_id' => 451,
'locale' => 'en',
'label' => 'creatihub.module.car::field.name.label.types',
'warning' => 'creatihub.module.car::field.name.warning.types',
'placeholder' => 'creatihub.module.car::field.name.placeholder.types',
'instructions' => 'creatihub.module.car::field.name.instructions.types',
],
],
],
[
'id' => 452,
'sort_order' => 196,
'stream_id' => 82,
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
'id' => 449,
'assignment_id' => 452,
'locale' => 'en',
'label' => 'creatihub.module.car::field.slug.label.types',
'warning' => 'creatihub.module.car::field.slug.warning.types',
'placeholder' => 'creatihub.module.car::field.slug.placeholder.types',
'instructions' => 'creatihub.module.car::field.slug.instructions.types',
],
],
],
[
'id' => 453,
'sort_order' => 197,
'stream_id' => 82,
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
'id' => 450,
'assignment_id' => 453,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_title.label.types',
'warning' => 'creatihub.module.car::field.meta_title.warning.types',
'placeholder' => 'creatihub.module.car::field.meta_title.placeholder.types',
'instructions' => 'creatihub.module.car::field.meta_title.instructions.types',
],
],
],
[
'id' => 454,
'sort_order' => 198,
'stream_id' => 82,
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
'id' => 451,
'assignment_id' => 454,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_description.label.types',
'warning' => 'creatihub.module.car::field.meta_description.warning.types',
'placeholder' => 'creatihub.module.car::field.meta_description.placeholder.types',
'instructions' => 'creatihub.module.car::field.meta_description.instructions.types',
],
],
],
[
'id' => 455,
'sort_order' => 199,
'stream_id' => 82,
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
'id' => 452,
'assignment_id' => 455,
'locale' => 'en',
'label' => 'creatihub.module.car::field.meta_image.label.types',
'warning' => 'creatihub.module.car::field.meta_image.warning.types',
'placeholder' => 'creatihub.module.car::field.meta_image.placeholder.types',
'instructions' => 'creatihub.module.car::field.meta_image.instructions.types',
],
],
],
[
'id' => 456,
'sort_order' => 200,
'stream_id' => 82,
'field_id' => 344,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '344',
'namespace' => 'car',
'slug' => 'image',
'type' => 'anomaly.field_type.file',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 344,
'field_id' => 344,
'locale' => 'en',
'name' => 'creatihub.module.car::field.image.name',
'placeholder' => 'creatihub.module.car::field.image.placeholder',
'warning' => 'creatihub.module.car::field.image.warning',
'instructions' => 'creatihub.module.car::field.image.instructions',
],
],
],
'translations' => [
[
'id' => 453,
'assignment_id' => 456,
'locale' => 'en',
'label' => 'creatihub.module.car::field.image.label.types',
'warning' => 'creatihub.module.car::field.image.warning.types',
'placeholder' => 'creatihub.module.car::field.image.placeholder.types',
'instructions' => 'creatihub.module.car::field.image.instructions.types',
],
],
],
[
'id' => 457,
'sort_order' => 201,
'stream_id' => 82,
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
'id' => 454,
'assignment_id' => 457,
'locale' => 'en',
'label' => 'creatihub.module.car::field.price.label.types',
'warning' => 'creatihub.module.car::field.price.warning.types',
'placeholder' => 'creatihub.module.car::field.price.placeholder.types',
'instructions' => 'creatihub.module.car::field.price.instructions.types',
],
],
],
[
'id' => 458,
'sort_order' => 202,
'stream_id' => 82,
'field_id' => 346,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '346',
'namespace' => 'car',
'slug' => 'seat',
'type' => 'anomaly.field_type.integer',
'config' => 'a:0:{}',
'locked' => '1',
'translations' => [
[
'id' => 346,
'field_id' => 346,
'locale' => 'en',
'name' => 'creatihub.module.car::field.seat.name',
'placeholder' => 'creatihub.module.car::field.seat.placeholder',
'warning' => 'creatihub.module.car::field.seat.warning',
'instructions' => 'creatihub.module.car::field.seat.instructions',
],
],
],
'translations' => [
[
'id' => 455,
'assignment_id' => 458,
'locale' => 'en',
'label' => 'creatihub.module.car::field.seat.label.types',
'warning' => 'creatihub.module.car::field.seat.warning.types',
'placeholder' => 'creatihub.module.car::field.seat.placeholder.types',
'instructions' => 'creatihub.module.car::field.seat.instructions.types',
],
],
],
[
'id' => 459,
'sort_order' => 203,
'stream_id' => 82,
'field_id' => 347,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '347',
'namespace' => 'car',
'slug' => 'catalogue',
'type' => 'anomaly.field_type.file',
'config' => 'a:1:{s:6:"folder";s:9:"catalogue";}',
'locked' => '1',
'translations' => [
[
'id' => 347,
'field_id' => 347,
'locale' => 'en',
'name' => 'creatihub.module.car::field.catalogue.name',
'placeholder' => 'creatihub.module.car::field.catalogue.placeholder',
'warning' => 'creatihub.module.car::field.catalogue.warning',
'instructions' => 'creatihub.module.car::field.catalogue.instructions',
],
],
],
'translations' => [
[
'id' => 456,
'assignment_id' => 459,
'locale' => 'en',
'label' => 'creatihub.module.car::field.catalogue.label.types',
'warning' => 'creatihub.module.car::field.catalogue.warning.types',
'placeholder' => 'creatihub.module.car::field.catalogue.placeholder.types',
'instructions' => 'creatihub.module.car::field.catalogue.instructions.types',
],
],
],
[
'id' => 460,
'sort_order' => 204,
'stream_id' => 82,
'field_id' => 348,
'config' => 'a:0:{}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '348',
'namespace' => 'car',
'slug' => 'category',
'type' => 'anomaly.field_type.relationship',
'config' => 'a:2:{s:4:"mode";s:8:"dropdown";s:7:"related";s:42:"Creatihub\CarModule\Category\CategoryModel";}',
'locked' => '1',
'translations' => [
[
'id' => 348,
'field_id' => 348,
'locale' => 'en',
'name' => 'creatihub.module.car::field.category.name',
'placeholder' => 'creatihub.module.car::field.category.placeholder',
'warning' => 'creatihub.module.car::field.category.warning',
'instructions' => 'creatihub.module.car::field.category.instructions',
],
],
],
'translations' => [
[
'id' => 457,
'assignment_id' => 460,
'locale' => 'en',
'label' => 'creatihub.module.car::field.category.label.types',
'warning' => 'creatihub.module.car::field.category.warning.types',
'placeholder' => 'creatihub.module.car::field.category.placeholder.types',
'instructions' => 'creatihub.module.car::field.category.instructions.types',
],
],
],
[
'id' => 461,
'sort_order' => 205,
'stream_id' => 82,
'field_id' => 251,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '251',
'namespace' => 'car',
'slug' => 'best_feature',
'type' => 'anomaly.field_type.grid',
'config' => 'a:4:{s:7:"related";N;s:7:"add_row";N;s:3:"min";N;s:3:"max";s:1:"4";}',
'locked' => '0',
'translations' => [
[
'id' => 251,
'field_id' => 251,
'locale' => 'vi',
'name' => 'Đặc điểm nổi bật',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 458,
'assignment_id' => 461,
'locale' => 'vi',
'label' => 'Đặc điểm nổi bật',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
[
'id' => 462,
'sort_order' => 206,
'stream_id' => 82,
'field_id' => 244,
'config' => 'a:1:{i:0;s:6:"a:0:{}";}',
'unique' => 0,
'required' => 0,
'searchable' => 0,
'translatable' => 0,
'versionable' => 0,
'field' => [
'id' => '244',
'namespace' => 'car',
'slug' => 'hero_banner',
'type' => 'anomaly.field_type.file',
'config' => 'a:4:{s:7:"folders";a:1:{i:0;s:1:"1";}s:3:"max";N;s:4:"mode";s:7:"default";s:13:"allowed_types";a:0:{}}',
'locked' => '0',
'translations' => [
[
'id' => 244,
'field_id' => 244,
'locale' => 'vi',
'name' => 'Hero Banner',
'placeholder' => '',
'warning' => '',
'instructions' => '',
],
],
],
'translations' => [
[
'id' => 459,
'assignment_id' => 462,
'locale' => 'vi',
'label' => 'Hero Banner',
'warning' => '',
'placeholder' => '',
'instructions' => '',
],
],
],
],
'translations' => [
[
'id' => 85,
'stream_id' => 82,
'locale' => 'en',
'name' => 'creatihub.module.car::stream.types.name',
'description' => 'creatihub.module.car::stream.types.description',
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
     * The image relation
     *
     * @return Relation
     */
    public function image()
    {
        return $this->getFieldType('image')->getRelation();
    }

    /**
     * The catalogue relation
     *
     * @return Relation
     */
    public function catalogue()
    {
        return $this->getFieldType('catalogue')->getRelation();
    }

    /**
     * The category relation
     *
     * @return Relation
     */
    public function category()
    {
        return $this->getFieldType('category')->getRelation();
    }

    /**
     * The best feature relation
     *
     * @return Relation
     */
    public function bestFeature()
    {
        return $this->getFieldType('best_feature')->getRelation();
    }

    /**
     * The hero banner relation
     *
     * @return Relation
     */
    public function heroBanner()
    {
        return $this->getFieldType('hero_banner')->getRelation();
    }

}
