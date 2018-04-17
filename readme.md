# livephp 又一个PHP框架
## 核心
* 处理url到控制方法的映射
* 将常用操作封装成函数方便使用
* 容器的实现, 可将类或实例绑定到容器上方便调用
* 控制器实现依赖注入
* 封装mysql操作类

## 目录结构

* app 应用目录
* --config 应用配置
* --controller 控制器
* --model 模型
* --view twig模板
* --function.php 应用函数
* 
* cache 缓存目录
* 
* core 框架核心目录
* --library 核心类库
* --App.php 应用启动入口
* --Container.php 应用容器
* --function.php 核心函数
* 
* public 静态资源上传目录与入口文件
* 
* swoole swoole的应用
* 
* vagrant centos7虚拟机集成环境
* 
* vendor 通过composer安装的第三方类库

## TODO LIST
1. 集成twig模板引擎 ✔
2. 多环境判断, 根据环境自动加载对应配置文件 ✔
3. 多语言 ✔
4. 尝试实现依赖注入 √ (控制器方法实现)
5. redis操作集成 ✔
6. 全局钩子的实现 ✔
7. vagrant 虚拟机集成环境搭建 ✔
8. websocket服务 ✔
9. 使用swoole创建http服务器
10. model文件的处理与快速实例化