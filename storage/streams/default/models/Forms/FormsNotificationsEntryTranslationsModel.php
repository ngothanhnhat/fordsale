<?php namespace Anomaly\Streams\Platform\Model\Forms;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class FormsNotificationsEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'forms_notifications_translations';
}
