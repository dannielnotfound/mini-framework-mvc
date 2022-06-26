<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f04bb1a3e872976f064c9cf854ecce6
{
    public static $prefixLengthsPsr4 = array (
        'n' => 
        array (
            'ns\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ns\\' => 
        array (
            0 => __DIR__ . '/..' . '/ns',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f04bb1a3e872976f064c9cf854ecce6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f04bb1a3e872976f064c9cf854ecce6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f04bb1a3e872976f064c9cf854ecce6::$classMap;

        }, null, ClassLoader::class);
    }
}
