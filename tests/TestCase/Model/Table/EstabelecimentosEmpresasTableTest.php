<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstabelecimentosEmpresasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstabelecimentosEmpresasTable Test Case
 */
class EstabelecimentosEmpresasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstabelecimentosEmpresasTable
     */
    protected $EstabelecimentosEmpresas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.EstabelecimentosEmpresas',
        'app.Empresas',
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
        $config = $this->getTableLocator()->exists('EstabelecimentosEmpresas') ? [] : ['className' => EstabelecimentosEmpresasTable::class];
        $this->EstabelecimentosEmpresas = $this->getTableLocator()->get('EstabelecimentosEmpresas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->EstabelecimentosEmpresas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EstabelecimentosEmpresasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
