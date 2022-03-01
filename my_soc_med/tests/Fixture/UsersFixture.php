<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'ID' => 1,
                'USERNAME' => 'Lorem ipsum dolor sit amet',
                'PASSWORD' => 'Lorem ipsum dolor sit amet',
                'EMAIL' => 'Lorem ipsum dolor sit amet',
                'CREATED' => '2021-12-25 11:11:28',
                'MODIFIED' => '2021-12-25 11:11:28',
            ],
        ];
        parent::init();
    }
}
