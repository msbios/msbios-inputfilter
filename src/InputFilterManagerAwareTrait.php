<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\InputFilter;



use Laminas\InputFilter\InputFilterPluginManager;

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
     * @return self
     */
    public function setInputFilterManager(InputFilterPluginManager $inputFilterManager): self
    {
        $this->inputFilterManager = $inputFilterManager;
        return $this;
    }
}
