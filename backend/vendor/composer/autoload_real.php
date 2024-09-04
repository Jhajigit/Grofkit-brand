<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit90bbf95869b4e88bf0dc5022e708a458
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit90bbf95869b4e88bf0dc5022e708a458', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit90bbf95869b4e88bf0dc5022e708a458', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit90bbf95869b4e88bf0dc5022e708a458::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
