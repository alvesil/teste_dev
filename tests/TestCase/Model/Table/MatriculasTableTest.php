<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MatriculasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MatriculasTable Test Case
 */
class MatriculasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MatriculasTable
     */
    protected $Matriculas;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Matriculas',
        'app.Alunos',
        'app.Cursos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Matriculas') ? [] : ['className' => MatriculasTable::class];
        $this->Matriculas = $this->getTableLocator()->get('Matriculas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Matriculas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MatriculasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MatriculasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
