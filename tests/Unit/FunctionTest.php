<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testEmail()
    {

        $result = validate_email("i@mail.com");
        $this->assertTrue($result);

        $result = validate_email("i@@mail.com");
        $this->assertFalse($result);
    }
}
