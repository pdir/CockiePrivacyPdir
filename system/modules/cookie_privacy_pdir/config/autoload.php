<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Cookie_privacy_pdir
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'cookiePrivacyPdir',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'cookiePrivacyPdir\show' => 'system/modules/cookie_privacy_pdir/classes/show.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_cookie_privacy' => 'system/modules/cookie_privacy_pdir/templates',
));
