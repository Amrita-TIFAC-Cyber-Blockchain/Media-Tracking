<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68b05ac24a4213a550c625b9aca0da41
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vipnytt\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vipnytt\\' => 
        array (
            0 => __DIR__ . '/..' . '/vipnytt/useragentparser/src',
        ),
    );

    public static $classMap = array (
        'RobotsTxtParser' => __DIR__ . '/..' . '/t1gor/robots-txt-parser/source/robotstxtparser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68b05ac24a4213a550c625b9aca0da41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68b05ac24a4213a550c625b9aca0da41::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68b05ac24a4213a550c625b9aca0da41::$classMap;

        }, null, ClassLoader::class);
    }
}
