<?php

declare(strict_types=1);

namespace PhpEightFour\StringUtils\Tests;

use PhpEightFour\StringUtils\StringUtils;
use PHPUnit\Framework\TestCase;

class StringUtilsTest extends TestCase
{
    public function testTruncate()
    {
        $this->assertEquals('Hello World', StringUtils::truncate('Hello World', 20));
        $this->assertEquals('Long text tru...', StringUtils::truncate('Long text truncated by truncate method', 16));
        $this->assertEquals('Short', StringUtils::truncate('Short', 10));
    }
}
