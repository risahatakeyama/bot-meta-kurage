<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0c97370ad2b51485564d2f794438fc3
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LINE\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LINE\\' => 
        array (
            0 => __DIR__ . '/..' . '/linecorp/line-bot-sdk/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0c97370ad2b51485564d2f794438fc3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0c97370ad2b51485564d2f794438fc3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0c97370ad2b51485564d2f794438fc3::$classMap;

        }, null, ClassLoader::class);
    }
}
