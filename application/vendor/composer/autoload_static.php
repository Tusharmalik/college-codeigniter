<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08899744ff22c1ceb0b0072dad34493d
{
    public static $classMap = array (
        'yidas\\Model' => __DIR__ . '/..' . '/yidas/codeigniter-model/src/Model.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit08899744ff22c1ceb0b0072dad34493d::$classMap;

        }, null, ClassLoader::class);
    }
}
