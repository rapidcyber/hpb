<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemsSizesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemsSizesTable Test Case
 */
class ItemsSizesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemsSizesTable
     */
    public $ItemsSizes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.items_sizes',
        'app.items',
        'app.sizes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ItemsSizes') ? [] : ['className' => ItemsSizesTable::class];
        $this->ItemsSizes = TableRegistry::getTableLocator()->get('ItemsSizes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemsSizes);

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
