<?php

require_once (__DIR__.'/library/lib/Raven/Autoloader.php');
Raven_Autoloader::register();

/**
 * Class to log errors to Sentry
 *
 * @author  You <hello@garethdrew.me>
 */
class Raven
{
    /**
     * Create a new image element from an email address.
     * @param  string  $email The email address.
     * @param  integer $size  The avatar size.
     * @return string The source for an image element.
     */
    public static function log($ex)
    {
        // Instantiate a new client with a compatible DSN
		$client = new Raven_Client(Config::get('raven::raven.url'));

		// Capture an exception
		$client->captureException($ex);
    }

}