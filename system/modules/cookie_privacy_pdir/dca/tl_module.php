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
 * Add palettes to tl_module
 */

$GLOBALS['TL_DCA']['tl_module']['palettes']['cookiePrivacyView']   = '{title_legend},name,type;{privacy_legend},pdir_privacy_cookie_type,pdir_privacy_cookie_css,pdir_privacy_cookie_accept_button,pdir_privacy_cookie_policy_button,pdir_privacy_cookie_policy_popup_fixed,pdir_privacy_cookie_policy_popup_bottom,pdir_privacy_cookie_infopage';


/**
 * Add fields to tl_module
 */

$GLOBALS['TL_DCA']['tl_module']['fields']['pdir_privacy_cookie_type'] = array
(
		'label'					=> &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_popupType'],
		'inputType'      		=> 'select',
		'search'           		=> true,
		'options'             	=> array('','type1','type2'),
		'reference'             => &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_popup_type_select'],
		'eval'                	=> array('mandatory'=>true, 'maxlength'=>64, 'tl_class'=>'w50 wizard'),
		'sql'					=> "varchar(10) NOT NULL default ''",
		'explanation'			=> &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_popup_type']
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pdir_privacy_cookie_css'] = array
(
		'label'					=> &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_cssType'],
		'inputType'      		=> 'select',
		'search'           		=> true,
		'options'             	=> array('nocss','classic','white','black','blue'),
		'reference'             => &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_css_type_select'],
		'eval'                	=> array('mandatory'=>true, 'maxlength'=>64, 'tl_class'=>'w50 wizard'),
		'sql'					=> "varchar(10) NOT NULL default ''",
		'explanation'			=> &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_cssType']
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pdir_privacy_cookie_infopage'] = array
(
		'label'                 => &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_infoPage'],
		'exclude'               => true,
		'inputType'             => 'pageTree',
		'reference'             => &$GLOBALS['TL_LANG']['tl_module'],
		'eval'                  => array('includeBlankOption'=>true, 'tl_class'=>'w100 clr'),
		'sql'                   => "int(10) unsigned NOT NULL default '0'",
		'explanation'			=> &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_infoPage']
		
);

$GLOBALS['TL_DCA']['tl_module']['fields']['pdir_privacy_cookie_accept_button'] = array
(
		'label'                 => &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_acceptButton'],
		'inputType'             => 'checkbox',
		'eval'                  => array('tl_class'=>'w50 cbx'),
		'sql'                   => "char(1) NOT NULL default ''",
		'default'				=> true

);

$GLOBALS['TL_DCA']['tl_module']['fields']['pdir_privacy_cookie_policy_button'] = array
(
		'label'                 => &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_policyButton'],
		'inputType'             => 'checkbox',
		'eval'                  => array('tl_class'=>'w50 cbx'),
		'sql'                   => "char(1) NOT NULL default ''",
		'default'				=> true

);

$GLOBALS['TL_DCA']['tl_module']['fields']['pdir_privacy_cookie_policy_popup_fixed'] = array
(
		'label'                 => &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_popupFixed'],
		'inputType'             => 'checkbox',
		'eval'                  => array('tl_class'=>'w50 cbx'),
		'sql'                   => "char(1) NOT NULL default ''",
		'default'				=> true

);

$GLOBALS['TL_DCA']['tl_module']['fields']['pdir_privacy_cookie_policy_popup_bottom'] = array
(
		'label'                 => &$GLOBALS['TL_LANG']['FMD']['COOKIE_PRIVACY_PDIR']['pdir_popupBottom'],
		'inputType'             => 'checkbox',
		'eval'                  => array('tl_class'=>'w50 cbx'),
		'sql'                   => "char(1) NOT NULL default ''",
		'default'				=> true

);
