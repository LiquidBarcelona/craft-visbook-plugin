<?php
/**
 * Visbook Settings plugin for Craft CMS 3.x
 *
 * A craft plugin for Visbook custom settings.
 *
 * @link      https://liquid.cat
 * @copyright Copyright (c) 2021 Liquid
 */

namespace liquidstudiovisbook\visbooksettings\variables;

use liquidstudiovisbook\visbooksettings\VisbookSettings;

use Craft;

/**
 * Visbook Settings Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.visbookSettings }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Liquid
 * @package   VisbookSettings
 * @since     1.0.0
 */
class VisbookSettingsVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.visbookSettings.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.visbookSettings.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
