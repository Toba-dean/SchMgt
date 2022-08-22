<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93489e9e45beb6081cb7a27ffc4b071a
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit93489e9e45beb6081cb7a27ffc4b071a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93489e9e45beb6081cb7a27ffc4b071a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93489e9e45beb6081cb7a27ffc4b071a::$classMap;

        }, null, ClassLoader::class);
    }
}
