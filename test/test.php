<?php
require_once "../vendor/autoload.php";
# 时区和字体设置
date_default_timezone_set("Asia/Shanghai");
error_reporting(E_ERROR);
header("Content-Type: text/html; charset=utf-8");

# 常量定义
define('DS', DIRECTORY_SEPARATOR);
define('UEDITOR_PATH', dirname($_SERVER['SCRIPT_FILENAME']) . DS);

// php 配置信息
$config = require_once(UEDITOR_PATH . 'config.php');
// 获取方法
$action = !empty($_GET['action']) ? trim($_GET['action']) : '';
$server = (new \Develop\Editor\Server)->server($config, $action);
echo $server;
exit();
