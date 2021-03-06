<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b68a334d3f79c47c31da34ede14b72b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b68a334d3f79c47c31da34ede14b72b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b68a334d3f79c47c31da34ede14b72b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b68a334d3f79c47c31da34ede14b72b::$classMap;

        }, null, ClassLoader::class);
    }
}
