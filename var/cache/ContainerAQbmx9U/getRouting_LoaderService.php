<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once $this->targetDirs[2].'/vendor/symfony/config/FileLocatorInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/config/FileLocator.php';
include_once $this->targetDirs[2].'/vendor/symfony/http-kernel/Config/FileLocator.php';
include_once $this->targetDirs[2].'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/config/Loader/Loader.php';
include_once $this->targetDirs[2].'/vendor/symfony/config/Loader/FileLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/XmlFileLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/YamlFileLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/PhpFileLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/config/Loader/GlobFileLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/DirectoryLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/ObjectRouteLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/DependencyInjection/ServiceRouterLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
include_once $this->targetDirs[2].'/vendor/sensio/framework-extra-bundle/Routing/AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
include_once $this->targetDirs[2].'/vendor/symfony/config/Loader/LoaderResolver.php';
include_once $this->targetDirs[2].'/vendor/symfony/config/Loader/DelegatingLoader.php';
include_once $this->targetDirs[2].'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';

$a = ($this->services['kernel'] ?? $this->get('kernel'));
$b = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());

$c = new \Symfony\Component\HttpKernel\Config\FileLocator($a, ($this->targetDirs[2].'/src/Resources'), array(0 => ($this->targetDirs[2].'/src')));

$d = new \Sensio\Bundle\FrameworkExtraBundle\Routing\AnnotatedRouteControllerLoader($b);

$e = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($b);

$f = new \Symfony\Component\Config\Loader\LoaderResolver();
$f->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($c));
$f->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($c));
$f->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($c));
$f->addLoader(new \Symfony\Component\Config\Loader\GlobFileLoader($c));
$f->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($c));
$f->addLoader(new \Symfony\Component\Routing\Loader\DependencyInjection\ServiceRouterLoader($this));
$f->addLoader($d);
$f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($c, $d));
$f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($c, $d));
$f->addLoader($e);
$f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($c, $e));
$f->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($c, $e));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader(($this->privates['controller_name_converter'] ?? $this->privates['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser($a)), $f);
