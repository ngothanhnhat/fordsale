<?php namespace Creatihub\CarModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class CarModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'categories' => [
            'buttons' => [
                'new_category',
            ],
        ],
        'types' => [
            'buttons' => [
                'new_type',
            ],
        ],
        'cars' => [
            'buttons' => [
                'new_car',
            ],
        ]
    ];

}
