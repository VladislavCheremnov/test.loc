<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f984fc5fb4ed734e6063b6c460d7021
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'wfm\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'wfm\\' => 
        array (
            0 => __DIR__ . '/..' . '/wfm',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f984fc5fb4ed734e6063b6c460d7021::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f984fc5fb4ed734e6063b6c460d7021::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f984fc5fb4ed734e6063b6c460d7021::$classMap;

        }, null, ClassLoader::class);
    }
}
