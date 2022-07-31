<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PoidsFixture
 */
class PoidsFixture extends TestFixture
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
                'userid' => 1,
                'datepesee' => '2022-05-16 12:47:15',
                'kg' => 1,
            ],
        ];
        parent::init();
    }
}
