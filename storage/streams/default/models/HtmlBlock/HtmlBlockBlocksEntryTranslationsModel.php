<?php namespace Anomaly\Streams\Platform\Model\HtmlBlock;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class HtmlBlockBlocksEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'html_block_blocks_translations';
}
