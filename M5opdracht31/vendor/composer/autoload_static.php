<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdce28420f43e1d0e0bca6df90875d3b5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'M5opdracht31\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'M5opdracht31\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdce28420f43e1d0e0bca6df90875d3b5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdce28420f43e1d0e0bca6df90875d3b5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdce28420f43e1d0e0bca6df90875d3b5::$classMap;

        }, null, ClassLoader::class);
    }
}
