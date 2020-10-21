<?php
/**
 * @copyright  Media Motion AG <https://www.mediamotion.ch>
 * @author     Rory Zünd (Media Motion AG)
 * @package    JWPlayer
 * @license    LGPL-3.0+
 * @see	       https://github.com/mediamotionag/contao-jwplayer-bundle
 */

use Contao\CoreBundle\DataContainer\PaletteManipulator;

/**
 * Edit palettes
 */

PaletteManipulator::create()
	->addLegend('jwplayer_legend', 'tl_settings', PaletteManipulator::POSITION_AFTER)
	->addField('default_player', 'jwplayer_legend', PaletteManipulator::POSITION_APPEND)
	->applyToPalette('default', 'tl_settings');

/**
 * Add fields
 */

$GLOBALS['TL_DCA']['tl_settings']['fields']['default_player'] = array(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['fields']['default_player'],
    'exclude'                 => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'long clr')
);
