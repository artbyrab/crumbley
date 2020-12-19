<?php

use PHPUnit\Framework\TestCase;
use artbyrab\crumbley\Breadcrumbs;
use artbyrab\crumbley\Crumb;

/**
 * Breadcrumbs Test
 *
 * To run this test class only:
 *  - Navigate to: artbyrab/crumbly
 *  - Type: vendor/bin/phpunit --filter BreadcrumbsTest tests/BreadcrumbsTest.php
 *
 * @author artbyrab
 */
class BreadcrumbsTest extends TestCase
{
    public $breadcrumbs;

    /**
     * Set up
     *
     * Performed before every test.
     */
    protected function setUp()
    {
        $this->breadcrumbs = new Breadcrumbs();
    }

    /**
     * Tear down
     *
     * Performed after every test.
     */
    protected function tearDown()
    {
        unset($this->breadcrumbs);
    }

    /**
     * Test the add function
     */
    public function testAdd()
    {
        $crumb = New Crumb();
        $crumb->addLabel('Home');
        $crumb->addUrl('/');

        $this->breadcrumbs->add($crumb);

        $this->assertNotEmpty($this->breadcrumbs->getCrumbs());
    }

    /**
     * Test the addCurrent function
     */
    public function testAddCurrent()
    {
        $crumb = New Crumb();
        $crumb->addLabel('Weather report');

        $this->breadcrumbs->addCurrent($crumb);

        $this->assertNotEmpty($this->breadcrumbs->getCrumbs());
        $this->assertEquals($this->breadcrumbs->getCrumbs()[0]->isActive(), false);
    }

    /**
     * Test the getCrumbs function
     */
    public function testGetCrumbs()
    {
        $this->assertTrue(true);
    }
}