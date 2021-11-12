<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VagasLogsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VagasLogsTable Test Case
 */
class VagasLogsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VagasLogsTable
     */
    protected $VagasLogs;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.VagasLogs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('VagasLogs') ? [] : ['className' => VagasLogsTable::class];
        $this->VagasLogs = $this->getTableLocator()->get('VagasLogs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->VagasLogs);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VagasLogsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
