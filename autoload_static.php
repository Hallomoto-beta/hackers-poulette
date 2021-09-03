<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd85bc82e2cab9737b8029dfcd7c6af48
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd85bc82e2cab9737b8029dfcd7c6af48::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd85bc82e2cab9737b8029dfcd7c6af48::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd85bc82e2cab9737b8029dfcd7c6af48::$classMap;

        }, null, ClassLoader::class);
    }
}
