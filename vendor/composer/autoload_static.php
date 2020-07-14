<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76cf9f9dfe928b65756ee64b09b9363d
{
    public static $files = array (
        'ece6d9c8113fe3f36b8b204e943c9a55' => __DIR__ . '/../..' . '/src/Common.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPChina\\WPChinaYes\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPChina\\WPChinaYes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76cf9f9dfe928b65756ee64b09b9363d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76cf9f9dfe928b65756ee64b09b9363d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}