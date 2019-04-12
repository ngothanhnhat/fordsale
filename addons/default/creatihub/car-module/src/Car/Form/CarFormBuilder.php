<?php namespace Creatihub\CarModule\Car\Form;

use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

class CarFormBuilder extends FormBuilder
{

    /**
     * The form fields.
     *
     * @var array|string
     */
    protected $fields = [];

    /**
     * Additional validation rules.
     *
     * @var array|string
     */
    protected $rules = [];

    /**
     * Fields to skip.
     *
     * @var array|string
     */
    protected $skips = [];

    /**
     * The form actions.
     *
     * @var array|string
     */
    protected $actions = [];

    /**
     * The form buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'cancel',
    ];

    /**
     * The form options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The form sections.
     *
     * @var array
     */
    protected $sections = [
        'car' => [
            'tabs' => [
                'general'      => [
                    'title'  => 'Thông tin chung',
                    'fields' => [
                        'name',
                        'slug',
                        'price',
                        'type'
                    ],
                ],
                'information'      => [
                    'title'  => 'Thông số',
                    'fields' => [
                        'thong_so_xe'
                    ],
                ],
                'seo' => [
                    'title' => 'SEO',
                    'fields' => [
                        'meta_title',
                        'meta_description',
                        'meta_image'
                    ]
                ]
            ],
        ]
    ];

    /**
     * The form assets.
     *
     * @var array
     */
    protected $assets = [];

}
