<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit0376c5a09f80ca10e7ce5932392451b1
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

        spl_autoload_register(array('ComposerAutoloaderInit0376c5a09f80ca10e7ce5932392451b1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit0376c5a09f80ca10e7ce5932392451b1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit0376c5a09f80ca10e7ce5932392451b1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
