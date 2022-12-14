<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ab183982e5a8d61759617ec3063fa9f
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\GeoIP\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\GeoIP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\GeoIPPlugin' => __DIR__ . '/../..' . '/geo-ip.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ab183982e5a8d61759617ec3063fa9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ab183982e5a8d61759617ec3063fa9f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ab183982e5a8d61759617ec3063fa9f::$classMap;

        }, null, ClassLoader::class);
    }
}
