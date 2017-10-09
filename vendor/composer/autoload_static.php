<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9507f0067641500e055d7c172b22c676
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9507f0067641500e055d7c172b22c676::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9507f0067641500e055d7c172b22c676::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
