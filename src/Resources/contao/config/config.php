<?php
/**
 * @copyright  Media Motion AG <https://www.mediamotion.ch>
 * @author     Rory Zünd (Media Motion AG)
 * @package    JWPlayer
 * @license    LGPL-3.0+
 * @see	       https://github.com/mediamotionag/contao-jwplayer-bundle
 */

/**
 * Content elements
 */

$GLOBALS['TL_CTE']['media']['jw_player'] = '\Memo\JWPlayerBundle\Elements\JWPlayerElement';

/**
 * Backend CSS
 */
 if(TL_MODE == 'BE') 
{ 
	$GLOBALS['TL_CSS'][]        = 'bundles/jwplayerbundle/backend/backend.css'; 
}