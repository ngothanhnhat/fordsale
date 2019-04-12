<?php

return [
    'name'          => [
        'name'         => 'الاسم',
        'instructions' => [
            'menus' => 'حدد اسم مختصر يصف هذه القائمة.',
        ],
    ],
    'slug'          => [
        'name'         => 'المعرف',
        'instructions' => 'المعرف يستخدم عند عرض القائمة.',
    ],
    'description'   => [
        'name'         => 'الوصف',
        'instructions' => 'حدد وصف محتصر للقائمة.',
    ],
    'target'        => [
        'name'         => 'الهدف',
        'instructions' => 'كيف يفتح الرابط عند النقر عليه?',
        'option'       => [
            'self'  => 'يفتح في النافذة الحالية.',
            'blank' => 'يفتح في نافذة جديدة.',
        ],
    ],
    'class'         => [
        'name'         => 'Class',
        'instructions' => 'حدد الأصناف المطلوبة من قبل مطور موقعك للقائمة.',
    ],
    'allowed_roles' => [
        'name'         => 'الأدور المسموح بها',
        'instructions' => 'حدد ماهي أدوار المستخدم التي يمكنها رؤية هذه الرابط.',
        'warning'      => 'يمكن لأي شخص أن يرى هذا الرابط إذا لم يتم تحدد دور للرابط.',
    ],
];
