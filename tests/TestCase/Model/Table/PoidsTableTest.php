<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PoidsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PoidsTable Test Case
 */
class PoidsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PoidsTable
     */
    protected $Poids;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Poids',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Poids') ? [] : ['className' => PoidsTable::class];
        $this->Poids = $this->getTableLocator()->get('Poids', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Poids);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PoidsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
