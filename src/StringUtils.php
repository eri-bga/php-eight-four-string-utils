<?php

declare(strict_types=1);

namespace PhpEightFour\StringUtils;

use PhpEightFour\StringUtils\Attributes\Description;
use PhpEightFour\StringUtils\Attributes\Since;

class StringUtils
{
    #[Description("Converts a string to camelCase.")]
    #[Since("v1.2.0")]
    public static function toCamelCase(string $input): string
    {
        return lcfirst(self::toPascalCase($input));
    }

    #[Description("Converts a string to PascalCase.")]
    #[Since("v1.2.0")]
    public static function toPascalCase(string $input): string
    {
        return str_replace(' ', '', ucwords(implode(' ', preg_split('/[^a-zA-Z0-9]+/', $input))));
    }

    #[Description("Converts a string to UPPER_SNAKE_CASE.")]
    #[Since("v1.2.0")]
    public static function toSnakeCase(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }

    #[Description("Converts a string to kebab-case.")]
    #[Since("v1.2.0")]
    public static function toKebabCase(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $input));
    }

    #[Description("Converts a string to UPPER_SNAKE_CASE.")]
    #[Since("v1.2.0")]
    public static function isPalindrome(string $input): bool
    {
        $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $input));
        return $cleaned === strrev($cleaned);
    }


    #[Description("Truncates a string to a specified length and appends a suffix if necessary.")]
    #[Since("v1.2.0")]
    public static function truncate(string $input, int $length = 20, string $suffix = '...'): string
    {
        if (mb_strlen($input) <= $length) {
            return $input;
        }

        return mb_substr($input, 0, $length - mb_strlen($suffix)) . $suffix;
    }
}
