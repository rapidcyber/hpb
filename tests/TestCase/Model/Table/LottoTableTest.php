<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LottoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LottoTable Test Case
 */
class LottoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LottoTable
     */
    public $Lotto;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.lotto'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Lotto') ? [] : ['className' => LottoTable::class];
        $this->Lotto = TableRegistry::getTableLocator()->get('Lotto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Lotto);

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
}
