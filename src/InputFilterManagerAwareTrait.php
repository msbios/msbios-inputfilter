<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\InputFilter;

use Zend\InputFilter\InputFilterPluginManager;

/**
 * Trait InputFilterManagerAwareTrait
 * @package MSBios\InputFilter
 */
trait InputFilterManagerAwareTrait
{
    /** @var InputFilterPluginManager */
    protected $inputFilterManager;

    /**
     * @return InputFilterPluginManager
     */
    public function getInputFilterManager(): InputFilterPluginManager
    {
        return $this->inputFilterManager;
    }

    /**
     * @param InputFilterPluginManager $inputFilterManager
     * @return $this
     */
    public function setInputFilterManager(InputFilterPluginManager $inputFilterManager)
    {
        $this->inputFilterManager = $inputFilterManager;
        return $this;
    }
}
