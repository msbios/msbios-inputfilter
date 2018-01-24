<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\InputFilter;

use Zend\InputFilter\InputFilterPluginManager;

/**
 * Interface InputFilterPluginManagerAwareInterface
 * @package MSBios\InputFilter
 */
interface InputFilterPluginManagerAwareInterface
{
    /**
     * @return InputFilterPluginManager
     */
    public function getInputFilterPluginManager(): InputFilterPluginManager;

    /**
     * @param InputFilterPluginManager $inputFilterPluginManager
     * @return $this
     */
    public function setInputFilterPluginManager(InputFilterPluginManager $inputFilterPluginManager);
}
