<?php
return array(
    /* 模板相关配置 */

    'DEFAULT_THEME'    => 'default',

    //此处只做模板使用，具体替换在COMMON模块中的set_theme函数,该函数替换MODULE_NAME,DEFAULT_THEME两个值为设置值
    'TMPL_PARSE_STRING' => array(
        '__IMG__'    => __ROOT__ . '/Application/MODULE_NAME/View/DEFAULT_THEME/Public/Images',
        '__CSS__'    => __ROOT__ . '/Application/MODULE_NAME/View/DEFAULT_THEME/Public/Css',
        '__JS__'     => __ROOT__ . '/Application/MODULE_NAME/View/DEFAULT_THEME/Public/Js',
        '__THEME__'     => __ROOT__ . '/Application/MODULE_NAME/View/DEFAULT_THEME',
        '__THEME_PUBLIC__'     => __ROOT__ . '/Application/MODULE_NAME/View/DEFAULT_THEME/Public',
    ),
);