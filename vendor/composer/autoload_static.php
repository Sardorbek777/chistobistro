<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaec3a1b901f519049226f9e536c047ab
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaec3a1b901f519049226f9e536c047ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaec3a1b901f519049226f9e536c047ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaec3a1b901f519049226f9e536c047ab::$classMap;

        }, null, ClassLoader::class);
    }
}
