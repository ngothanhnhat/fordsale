<?php namespace Anomaly\TemplatesModule\Group;

use Anomaly\Streams\Platform\Entry\EntryRepository;
use Anomaly\TemplatesModule\Group\Contract\GroupInterface;
use Anomaly\TemplatesModule\Group\Contract\GroupRepositoryInterface;

/**
 * Class GroupRepository
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class GroupRepository extends EntryRepository implements GroupRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var GroupModel
     */
    protected $model;

    /**
     * Create a new GroupRepository instance.
     *
     * @param GroupModel $model
     */
    public function __construct(GroupModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a group by it's slug.
     *
     * @param $slug
     * @return GroupInterface|null
     */
    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}
