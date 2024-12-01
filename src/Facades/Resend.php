<?php

namespace Resend\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Resend\Laravel\ResendServiceProvider;
use Resend\Service\ApiKey;
use Resend\Service\Audience;
use Resend\Service\Batch;
use Resend\Service\Contact;
use Resend\Service\Domain;
use Resend\Service\Email;

/**
 * Provides Resend integration for Laravel and Symfony Mailer.
 *
 * @method static Contact contacts() Manage Resend contacts.
 * @method static Audience audiences() Manage Resend audiences through the Resend Email API.
 * @method static Batch batch() Create and send Resend Batches.
 * @method static ApiKey apiKeys() Create, remove or list API keys.
 * @method static Email emails() Manage emails through the Resend Email API.
 * @method static Domain domains() Manage domains through the Resend Email API.
 *
 * @package resend-laravel
 * @see <a href="https://resend.com/docs/introduction">Resend Docs</a>
 * @see <a href="https://resend.com/docs/api-reference/introduction">API Reference</a>
 */


class Resend extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'resend';
    }
}
