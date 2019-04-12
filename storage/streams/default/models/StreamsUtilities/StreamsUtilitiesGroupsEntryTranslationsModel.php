<?php namespace Anomaly\Streams\Platform\Model\StreamsUtilities;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class StreamsUtilitiesGroupsEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'streams_utilities_groups_translations';
}
