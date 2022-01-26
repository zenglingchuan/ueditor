<?php

use Develop\Editor\Server;

# 判断curl扩展是否开启
if (!extension_loaded("curl")) {
    echo "请先去开启curl扩展!";
    die;
}

require_once "../vendor/autoload.php";
# 时区和字体设置
date_default_timezone_set("Asia/Shanghai");
error_reporting(E_ERROR);
header("Content-Type: text/html; charset=utf-8");

$config = require_once('./config.php');
// 获取方法
$action = !empty($_GET['action']) ? trim($_GET['action']) : '';
$server = (new Server)->server($config, $action);
echo $server;
exit();
