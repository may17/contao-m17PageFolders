<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package M17PageFolders
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'PageM17PageFolder' => 'system/modules/m17PageFolders/PageM17PageFolder.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'nav_m17PageFolders' => 'system/modules/m17PageFolders/templates',
));
