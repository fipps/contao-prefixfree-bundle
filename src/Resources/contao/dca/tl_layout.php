<?php
/**
 *  Copyright Information
 *  @copyright: 2019 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */

\ContaoCommunityAlliance\MetaPalettes\MetaPalettes::appendBefore('tl_layout', 'script', array('prefix' => 'usePrefixfree'));
$GLOBALS['TL_DCA']['tl_layout']['metasubpalettes']['usePrefixfree'] = array('useDynamciDom', 'useJQueryPlugin', 'useViewportRelativeUnits', 'useCSSVariables');

$GLOBALS['TL_DCA']['tl_layout']['fields']['usePrefixfree']        = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['usePrefixfree'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array(
        'tl_class' => 'w50 m12 cbx widget clr',
        'submitOnChange' => true,
    ),
    'sql'       => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['useDynamciDom']        = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['useDynamciDom'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array(
        'tl_class' => 'w50 m12 cbx widget',
        'submitOnChange' => true,
    ),
    'sql'       => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['useJQueryPlugin']        = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['useJQueryPlugin'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array(
        'tl_class' => 'w50 m12 cbx widget',
        'submitOnChange' => true,
    ),
    'sql'       => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['useViewportRelativeUnits']        = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['useViewportRelativeUnits'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array(
        'tl_class' => 'w50 m12 cbx widget',
        'submitOnChange' => true,
    ),
    'sql'       => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['useCSSVariables']        = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['useCSSVariables'],
    'inputType' => 'checkbox',
    'exclude'   => true,
    'eval'      => array(
        'tl_class' => 'w50 m12 cbx widget',
        'submitOnChange' => true,
    ),
    'sql'       => "char(1) NOT NULL default ''",
);
