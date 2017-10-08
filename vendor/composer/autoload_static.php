<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d2abb8449b037b16f072e72ec13b8b6
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d2abb8449b037b16f072e72ec13b8b6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d2abb8449b037b16f072e72ec13b8b6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
