<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiplomasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiplomasTable Test Case
 */
class DiplomasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DiplomasTable
     */
    protected $Diplomas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Diplomas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Diplomas') ? [] : ['className' => DiplomasTable::class];
        $this->Diplomas = $this->getTableLocator()->get('Diplomas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Diplomas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DiplomasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
