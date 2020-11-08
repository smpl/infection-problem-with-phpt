<?php

declare(strict_types=1);

namespace App\Test;

use App\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function testAdd()
    {
        $o = new Example();
        $this->assertSame(10, $o->add(3, 7));
    }
}
