<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit266c5e2b6fb071d4b245dec79a653d4f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'App\\Models\\ExampleModel' => __DIR__ . '/../..' . '/app/Models/ExampleModel.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit266c5e2b6fb071d4b245dec79a653d4f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit266c5e2b6fb071d4b245dec79a653d4f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit266c5e2b6fb071d4b245dec79a653d4f::$classMap;

        }, null, ClassLoader::class);
    }
}
