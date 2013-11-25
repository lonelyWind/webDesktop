<?php
//确定应用名称 后台admin
define('APP_NAME','Admin');
//确定应用路径
define('APP_PATH','./Admin/');
//开启调试模式，没有缓存文件产生
define('APP_DEBUG',true);
//引入应用核心文件
require './ThinkPHP/ThinkPHP.php';
?>