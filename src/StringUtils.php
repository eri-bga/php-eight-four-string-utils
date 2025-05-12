<?php

declare(strict_types=1);

namespace PhpEightFour\StringUtils;

class StringUtils
{
    public static function toCamelCase(string $input): string
    {
        return lcfirst(self::toPascalCase($input));
    }

    public static function toPascalCase(string $input): string
    {
        return str_replace(' ', '', ucwords(implode(' ', preg_split('/[^a-zA-Z0-9]+/', $input))));
    }

    public static function toSnakeCase(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }

    public static function toKebabCase(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '-$0', $input));
    }

    public static function isPalindrome(string $input): bool
    {
        $cleaned = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $input));
        return $cleaned === strrev($cleaned);
    }

    public static function truncate(string $input, int $length = 20, string $suffix = '...'): string
    {
        if (mb_strlen($input) <= $length) {
            return $input;
        }

        return mb_substr($input, 0, $length - mb_strlen($suffix)) . $suffix;
    }
}
