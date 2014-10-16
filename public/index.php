<?php

// 定义 PUBLIC_PATH
define('PUBLIC_PATH', __DIR__);

// 启动器
require PUBLIC_PATH.'/../bootstrap.php';

// 路由配置、开始处理
require BASE_PATH.'/config/routes.php';