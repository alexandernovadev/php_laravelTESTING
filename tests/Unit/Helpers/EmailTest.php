<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
Use App\Helpers\Email;

class EmailTest extends TestCase
{
    public function test_email()
    {
        $email = 'nova@nova.com';

        // $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
        // Crtear el helper

        $result = Email::validate('nova@nova.com');

        $this->assertTrue($result);
    }
}
