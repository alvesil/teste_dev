<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 */
class RolesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'role' => 'Lorem ipsum dolor ',
                'created' => '2022-09-08 21:32:40',
                'modified' => '2022-09-08 21:32:40',
            ],
        ];
        parent::init();
    }
}
