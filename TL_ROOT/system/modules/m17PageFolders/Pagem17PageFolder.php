<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

class PageM17PageFolder {
    public function generate(Database_Result $objPage)
    {
        $objHandler = new $GLOBALS['TL_PTY']['error_404']();
        $objHandler->generate($objPage->id);
    }
}