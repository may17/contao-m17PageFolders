<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');
/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2010 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Joe Ray Gregory
 * @author     Joe Ray Gregory <joe@may17.de>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id: tl_page.php 2011-04-07 22:05:00 may17
 */

$GLOBALS['TL_DCA']['tl_page']['list']['label']['label_callback'] = array('tl_m17PageFolder', 'addIconSwitch');

$GLOBALS['TL_DCA']['tl_page']['palettes']['m17Folder'] = '{title_legend},title,alias,type;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{expert_legend:hide},cssClass,sitemap,hide,guests;{tabnav_legend:hide},tabindex,accesskey;{publish_legend},published,start,stop';

/**
 * Class tl_page_email
 */

class tl_m17PageFolder extends tl_page
{

    /**
     * add own icons without loading them from the theme folder
     * @param $row
     * @param $label
     * @param DataContainer $dc
     * @param string $imageAttribute
     * @param bool $blnReturnImage
     * @param bool $blnProtected
     * @return string
     */

    public function addIconSwitch($row, $label, DataContainer $dc=null, $imageAttribute='', $blnReturnImage=false, $blnProtected=false)
    {
        if($row['type'] !== 'm17Folder')
            return $this->addIcon($row, $label, $dc, $imageAttribute,$blnReturnImage,$blnProtected);

        $status = $this->getPageStatusIcon((object) $row);

        $icon = $this->generateImage('system/modules/m17PageFolders/assets/icons/'.$status, false, false);

        return $icon . '<span style="padding-left: 6px;">' . $label . '</span>';
    }
}