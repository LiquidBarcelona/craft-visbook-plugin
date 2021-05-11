<?php
/**
 * Visbook Settings plugin for Craft CMS 3.x
 *
 * A craft plugin for Visbook custom settings.
 *
 * @link      https://liquid.cat
 * @copyright Copyright (c) 2021 liquid studio
 */

namespace liquidstudiovisbooksettings\visbooksettings\services;

use liquidstudiovisbooksettings\visbooksettings\VisbookSettings;

use Craft;
use craft\base\Component;

/**
 * BookingService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    liquid studio
 * @package   VisbookSettings
 * @since     1.0.0
 */
class BookingService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     VisbookSettings::$plugin->bookingService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (VisbookSettings::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
