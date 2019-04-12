<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class CreatihubModuleCarCreateCarFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'name' => 'anomaly.field_type.text',
        'slug' => [
            'type' => 'anomaly.field_type.slug',
            'config' => [
                'slugify' => 'name',
                'type' => '-'
            ],
        ],
        'meta_title'       => 'anomaly.field_type.text',
        'meta_description' => 'anomaly.field_type.textarea',
        'meta_image' => 'anomaly.field_type.file',
        'image' => 'anomaly.field_type.file',
        'price' => 'anomaly.field_type.text',
        'seat'  => 'anomaly.field_type.integer',
        'catalogue' => [
            'type' => 'anomaly.field_type.file',
            'config' => [
                'folder' => 'catalogue'
            ]
        ],
        'category' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'mode' => 'dropdown',
                'related' => \Creatihub\CarModule\Category\CategoryModel::class
            ]
        ],
        'type' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'mode' => 'dropdown',
                'related' => \Creatihub\CarModule\Type\TypeModel::class
            ]
        ]
    ];

}
