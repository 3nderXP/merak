<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5911c62547992b1146b462addfd40a9f
{
    public static $files = array (
        '2717494b14b565a65502d44ff82f2c9d' => __DIR__ . '/../..' . '/App/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5911c62547992b1146b462addfd40a9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5911c62547992b1146b462addfd40a9f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5911c62547992b1146b462addfd40a9f::$classMap;

        }, null, ClassLoader::class);
    }
}
