<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit883dc6b6e2192ac733c60c4f5fc33dc2
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit883dc6b6e2192ac733c60c4f5fc33dc2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
