<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit776e08fa1d8294f8d2ff20c22999a27d
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

        spl_autoload_register(array('ComposerAutoloaderInit776e08fa1d8294f8d2ff20c22999a27d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit776e08fa1d8294f8d2ff20c22999a27d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit776e08fa1d8294f8d2ff20c22999a27d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
