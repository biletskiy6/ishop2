<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50ea898c5128e9cce40f35d611a00dd2
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'ishop\\' => 6,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ishop\\' => 
        array (
            0 => __DIR__ . '/..' . '/ishop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50ea898c5128e9cce40f35d611a00dd2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50ea898c5128e9cce40f35d611a00dd2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
