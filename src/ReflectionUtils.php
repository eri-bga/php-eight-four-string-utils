<?php

declare(strict_types=1);

namespace PhpEightFour\StringUtils;

use ReflectionClass;
use ReflectionMethod;

class ReflectionUtils
{
    public static function getMethodAttributes(string $className): array
    {
        $reflection = new ReflectionClass($className);
        $methods = [];

        foreach ($reflection->getMethods() as $method) {
            $attributes = [];

            foreach ($method->getAttributes() as $attribute) {
                $attributes[] = [
                    'name' => $attribute->getName(),
                    'arguments' => $attribute->getArguments()
                ];
            }

            $methods[$method->getName()] = $attributes;
        }

        return $methods;
    }
}
