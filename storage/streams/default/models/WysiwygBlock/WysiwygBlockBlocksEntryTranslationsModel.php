<?php namespace Anomaly\Streams\Platform\Model\WysiwygBlock;

use Anomaly\Streams\Platform\Entry\EntryTranslationsModel;

class WysiwygBlockBlocksEntryTranslationsModel extends EntryTranslationsModel
{

    protected $cacheMinutes = 99999;

    protected $table = 'wysiwyg_block_blocks_translations';
}
