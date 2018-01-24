<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\InputFilter\Initializer;

use Interop\Container\ContainerInterface;
use MSBios\InputFilter\InputFilterManagerAwareInterface;
use Zend\InputFilter\InputFilterPluginManager;
use Zend\ServiceManager\Initializer\InitializerInterface;

/**
 * Class InputFilterManagerInitializer
 * @package MSBios\InputFilter\Initializer
 */
class InputFilterManagerInitializer implements InitializerInterface
{
    /**
     * Initialize the given instance
     *
     * @param  ContainerInterface $container
     * @param  object $instance
     * @return void
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof InputFilterManagerAwareInterface) {
            $instance->setInputFilterManager(
                // $container->get('InputFilterManager') // by alias
                $container->get(InputFilterPluginManager::class) // by registered class name
            );
        }
    }

    /**
     * @param $an_array
     * @return InputFilterManagerInitializer
     */
    public static function __set_state($an_array)
    {
        return new self();
    }
}