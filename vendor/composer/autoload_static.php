<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd61fa66f362ac4c094f4e74c61241598
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TelegramBot\\Api\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TelegramBot\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/telegram-bot/api/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd61fa66f362ac4c094f4e74c61241598::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd61fa66f362ac4c094f4e74c61241598::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd61fa66f362ac4c094f4e74c61241598::$classMap;

        }, null, ClassLoader::class);
    }
}