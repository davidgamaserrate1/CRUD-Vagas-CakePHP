<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VagasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VagasTable Test Case
 */
class VagasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VagasTable
     */
    protected $Vagas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Vagas',
        'app.Departamentos',
        'app.Empresas',
        'app.EstabelecimentosEmpresas',
        'app.Setores',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Vagas') ? [] : ['className' => VagasTable::class];
        $this->Vagas = $this->getTableLocator()->get('Vagas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Vagas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VagasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VagasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
