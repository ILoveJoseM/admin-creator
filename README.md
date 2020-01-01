# laravel-admin 控制器生成器

## 简介

该组件用于根据表结构自动生成laravel-admin后台增删查改模块

## 安装

- 如果使用的是laravel-admin 1.7.3以下版本，请使用v1.0.*版本

````bash
composer require "jose-chan/admin-creator:v1.0.*"
````

- 如果使用的是laravel-admin 1.7.3及其以上版本，请使用v2.0.*版本

````bash
composer require "jose-chan/admin-creator:v2.0.*"
````

- 发布配置文件到config文件夹以及模版文件到public文件夹

````bash
php artisan vendor:publish --provider=JoseChan\AdminCreator\Providers\AdminCreatorProvider
````

- 修改配置
````php
<?php

return [
    "controller_path" => base_path("/app/Admin/Controllers/"), // 控制器存放位置，一般来说是这个位置
    "template_path" => public_path("/stub/"), // 模版文件位置，注释掉的话使用包文件中的模版
];


````

## 路由

安装完毕后，在laravel-admin中新增菜单，路由填写`/table`就可以在菜单栏访问了