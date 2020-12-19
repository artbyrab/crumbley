<?php

namespace artbyrab\crumbley;

/**
 * Crumbs
 * 
 * A crumb represents a single breadcrumb in a Breadcrumbs parent object. 
 * 
 * @author artbyrab
 */
class Crumb
{
    /**
     * @var string $title
     */
    protected $title;

    /**
     * @var string $url
     */
    protected $url;

    /**
     * @var string $active
     */
    protected $active = true;

    /**
     * Label
     * 
     * @param string $label
     * @return object
     */
    public function addLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Add URL
     * 
     * @param string $url
     * @return object
     */
    public function addUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Is current
     * 
     * Is this the crumb for the current page? This will set active to false
     * which mimics the behaviour of a current link, IE it wont be a link.
     * 
     * @return object
     */
    public function setCurrent()
    {
        $this->active = false;
        
        return $this;
    }

    /**
     * @param boolean $active
     * @return object
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Is active 
     * 
     * A facade for the getActive function.
     * 
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * Has a separator?
     * 
     * Does this crumb have a separator, is it an active link?
     * 
     * @return boolean
     */
    public function hasSeparator()
    {
        return $this->active;
    }
}