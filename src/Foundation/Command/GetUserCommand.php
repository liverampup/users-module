<?php namespace Anomaly\Streams\Addon\Module\Users\Foundation\Command;

/**
 * Class GetUserCommand
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Module\Users\Foundation\Command
 */
class GetUserCommand
{

    /**
     * The user ID we're looking for.
     *
     * @var
     */
    protected $userId;

    /**
     * Create a new GetUserCommand instance.
     *
     * @param $userId
     */
    function __construct($userId)
    {
        $this->userId = $userId;
    }

    /**
     * Get the user ID we're looking for.
     *
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }
}
 