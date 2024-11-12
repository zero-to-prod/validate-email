# Zerotoprod\ValidateEmail

![](./logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/validate-email)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/validate-email/test.yml?label=tests)](https://github.com/zero-to-prod/validate-email/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/validate-email?color=blue)](https://packagist.org/packages/zero-to-prod/validate-email/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/validate-email.svg?color=purple)](https://packagist.org/packages/zero-to-prod/validate-email/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/validate-email?color=f28d1a)](https://packagist.org/packages/zero-to-prod/validate-email)
[![License](https://img.shields.io/packagist/l/zero-to-prod/validate-email?color=pink)](https://github.com/zero-to-prod/validate-email/blob/main/LICENSE.md)

Validates an email.

## Installation

Install the package via Composer:

```bash
composer require zero-to-prod/validate-email
```

## Usage

Returns true if the value is a valid email.

```php
Zerotoprod\ValidateEmail\ValidateEmail::isEmail('john@example.com')
```