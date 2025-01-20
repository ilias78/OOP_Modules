<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb37518bcdd6870bf40f6e970a5239a04
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'M3opdracht21\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'M3opdracht21\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb37518bcdd6870bf40f6e970a5239a04::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb37518bcdd6870bf40f6e970a5239a04::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb37518bcdd6870bf40f6e970a5239a04::$classMap;

        }, null, ClassLoader::class);
    }
}
