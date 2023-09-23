<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad53619cb82d549eb7e8628ace14d39f
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Escola\\Escola\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Escola\\Escola\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitad53619cb82d549eb7e8628ace14d39f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad53619cb82d549eb7e8628ace14d39f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitad53619cb82d549eb7e8628ace14d39f::$classMap;

        }, null, ClassLoader::class);
    }
}