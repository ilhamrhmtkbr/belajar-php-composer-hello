<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfef0092034c89239d98d76d1dc7c3bc4
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'NamaPackagenya\\Belajar\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'NamaPackagenya\\Belajar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfef0092034c89239d98d76d1dc7c3bc4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfef0092034c89239d98d76d1dc7c3bc4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfef0092034c89239d98d76d1dc7c3bc4::$classMap;

        }, null, ClassLoader::class);
    }
}