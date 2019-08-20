<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\InputFilter;

use Zend\InputFilter\InputFilterPluginManager;

/**
 * Interface InputFilterManagerAwareInterface
 * @package MSBios\InputFilter
 */
interface InputFilterManagerAwareInterface
{
    /**
     * @return InputFilterPluginManager
     */
    public function getInputFilterManager(): InputFilterPluginManager;

    /**
     * @param InputFilterPluginManager $inputFilterManager
     * @return InputFilterManagerAwareInterface
     */
    public function setInputFilterManager(InputFilterPluginManager $inputFilterManager): self;
}
