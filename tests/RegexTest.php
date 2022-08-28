<?php

use PHPUnit\Framework\TestCase;

class RegexTest extends TestCase
{
    public function testRegex()
    {
        $path = "/products/123/categories/2";

        $pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";

        $result = preg_match($pattern, $path, $variables);

        $this->assertEquals(1, $result);

        var_dump($variables);
    }
}
