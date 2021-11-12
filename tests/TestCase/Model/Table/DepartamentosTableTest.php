<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartamentosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartamentosTable Test Case
 */
class DepartamentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartamentosTable
     */
    protected $Departamentos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Departamentos',
        'app.Empresas',
        'app.Setores',
        'app.Vagas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Departamentos') ? [] : ['className' => DepartamentosTable::class];
        $this->Departamentos = $this->getTableLocator()->get('Departamentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Departamentos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DepartamentosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\DepartamentosTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
