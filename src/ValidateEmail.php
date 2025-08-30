<?php

namespace Zerotoprod\ValidateEmail;

use Zerotoprod\RegexEmail\RegexEmail;

/**
 * Validates an email
 *
 */
class ValidateEmail
{
    /**
     * Determine if a given value is a valid email.
     *
     * @param  string  $email
     *
     * @return bool
     *
     */
    public static function isEmail(string $email): bool
    {
        return preg_match(RegexEmail::pattern, $email);
    }
}