<?php
return array(
    //db
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'cafe',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    //layout
    'LAYOUT_ON'             =>  true, // 是否启用布局
    'LAYOUT_NAME'           =>  'layout', // 当前布局名称 默认为layout
    //debug
    'SHOW_PAGE_TRACE'       =>true,
    //template pares string
    'TMPL_PARSE_STRING'     =>  array(
        '__SITE_BASE_URL__' =>  SITE_BASE_URL
    ),
    //default filter
    'DEFAULT_FILTER'        =>  'trim,htmlspecialchars',
);