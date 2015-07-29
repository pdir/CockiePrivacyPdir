<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   cookiePrivacyPdir
 * @author    pdir / digital agentur - Mathias Arzberger
 * @license   LGPL
 * @copyright 2014
 */


/**
 * Namespace
 */
namespace cookiePrivacyPdir;


/**
 * Class show
 *
 * @copyright  2014
 * @author     pdir / digital agentur - Mathias Arzberger
 * @package    Devtools
 */
class show extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_cookie_privacy';


	/**
	 * Generate the module
	 */
	protected function compile()
	{		
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/cookie_privacy_pdir/assets/js/jquery.cookiebar.js|static';
		
		$pdirPrivacyCSS = $this->arrData['pdir_privacy_cookie_css'];
		if($pdirPrivacyCSS != 'nocss') {
			$GLOBALS['TL_CSS'][] = 'system/modules/cookie_privacy_pdir/assets/css/jquery.cookiebar.css||static';
		}
		if($pdirPrivacyCSS != 'nocss' AND $pdirPrivacyCSS != 'classic') {
			$GLOBALS['TL_CSS'][] = 'system/modules/cookie_privacy_pdir/assets/css/jquery.cookiebar.css||static';
			$GLOBALS['TL_CSS'][] = 'system/modules/cookie_privacy_pdir/assets/css/'.$pdirPrivacyCSS.'.css||static';
		}
		
		if($this->arrData['pdir_privacy_cookie_accept_button'] == 1)
			$this->Template->AcceptButton = 'true';
		else 
			$this->Template->AcceptButton = 'false';
		
		if($this->arrData['pdir_privacy_cookie_policy_button'] == 1)
			$this->Template->PolicyButton = 'true';
		else
			$this->Template->PolicyButton = 'false';		

		if($this->arrData['pdir_privacy_cookie_policy_popup_fixed'] == 1)
			$this->Template->PopupFixed = 'true';
		else
			$this->Template->PopupFixed = 'false';
		
		if($this->arrData['pdir_privacy_cookie_policy_popup_bottom'] == 1)
			$this->Template->PopupBottom = 'true';
		else
			$this->Template->PopupBottom = 'false';
		
		$pdirPopupType = $this->arrData['pdir_privacy_cookie_type'];
		$this->Template->PopupType = $pdirPopupType;
		
		$pageID = $this->arrData['pdir_privacy_cookie_infopage'];
		if (($jumpTo = \PageModel::findByPk($pageID)) !== null) {
			$pdirInfoPage = \Controller::generateFrontendUrl($jumpTo->row());
			$this->Template->InfoPage = $pdirInfoPage;
		} else {
			$this->Template->PolicyButton = 'false';
		}
		
	}
}
