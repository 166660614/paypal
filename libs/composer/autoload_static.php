<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdf5c1d75e54e516ba4a717914e904f9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pingpp\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pingpp\\' => 
        array (
            0 => __DIR__ . '/..' . '/pingplusplus/pingpp-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdf5c1d75e54e516ba4a717914e904f9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdf5c1d75e54e516ba4a717914e904f9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}