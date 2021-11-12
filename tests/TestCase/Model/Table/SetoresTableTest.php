<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SetoresTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SetoresTable Test Case
 */
class SetoresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SetoresTable
     */
    protected $Setores;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Setores',
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
        $config = $this->getTableLocator()->exists('Setores') ? [] : ['className' => SetoresTable::class];
        $this->Setores = $this->getTableLocator()->get('Setores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Setores);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SetoresTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\SetoresTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
