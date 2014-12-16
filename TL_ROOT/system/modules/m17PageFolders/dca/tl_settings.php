<?php

$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{m17PageFolderPalette_legend},m17PageFolderPalette';

$GLOBALS['TL_DCA']['tl_settings']['fields']['m17PageFolderPalette'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_settings']['m17PageFolderPalette'],
    'inputType'               => 'text',
    'load_callback'           => array(array('m17PageFolderConfig', 'checkDefaultValue')),
    'eval'                    => array('mandatory'=>true, 'nospace'=>true, 'tl_class'=>'long')
);

class m17PageFolderConfig extends tl_settings
{

    public function checkDefaultValue($value, $obj)
    {

        if(empty($value)) {

            $value = '{title_legend},title,alias,type;{protected_legend:hide},protected;{layout_legend:hide},includeLayout;{expert_legend:hide},cssClass,sitemap,hide,guests;{tabnav_legend:hide},tabindex,accesskey;{publish_legend},published,start,stop';

        }

        return $value;

    }

}