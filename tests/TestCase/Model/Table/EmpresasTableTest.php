<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresasTable Test Case
 */
class EmpresasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresasTable
     */
    protected $Empresas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Empresas',
        'app.EstabelecimentosEmpresas',
        'app.Departamentos',
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
        $config = $this->getTableLocator()->exists('Empresas') ? [] : ['className' => EmpresasTable::class];
        $this->Empresas = $this->getTableLocator()->get('Empresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Empresas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmpresasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\EmpresasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
