<?php

namespace artbyrab\crumbley;

/**
 * Breadcrumbs
 * 
 * This object is a parent object for a collection of Crumb objects.

 * @author artbyrab
 */
class Breadcrumbs
{
    /**
     * @var array
     */
    protected $crumbs = [];

    /**
     * Add
     * 
     * @param object $crumb
     * @return object An instance of this class.
     */
    public function add(Crumb $crumb)
    {
        array_push($this->crumbs, $crumb);

        return $this;
    }

    /**
     * Add current
     * 
     * Add the current page we are on by ensuring the crumb is not active.
     * 
     * @param object $crumb
     * @return object An instance of this class.
     */
    public function addCurrent(Crumb $crumb)
    {
        $crumb->setCurrent();

        array_push($this->crumbs, $crumb);

        return $this;
    }

    /**
     * Get crumbs
     * 
     * @return array
     */
    public function getCrumbs()
    {
        return $this->crumbs;
    }
}