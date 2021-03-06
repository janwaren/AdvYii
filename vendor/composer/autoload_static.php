<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5043fbe9cd63af1e4a5e5a7bb718a05a
{
    public static $files = array (
        '2cffec82183ee1cea088009cef9a6fc3' => __DIR__ . '/..' . '/ezyang/htmlpurifier/library/HTMLPurifier.composer.php',
    );

    public static $prefixLengthsPsr4 = array (
        'y' => 
        array (
            'yii\\composer\\' => 13,
            'yii\\bootstrap\\' => 14,
            'yii\\' => 4,
        ),
        'k' => 
        array (
            'kartik\\select2\\' => 15,
            'kartik\\growl\\' => 13,
            'kartik\\form\\' => 12,
            'kartik\\dialog\\' => 14,
            'kartik\\base\\' => 12,
        ),
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'yii\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-composer',
        ),
        'yii\\bootstrap\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2-bootstrap',
        ),
        'yii\\' => 
        array (
            0 => __DIR__ . '/..' . '/yiisoft/yii2',
        ),
        'kartik\\select2\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-select2',
        ),
        'kartik\\growl\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-growl',
        ),
        'kartik\\form\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-widget-activeform',
        ),
        'kartik\\dialog\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-dialog',
        ),
        'kartik\\base\\' => 
        array (
            0 => __DIR__ . '/..' . '/kartik-v/yii2-krajee-base',
        ),
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HTMLPurifier' => 
            array (
                0 => __DIR__ . '/..' . '/ezyang/htmlpurifier/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5043fbe9cd63af1e4a5e5a7bb718a05a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5043fbe9cd63af1e4a5e5a7bb718a05a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5043fbe9cd63af1e4a5e5a7bb718a05a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
