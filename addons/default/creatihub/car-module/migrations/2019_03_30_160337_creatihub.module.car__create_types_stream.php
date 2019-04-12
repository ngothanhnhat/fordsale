<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class CreatihubModuleCarCreateTypesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'types',
        'title_column' => 'name',
        'translatable' => true,
        'versionable' => false,
        'trashable' => false,
        'searchable' => false,
        'sortable' => false,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'translatable' => true,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => true,
        ],
        'meta_title',
        'meta_description',
        'meta_image',
        'image',
        'price',
        'seat',
        'catalogue',
        'category'
    ];

}
