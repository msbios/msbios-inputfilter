<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\InputFilter;

use Zend\Filter;
use Zend\Stdlib\ArrayUtils;
use Zend\Validator;

/**
 * Class LazyInputFactory
 * @package MSBios\InputFilter
 */
final class LazyInputFactory
{
    /**
     * @param array $options
     * @return array
     */
    private static function defaultFilters(array $options = []): array
    {
        return ArrayUtils::merge([
            ['name' => Filter\StringTrim::class],
            ['name' => Filter\StripTags::class],
            ['name' => Filter\StripNewlines::class],
        ], $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public static function text(array $options = []): array
    {
        return ArrayUtils::merge([
            'required' => false,
            'filters' => self::defaultFilters(),
            'validators' => [
                [
                    'name' => Validator\StringLength::class,
                    'options' => [
                        'max' => 255,
                    ],
                ],
            ],
        ], $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public static function number(array $options = []): array
    {
        return ArrayUtils::merge([
            'required' => false,
            'filters' => self::defaultFilters([
                ['name' => Filter\Digits::class],
            ]),
            'validators' => [
                ['name' => Validator\Digits::class],
            ],
        ], $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public static function textarea(array $options = []): array
    {
        return ArrayUtils::merge([
            'required' => false,
            'filters' => [
                ['name' => Filter\StringTrim::class],
                ['name' => Filter\StripTags::class],
            ],
            'validators' => [
                [
                    'name' => Validator\StringLength::class,
                    'options' => [
                        'max' => 65535,
                    ],
                ],
            ],
        ], $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public static function date(array $options = []): array
    {
        return ArrayUtils::merge([
            'required' => false,
            'filters' => self::defaultFilters(),
            'validators' => [
                [
                    'name' => Validator\Date::class,
                    'options' => [
                        'format' => 'Y-m-d',
                    ],
                ],
            ],
        ], $options);
    }

    /**
     * @param array $options
     * @return array
     */
    public static function checkbox(array $options = []): array
    {
        return ArrayUtils::merge([
            'required' => false,
            'filters' => self::defaultFilters(),
            'validators' => [
                [
                    'name' => Validator\InArray::class,
                    'options' => [
                        'haystack' => [0, 1],
                    ],
                ],
            ],
        ], $options);
    }
}