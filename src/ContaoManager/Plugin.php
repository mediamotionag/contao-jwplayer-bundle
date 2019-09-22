<?php
/**
 * @copyright  Media Motion AG <https://www.mediamotion.ch>
 * @author     Rory Zünd (Media Motion AG)
 * @package    JWPlayer
 * @license    LGPL-3.0+
 * @see	       https://github.com/mediamotionag/contao-jwplayer-bundle
 */

namespace Memo\JWPlayerBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Rory Zünd (Media Motion AG)
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('Memo\JWPlayerBundle\MemoJWPlayerBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
        ];
    }
}
