<?php

namespace Creatihub\CarModule\Http\Controller\Category;

use Anomaly\Streams\Platform\Http\Controller\PublicController;

class IndexController extends PublicController
{
    public function execute()
    {
        return $this->view->make('creatihub.module.car::categories/index');
    }
}
