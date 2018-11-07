<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EventsItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EventsItemsTable Test Case
 */
class EventsItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EventsItemsTable
     */
    public $EventsItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.events_items',
        'app.events',
        'app.items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EventsItems') ? [] : ['className' => EventsItemsTable::class];
        $this->EventsItems = TableRegistry::getTableLocator()->get('EventsItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EventsItems);

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
