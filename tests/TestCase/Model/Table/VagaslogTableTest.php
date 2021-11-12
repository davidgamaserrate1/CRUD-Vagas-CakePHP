<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VagaslogTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VagaslogTable Test Case
 */
class VagaslogTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VagaslogTable
     */
    protected $Vagaslog;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Vagaslog',
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
        $config = $this->getTableLocator()->exists('Vagaslog') ? [] : ['className' => VagaslogTable::class];
        $this->Vagaslog = $this->getTableLocator()->get('Vagaslog', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Vagaslog);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VagaslogTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VagaslogTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
