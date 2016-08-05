<?php
return array(
    /* 模板相关配置 */
    //此处只做模板使用，具体替换在COMMON模块中的set_theme函数,该函数替换Index,default两个值为设置值
    'TMPL_PARSE_STRING' => array(
        '__IMG__'    => __ROOT__ . '/Application/Index/View/default/Public/images',
        '__CSS__'    => __ROOT__ . '/Application/Index/View/default/Public/css',
        '__JS__'     => __ROOT__ . '/Application/Index/View/default/Public/js',
        '__THEME__'     => __ROOT__ . '/Application/Index/View/default/Public/',
        '__INDEXCOMMON__'     => __ROOT__ . '/Application/Index/View/default/Public/',
        '__INDEX__'     => __ROOT__ . '/Index/'
    ),
);