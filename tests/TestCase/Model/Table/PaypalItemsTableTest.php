<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaypalItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaypalItemsTable Test Case
 */
class PaypalItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaypalItemsTable
     */
    public $PaypalItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.paypal_items',
        'app.instant_payment_notifications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PaypalItems') ? [] : ['className' => PaypalItemsTable::class];
        $this->PaypalItems = TableRegistry::getTableLocator()->get('PaypalItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PaypalItems);

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
