<?php namespace Anomaly\Streams\Platform\Assignment\Table\Command;

use Anomaly\Streams\Platform\Assignment\Table\AssignmentTableBuilder;
use Anomaly\Streams\Platform\Stream\Contract\StreamInterface;
use Illuminate\Translation\Translator;

/**
 * Class SetDefaultProperties
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class SetDefaultProperties
{

    /**
     * The table builder.
     *
     * @var AssignmentTableBuilder
     */
    protected $builder;

    /**
     * Create a new SetDefaultProperties instance.
     *
     * @param AssignmentTableBuilder $builder
     */
    public function __construct(AssignmentTableBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Handle the command.
     *
     * @param Translator $translator
     */
    public function handle(Translator $translator)
    {
        /* @var StreamInterface $stream */
        if (!$stream = $this->builder->getStream()) {

            $parts = explode('\\', str_replace('AssignmentTableBuilder', 'Model', get_class($this->builder)));

            unset($parts[count($parts) - 2]);

            $model = implode('\\', $parts);

            $this->builder->setStream($stream = app($model)->getStream());
        }

        if (!$this->builder->hasOption('title') && $stream->getName()) {
            $this->builder->setOption('title', $stream->getName());
        }

        if (
            !$this->builder->hasOption('description') &&
            $stream->getDescription() &&
            (
                !str_is('*.*.*::*.*.*', $stream->getDescription()) ||
                (
                    $translator->has($stream->getDescription()) &&
                    is_string($translator->get($stream->getDescription()))
                )
            )
        ) {
            $this->builder->setOption('description', $stream->getDescription());
        }
    }
}
