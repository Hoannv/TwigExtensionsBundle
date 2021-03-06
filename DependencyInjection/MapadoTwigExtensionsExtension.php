<?php

namespace Mapado\TwigExtensionsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Twig Extensions configuration.
 *
 * @author Julien Deniau <julien.deniau@mapado.com>
 * @copyright 2013 Julien Deniau
 * @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
class MapadoTwigExtensionsExtension extends Extension
{

	/**
	 * {@inheritDoc}
	 */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
