<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9918ed916b5d74e9059875f96f764a70
{
    public static $files = array (
        'c594688b3441835d5575f3085da4a242' => __DIR__ . '/..' . '/webonyx/graphql-php/src/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9918ed916b5d74e9059875f96f764a70::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9918ed916b5d74e9059875f96f764a70::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9918ed916b5d74e9059875f96f764a70::$classMap;

        }, null, ClassLoader::class);
    }
}
