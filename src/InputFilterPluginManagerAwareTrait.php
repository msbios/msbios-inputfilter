<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\InputFilter;

use Zend\InputFilter\InputFilterPluginManager;

/**
 * Trait InputFilterPluginManagerAwareTrait
 * @package MSBios\InputFilter
 */
trait InputFilterPluginManagerAwareTrait
{
    /** @var InputFilterPluginManager */
    protected $inputFilterPluginManager;

    /**
     * @return InputFilterPluginManager
     */
    public function getInputFilterPluginManager(): InputFilterPluginManager
    {
        return $this->inputFilterPluginManager;
    }

    /**
     * @param InputFilterPluginManager $inputFilterPluginManager
     * @return $this
     */
    public function setInputFilterPluginManager(InputFilterPluginManager $inputFilterPluginManager)
    {
        $this->inputFilterPluginManager = $inputFilterPluginManager;
        return $this;
    }
}
