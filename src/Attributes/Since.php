<?php

declare(strict_types=1);

namespace PhpEightFour\StringUtils\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Since
{
    public function __construct(
        public string $version
    ) {}
}
