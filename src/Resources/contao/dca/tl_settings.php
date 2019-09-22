<?php
/**
 * @copyright  Media Motion AG <https://www.mediamotion.ch>
 * @author     Rory Zünd (Media Motion AG)
 * @package    JWPlayer
 * @license    LGPL-3.0+
 * @see	       https://github.com/mediamotionag/contao-jwplayer-bundle
 */


/**
 * Edit palettes
 */
 
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace
(
    'lockPeriod',
    'lockPeriod;{jwplayer_legend},default_player',
    $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']
);


/**
 * Add fields
 */

$GLOBALS['TL_DCA']['tl_settings']['fields']['default_player'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['fields']['default_player'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'long clr')
);