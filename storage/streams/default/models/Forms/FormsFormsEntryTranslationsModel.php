<?php namespace Anomaly\Streams\Platform\Model\Forms;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class FormsFormsEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'forms_forms_translations';
}
