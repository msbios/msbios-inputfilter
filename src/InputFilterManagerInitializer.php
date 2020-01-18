<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\InputFilter;

use Interop\Container\ContainerInterface;
use Laminas\InputFilter\InputFilterPluginManager;
use Laminas\ServiceManager\Initializer\InitializerInterface;

/**
 * Class InputFilterManagerInitializer
 * @package MSBios\InputFilter
 */
class InputFilterManagerInitializer implements InitializerInterface
{
    /**
     * @inheritdoc
     *
     * @param ContainerInterface $container
     * @param object $instance
     */
    public function __invoke(ContainerInterface $container, $instance)
    {
        if ($instance instanceof InputFilterManagerAwareInterface) {
            $instance->setInputFilterManager(
                $container->get(InputFilterPluginManager::class)
            );
        }
    }

    /**
     * @param $an_array
     * @return InputFilterManagerInitializer
     */
    public static function __set_state($an_array): self
    {
        return new self();
    }
}
