<?php
use Illuminate\Database\Capsule\Manager as Capsule;

// Autoload 自动载入
require '../vendor/autoload.php';

// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require '../config/database.php');
$capsule->bootEloquent();

// 路由配置
require '../config/routes.php';