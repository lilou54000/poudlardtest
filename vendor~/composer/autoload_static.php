<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f369890a15d2f5c02726d171d45ab3b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Student\\Poudlardtest\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Student\\Poudlardtest\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f369890a15d2f5c02726d171d45ab3b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f369890a15d2f5c02726d171d45ab3b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f369890a15d2f5c02726d171d45ab3b::$classMap;

        }, null, ClassLoader::class);
    }
}
