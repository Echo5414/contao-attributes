<?php

namespace Virtuos\ContaoAttributesBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Virtuos\ContaoAttributesBundle\ContaoAttributesBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(VirtuosContaoAttributesBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
