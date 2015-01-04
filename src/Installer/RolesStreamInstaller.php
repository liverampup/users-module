<?php namespace Anomaly\UsersModule\Installer;

use Anomaly\Streams\Platform\Stream\StreamInstaller;

/**
 * Class RolesStreamInstaller
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\UsersModule\Installer
 */
class RolesStreamInstaller extends StreamInstaller
{

    /**
     * The stream details.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'roles',
        'locked'       => true,
        'translatable' => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name'        => ['is_required' => true, 'is_unique' => true, 'is_translatable' => true],
        'slug'        => ['is_required' => true, 'is_unique' => true],
        'permissions' => [],
    ];
}
