<?php
/**
 * @copyright  Media Motion AG <https://www.mediamotion.ch>
 * @author     Rory Zünd (Media Motion AG)
 * @package    JWPlayer
 * @license    LGPL-3.0+
 * @see	       https://github.com/mediamotionag/contao-jwplayer-bundle
 */


namespace Memo\JWPlayerBundle\Elements;

class JWPlayerElement	 extends \ContentElement
{
	protected $strTemplate = 'ce_jw_player';

	/**
	 * Displays a wildcard in the back end.
	 *
	 * @return string
	 */
	public function generate()
	{

		if (TL_MODE == 'BE') {

			$template = new \BackendTemplate('be_wildcard');
			$template->wildcard = 'JWPlayer - Video-ID: '.$this->video_id;

			return $template->parse();

		}

		return parent::generate();
	}

	/**
	 * Generates the content element.
	 */
	protected function compile()
	{
		global $objPage;

		// Get default player
		$strDefaultPlayer = \Contao\Config::get('default_player');

		// Load JW-Player Resource
		if(strpos($this->player_id, 'cdn.jwplayer.com') !== false && $this->player_override){
			$GLOBALS['TL_JAVASCRIPT'][]	= $this->player_id;
		} elseif ($this->player_id != '' && $this->player_override) {
			$GLOBALS['TL_JAVASCRIPT'][]	= 'https://cdn.jwplayer.com/libraries/' . $this->player_id . '.js';
		} elseif($strDefaultPlayer != '') {
			$GLOBALS['TL_JAVASCRIPT'][]	= 'https://cdn.jwplayer.com/libraries/' . $strDefaultPlayer . '.js';
		} else {
			$this->Template->strError = "Es wurde kein Player definiert. Definieren Sie einen Player auf dem Element oder in den Contao Einstellungen.";
		}

	}
}
