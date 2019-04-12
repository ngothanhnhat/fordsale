<?php namespace Anomaly\Streams\Platform\Model\Car;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class CarTypesEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'car_types_translations';
}
