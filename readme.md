# webadmin

首先确保安装好了laravel，并且数据库连接设置正确。

composer require encore/laravel-admin "1.5.*"

然后运行下面的命令来发布资源：

php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
在该命令会生成配置文件config/admin.php，可以在里面修改安装的地址、数据库连接、以及表名，建议都是用默认配置不修改。

然后运行下面的命令完成安装：

php artisan admin:install
启动服务后，在浏览器打开 http://localhost/admin/ ,使用用户名 admin 和密码 admin登陆.
