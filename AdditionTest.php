<?php
require_once 'classes/rebootSchool/Addition.php';

/**
 * Addition test case.
 */
class AdditionTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var Addition
     */
    private $addition;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();

        // TODO Auto-generated AdditionTest::setUp()

        $this->addition = new Addition(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated AdditionTest::tearDown()
        $this->addition = null;

        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests Addition->__construct()
     */
    public function test__construct()
    {
        // TODO Auto-generated AdditionTest->test__construct()
        $this->markTestIncomplete("__construct test not implemented");

        $this->addition->__construct(/* parameters */);
    }

    /**
     * Tests Addition->getSolution()
     */
    public function testGetSolution()
    {
        // TODO Auto-generated AdditionTest->testGetSolution()
        $this->markTestIncomplete("getSolution test not implemented");

        $this->addition->getSolution(/* parameters */);
    }

    /**
     * Tests Addition->getOperation()
     */
    public function testGetOperation()
    {
        // TODO Auto-generated AdditionTest->testGetOperation()
        $this->markTestIncomplete("getOperation test not implemented");

        $this->addition->getOperation(/* parameters */);
    }
}

