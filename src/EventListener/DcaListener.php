<?php

namespace Virtuos\ContaoAttributesBundle\EventListener;

use Contao\CoreBundle\ServiceAnnotation\Hook;

class DcaListener
{
    /**
     * @Hook("loadDataContainer")
     */
    public function onLoadDataContainer(string $table): void
    {
        if ($table !== 'tl_article') {
            return;
        }

        $GLOBALS['TL_DCA']['tl_article']['fields']['joDataAttributes'] = [
            'label' => &$GLOBALS['TL_LANG']['tl_article']['joDataAttributes'],
            'inputType' => 'keyValueWizard',
            'exclude' => true,
            'sql' => "blob NULL"
        ];

        $GLOBALS['TL_DCA']['tl_article']['fields']['joDataAttributesDisableAutomatic'] = [
            'label' => &$GLOBALS['TL_LANG']['tl_article']['joDataAttributesDisableAutomatic'],
            'exclude' => true,
            'inputType' => 'checkbox',
            'eval' => ['submitOnChange' => false, 'tl_class' => 'clr m12'],
            'sql' => "char(1) NOT NULL default ''"
        ];
    }
}
