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

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'player_override';
$GLOBALS['TL_DCA']['tl_content']['palettes']['jw_player'] = '{type_legend},type,headline;{source_legend},video_id;{player_legend},video_mode,autostart,mute,repeat,controls,player_override;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['player_override'] = 'player_id';


/**
 * Add fields
 */

$GLOBALS['TL_DCA']['tl_content']['fields']['video_id'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['video_id'],
    'exclude'          => true,
    'inputType'        => 'text',
    'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
    'sql'              => "varchar(50) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['player_override'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['player_override'],
    'exclude'          => true,
    'inputType'        => 'checkbox',
    'eval'             => array('mandatory' => false, 'tl_class' => 'w50', 'submitOnChange'=> true),
    'sql'              => "int(1) NOT NULL default '0'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['player_id'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['player_id'],
    'exclude'          => true,
    'inputType'        => 'text',
    'eval'             => array('mandatory' => true, 'tl_class' => 'w50 clr'),
    'sql'              => "varchar(50) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['autostart'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['autostart'],
    'exclude'          => true,
    'inputType'        => 'checkbox',
    'eval'             => array('mandatory' => false, 'chosen' => true, 'tl_class' => 'w50 clr'),
    'sql'              => "int(1) NOT NULL default '0'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['mute'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['mute'],
    'exclude'          => true,
    'inputType'        => 'checkbox',
    'eval'             => array('mandatory' => false, 'chosen' => true, 'tl_class' => 'w50'),
    'sql'              => "int(1) NOT NULL default '0'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['repeat'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['repeat'],
    'exclude'          => true,
    'inputType'        => 'checkbox',
    'eval'             => array('mandatory' => false, 'chosen' => true, 'tl_class' => 'w50'),
    'sql'              => "int(1) NOT NULL default '0'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['controls'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['controls'],
    'exclude'          => true,
    'inputType'        => 'checkbox',
    'eval'             => array('mandatory' => false, 'chosen' => true, 'tl_class' => 'w50'),
    'sql'              => "int(1) NOT NULL default '0'",
];


$GLOBALS['TL_DCA']['tl_content']['fields']['video_mode'] = [
    'label'            => &$GLOBALS['TL_LANG']['tl_content']['video_mode'],
    'exclude'          => true,
    'inputType'        => 'select',
    'default'          => 'fill',
    'options' => array(
		'fill' => 'Füllen (Proportional & beschneiden)',
		'exactfit' => 'Füllen (Verzerren & nicht beschneiden)',
		'uniform' => 'Proportional (schwarze Balken)',
		'none' => 'Original Grösse und Proportion',
	),
    'eval'             => array('mandatory' => true, 'multiple' => false, 'chosen' => true, 'tl_class' => 'w50'),
    'sql'              => "varchar(20) NOT NULL default 'fill'",
];
