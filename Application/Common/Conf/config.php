<?php
/**
 * 系统配文件
 * 所有系统级别的配置
 */
return array(
    'LOAD_EXT_CONFIG' => 'setting',

	'DEFAULT_CHARSET' => 'utf-8',

    /* 模块相关配置 */
    'APP_GROUP_LIST'     => 'Index,Admin,Install,Member',//开启分组模式
	'DEFAULT_MODULE' => 'Index',
    'DEFAULT_GROUP'      => 'Index',//默认分组
    'APP_GROUP_MODE'     => 0,//开启独立分组
    'APP_GROUP_PATH'     => 'Modules',//独立分组文件夹名称

    /* 调试配置 */
    'SHOW_PAGE_TRACE' => true,

    /* URL配置 */
    'URL_CASE_INSENSITIVE' => true, //默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'            => 2, //URL模式
    'VAR_URL_PARAMS'       => '', // PATHINFO URL参数变量
    'URL_PATHINFO_DEPR'    => '/', //PATHINFO URL分割符

    /* 全局过滤配置 */
    'DEFAULT_FILTER' => '', //全局过滤函数

    /* 数据库配置 */
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'evaluation', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '',  // 密码
    'DB_PORT'   => '3306', // 端口
    'DB_PREFIX' => 'es_', // 数据库表前缀

     /* 模版相关配置 */
    'TMPL_DEFAULT_THEME' => 'default',  //默认模版主题
    'URL_HTML_SUFFIX'	=>	'html',
    'TMPL_L_DELIM'		=>	'<{', //修改左定界符
    'TMPL_R_DELIM'		=>	'}>', //修改右定界符
    'TMPL_PARSE_STRING'	=>	array(
	    '__CSS__'		=>	__ROOT__.'/Public/Css',
	    '__JS__'		=>	__ROOT__.'/Public/Js',
	    '__IMAGES__'	=>	__ROOT__.'/Public/Images',
   	),

    'USER_AUTH_KEY_F'   =>  'username',
    'USER_AUTH_KEY_ID'   => 'user_id',
    'ADMIN_AUTH_KEY_B'=> 'adminuser',
    'ADMIN_AUTH_KEY_SHOW_NAME'=> 'showname',
    /* RBAC配置 */
    'RBAC_SUPERADMIN' => 'admin',       //超级管理员名称
    'ADMIN_AUTH_KEY'  => 'superadmin',  //超级管理员识别
    'USER_AUTH_ON'    => false,          //是否开启验证
    'USER_AUTH_TYPE'  => 1,             //验证类型（1：登录验证，2：时时验证）
    'USER_AUTH_KEY'   => 'uid',         //用户认证识别号
    'NOT_AUTH_MODULE' => 'Login',       //无需认证的控制器
    'NOT_AUTH_ACTION' => 'login',            //无需认证的动作方法
    'RBAC_ROLE_TABLE' => 'es_role',   //角色表名称 
    'RBAC_USER_TABLE' => 'es_role_user',//角色表与用户表的中间表名称
    'RBAC_ACCESS_TABLE'=>'es_access', //权限表名称
    'RBAC_NODE_TABLE' => 'es_node',   //节点表名称

     /* 模糊查询相关配置 */
    'DB_LIKE_FIELDS'    =>  'title|content',

     /* html缓存配置 */
    'HTML_CACHE_ON'     =>  '0',   //缓存是否开启
    'HTML_FILE_SUFFIX'  =>  '.html', //静态文件后缀
    'HTML_CACHE_RULES'  =>  array(  //缓存规则
        'list:'         =>  array('list/list_{catsid}','600'),
        'article:'      =>  array('article/art_{articleid}','600'),
    ),
    'HTML_CACHE_TIME'   =>  60, //静态缓存有效期

    'settingfile_path'  =>  './AppLication/Common/Conf/setting.php',

     /* 数据库备份相关 */
    'DATA_BACKUP_PATH' => './Data/',
    'DATA_BACKUP_PART_SIZE' => 20971520,
    'DATA_BACKUP_COMPRESS' => 1,
    'DATA_BACKUP_COMPRESS_LEVEL' => 9,

    //自定义跳转页面
    'TMPL_ACTION_SUCCESS' =>'./Application/Index/View/Public/jump.html',
    'TMPL_ACTION_ERROR' => './Application/Index/View/Public/jump.html',

	'DATA_CACHE_TYPE' => 'file',

//	'WEB_DOMAIN' => 'http://a69d815a.ngrok.io',
	'WEB_DOMAIN' => 'http://www.thesimpsonschina.com',

	//微信公众号配置
	'WECHAT' => include 'wechat.php',

	//微信支付配置
	'WXPAY' => include 'wxpay.php',

	//短信接口配置
	'SUBMAIL' => include 'submail.php',

    'COMMON_VERIFY_PAGE' => '/Index/Login/login',

     //默认错误跳转对应的模板文件
    'TMPL_ACTION_ERROR' => THINK_PATH . 'Tpl/dispatch_jump.tpl',
    //默认成功跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => THINK_PATH . 'Tpl/dispatch_jump.tpl',
);
//return array_merge($b,$a);
