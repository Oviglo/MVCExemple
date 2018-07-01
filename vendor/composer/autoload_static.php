<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11878de59f18c8ea52dbfc750c9105ba
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11878de59f18c8ea52dbfc750c9105ba::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11878de59f18c8ea52dbfc750c9105ba::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit11878de59f18c8ea52dbfc750c9105ba::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
