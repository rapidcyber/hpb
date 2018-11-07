<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstantPaymentNotificationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstantPaymentNotificationsTable Test Case
 */
class InstantPaymentNotificationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InstantPaymentNotificationsTable
     */
    public $InstantPaymentNotifications;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.instant_payment_notifications',
        'app.payers',
        'app.receivers',
        'app.auths',
        'app.parent_txns',
        'app.txns',
        'app.auction_buyers',
        'app.subscrs',
        'app.cases',
        'app.paypal_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('InstantPaymentNotifications') ? [] : ['className' => InstantPaymentNotificationsTable::class];
        $this->InstantPaymentNotifications = TableRegistry::getTableLocator()->get('InstantPaymentNotifications', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InstantPaymentNotifications);

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
