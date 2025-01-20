<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitceaf1b70909ab03c22e65e9006c1b30c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'M3opdracht20\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'M3opdracht20\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitceaf1b70909ab03c22e65e9006c1b30c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitceaf1b70909ab03c22e65e9006c1b30c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitceaf1b70909ab03c22e65e9006c1b30c::$classMap;

        }, null, ClassLoader::class);
    }
}
