<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VagasAlteradasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VagasAlteradasTable Test Case
 */
class VagasAlteradasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VagasAlteradasTable
     */
    protected $VagasAlteradas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.VagasAlteradas',
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
        $config = $this->getTableLocator()->exists('VagasAlteradas') ? [] : ['className' => VagasAlteradasTable::class];
        $this->VagasAlteradas = $this->getTableLocator()->get('VagasAlteradas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->VagasAlteradas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VagasAlteradasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\VagasAlteradasTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
