<?php

use PHPUnit\Framework\TestCase;
use artbyrab\crumbley\Crumb;

/**
 * Crumb Test
 *
 * To run this test class only:
 *  - Navigate to: artbyrab/crumbly
 *  - Type: vendor/bin/phpunit --filter CrumbTest tests/CrumbTest.php
 *
 * @author artbyrab
 */
class CrumbTest extends TestCase
{
    public $crumb;

    /**
     * Set up
     *
     * Performed before every test.
     */
    protected function setUp()
    {
        $this->crumb = new Crumb();
    }

    /**
     * Tear down
     *
     * Performed after every test.
     */
    protected function tearDown()
    {
        unset($this->crumb);
    }

    /**
     * Test the addLabel function
     */
    public function testAddLabel()
    {
        $this->crumb->addLabel('About Us');

        $this->assertEquals($this->crumb->getLabel(), 'About Us');
    }

    /**
     * Test the getLabel function
     */
    public function testGetLabel()
    {
        $this->testAddLabel();
    }

    /**
     * Test the addUrl function
     */
    public function testAddUrl()
    {
        $this->crumb->addUrl('/about-us');

        $this->assertEquals($this->crumb->getUrl(), '/about-us');
    }

    /**
     * Test the getUrl function
     */
    public function testGetUrl()
    {
        $this->testAddUrl();
    }

    /**
     * Test the setCurrent function
     */
    public function testSetCurrent()
    {
        $this->crumb->setCurrent();

        $this->assertEquals($this->crumb->getActive(), false);
    }

    /**
     * Test the setActive function
     */
    public function testSetActive()
    {
        $this->crumb->setActive(true);

        $this->assertEquals($this->crumb->getActive(), true);
    }

    /**
     * Test the setActive function with a false result
     */
    public function testSetActiveFalse()
    {
        $this->crumb->setActive(false);

        $this->assertEquals($this->crumb->getActive(), false);
    }

    /**
     * Test the getActive function
     */
    public function testGetActive()
    {
        $this->testSetActive();
    }

    /**
     * Test the isActive function
     */
    public function testIsActive()
    {
        $this->crumb->setActive(true);

        $this->assertEquals($this->crumb->isActive(), true);
    }

    /**
     * Test the isActive function with a false result
     */
    public function testIsActiveFalse()
    {
        $this->crumb->setActive(false);

        $this->assertEquals($this->crumb->isActive(), false);
    }

    /**
     * Test the hasSeparator function
     */
    public function testHasSeparator()
    {
        $this->crumb->setActive(true);

        $this->assertEquals($this->crumb->hasSeparator(), true);
    }
}
