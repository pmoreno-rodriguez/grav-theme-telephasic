<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use RocketTheme\Toolbox\Event\Event;
use Grav\Common\Page\Interfaces\PageInterface;

/**
 * Telephasic Theme
 *
 * Class Telephasic
 *
 * @category Extensions
 * @package  Grav\Theme
 * @author   Pedro Moreno <https://github.com/pmoreno-rodriguez>
 * @license  http://www.opensource.org/licenses/mit-license.html MIT License
 * @link     https://github.com/pmoreno-rodriguez/grav-theme-telephasic
 */

class Telephasic extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ];
    }

    /**
    * Register custom CSS or JavaScript assets
    **/ 
    public function onTwigSiteVariables()
    {

        $themeConfig = $this->config->get('themes.telephasic');

        if (isset($themeConfig['custom_css']) && $themeConfig['custom_css'] && file_exists(__DIR__ . '/assets/css/custom.css')) {
            $this->grav['assets']->addCss('theme://assets/css/custom.css', ['priority' => 10]);
        }

        if (isset($themeConfig['custom_js']) && $themeConfig['custom_js'] && file_exists(__DIR__ . '/assets/js/custom.js')) {
            $this->grav['assets']->addJs('theme://assets/js/custom.js', ['group' => 'bottom', 'priority' => 15]);
        }
    }
}
