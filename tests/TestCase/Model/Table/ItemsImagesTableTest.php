<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ItemsImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ItemsImagesTable Test Case
 */
class ItemsImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ItemsImagesTable
     */
    public $ItemsImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.items_images',
        'app.imgs',
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
        $config = TableRegistry::getTableLocator()->exists('ItemsImages') ? [] : ['className' => ItemsImagesTable::class];
        $this->ItemsImages = TableRegistry::getTableLocator()->get('ItemsImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ItemsImages);

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
