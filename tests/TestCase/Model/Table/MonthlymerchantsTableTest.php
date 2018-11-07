<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MonthlymerchantsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MonthlymerchantsTable Test Case
 */
class MonthlymerchantsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MonthlymerchantsTable
     */
    public $Monthlymerchants;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.monthlymerchants',
        'app.merchants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Monthlymerchants') ? [] : ['className' => MonthlymerchantsTable::class];
        $this->Monthlymerchants = TableRegistry::getTableLocator()->get('Monthlymerchants', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Monthlymerchants);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
