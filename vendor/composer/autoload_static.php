<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23c6e5581ba181248991124e6697781f
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Module\\' => 7,
        ),
        'E' => 
        array (
            'Elix\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Module\\' => 
        array (
            0 => __DIR__ . '/../..' . '/module',
        ),
        'Elix\\' => 
        array (
            0 => __DIR__ . '/..' . '/Elix',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23c6e5581ba181248991124e6697781f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23c6e5581ba181248991124e6697781f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}