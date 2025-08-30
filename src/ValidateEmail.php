<?php

namespace Zerotoprod\ValidateEmail;

use Zerotoprod\RegexEmail\RegexEmail;

/**
 * Validates an email
 *
 * @link https://github.com/zero-to-prod/validate-email
 */
class ValidateEmail
{
    /**
     * Determine if a given value is a valid email.
     *
     * @param  string  $email
     *
     * @return bool
     * @link https://github.com/zero-to-prod/validate-email
     */
    public static function isEmail(string $email): bool
    {
        return preg_match(RegexEmail::pattern, $email);
    }
}