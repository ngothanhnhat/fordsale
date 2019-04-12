<?php namespace Creatihub\CarModule\Car;

use Creatihub\CarModule\Car\Contract\CarRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class CarRepository extends EntryRepository implements CarRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var CarModel
     */
    protected $model;

    /**
     * Create a new CarRepository instance.
     *
     * @param CarModel $model
     */
    public function __construct(CarModel $model)
    {
        $this->model = $model;
    }
}
