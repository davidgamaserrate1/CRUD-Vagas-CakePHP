<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\EstabelecimentosEmpresasController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\EstabelecimentosEmpresasController Test Case
 *
 * @uses \App\Controller\EstabelecimentosEmpresasController
 */
class EstabelecimentosEmpresasControllerTest extends TestCase
{
    use IntegrationTestTrait;

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
     * Test index method
     *
     * @return void
     * @uses \App\Controller\EstabelecimentosEmpresasController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\EstabelecimentosEmpresasController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\EstabelecimentosEmpresasController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\EstabelecimentosEmpresasController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\EstabelecimentosEmpresasController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
