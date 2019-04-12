<?php namespace Anomaly\BlocksModule\Type;

use Anomaly\BlocksModule\Type\Command\CreateStream;
use Anomaly\BlocksModule\Type\Command\DeleteStream;
use Anomaly\BlocksModule\Type\Command\UpdateBlocks;
use Anomaly\BlocksModule\Type\Command\UpdateStream;
use Anomaly\BlocksModule\Type\Contract\TypeInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryObserver;

/**
 * Class TypeObserver
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class TypeObserver extends EntryObserver
{

    /**
     * Fired after a block type is created.
     *
     * @param EntryInterface|TypeInterface $entry
     */
    public function created(EntryInterface $entry)
    {
        $this->commands->dispatch(new CreateStream($entry));

        parent::created($entry);
    }

    /**
     * Fired before a block type is updated.
     *
     * @param EntryInterface|TypeInterface $entry
     */
    public function updating(EntryInterface $entry)
    {
        $this->commands->dispatch(new UpdateStream($entry));
        $this->commands->dispatch(new UpdateBlocks($entry));

        parent::updating($entry);
    }

    /**
     * Fired after a block type is deleted.
     *
     * @param EntryInterface|TypeInterface $entry
     */
    public function deleted(EntryInterface $entry)
    {
        $this->commands->dispatch(new DeleteStream($entry));

        parent::deleted($entry);
    }
}
