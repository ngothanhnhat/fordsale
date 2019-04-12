<?php

namespace Creatihub\CarModule\Http\Controller\Type;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Creatihub\CarModule\Type\Contract\TypeRepositoryInterface;

class IndexController extends PublicController
{

    protected $typeRepository;

    public function __construct(
        TypeRepositoryInterface $typeRepository
    ) {
        $this->typeRepository = $typeRepository;
        parent::__construct();
    }

    public function execute($slug = null)
    {
        if ( $slug == null ){
            return $this->view->make('theme::errors/404');
        }

        $type = $this->typeRepository->findBy('slug', $slug)->first();

        if ( $type == null ){
            return $this->view->make('theme::errors/404');
        }

        return $this->view->make('creatihub.module.car::type/index')->with('type', $type);
    }
}
