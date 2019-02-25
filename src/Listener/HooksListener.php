<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

namespace Fipps\PrefixfreeBundle\Listener;

class HooksListener
{

    /**
     * Add all activated / used JS and CSS
     *
     * @param \PageModel   $objPage
     * @param \LayoutModel $objLayout
     * @param \PageRegular $objPageRegular
     */
    public function onGetPageLayout(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {

        if ($objLayout->usePrefixfree) {
            if (!$objLayout->addJQuery) {
                if (\Config::get('debugMode')) {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/js/jquery.js|static';
                } else {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/js/jquery.min.js|static';
                }
            }
            if (\Config::get('debugMode')) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.js|async';
            } else {
                $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.min.js|async';
            }

            // Plugins
            if ($objLayout->useDynamciDom) {
                if (\Config::get('debugMode')) {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.dynamic-dom.js|async';
                } else {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.dynamic-dom.min.js|async';
                }
            }
            if ($objLayout->useJQueryPlugin) {
                if (\Config::get('debugMode')) {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.jquery.js|async';
                } else {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.jquery.min.js|async';
                }
            }
            if ($objLayout->useViewportRelativeUnits) {
                if (\Config::get('debugMode')) {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.viewport-units.js|async';
                } else {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.viewport-units.min.js|async';
                }
            }
            if ($objLayout->useCSSVariables) {
                if (\Config::get('debugMode')) {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.vars.js|async';
                } else {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsprefixfree/js/prefixfree.vars.min.js|async';
                }
            }
        }
    }
}