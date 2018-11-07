<?php
namespace App\Test\TestCase\Controller;

use App\Controller\InstantPaymentNotificationsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\InstantPaymentNotificationsController Test Case
 */
class InstantPaymentNotificationsControllerTest extends IntegrationTestCase
{

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
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
