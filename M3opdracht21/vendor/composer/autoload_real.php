<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb37518bcdd6870bf40f6e970a5239a04
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

        spl_autoload_register(array('ComposerAutoloaderInitb37518bcdd6870bf40f6e970a5239a04', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb37518bcdd6870bf40f6e970a5239a04', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb37518bcdd6870bf40f6e970a5239a04::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
