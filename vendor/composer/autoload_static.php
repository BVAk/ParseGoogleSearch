<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite3c121a22d30b900aabb6a108944a227
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite3c121a22d30b900aabb6a108944a227::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite3c121a22d30b900aabb6a108944a227::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}