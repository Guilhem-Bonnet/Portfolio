<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68a07036526bd7c2433356de2edf1db7
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit68a07036526bd7c2433356de2edf1db7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit68a07036526bd7c2433356de2edf1db7::$classMap;

        }, null, ClassLoader::class);
    }
}
