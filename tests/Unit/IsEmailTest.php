<?php

namespace Tests\Unit;

use Tests\TestCase;
use Zerotoprod\ValidateEmail\ValidateEmail;

class IsEmailTest extends TestCase
{
    /**
     * @test
     *
     * @see ValidateEmail::isEmail()
     */
    public function is_email(): void
    {
        self::assertTrue(ValidateEmail::isEmail('john@example.com'));
    }

    /**
     * @test
     *
     * @see ValidateEmail::isEmail()
     */
    public function is_not_email(): void
    {
        self::assertFalse(ValidateEmail::isEmail('bogus'));
    }
}