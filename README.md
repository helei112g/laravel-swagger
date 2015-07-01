# 说明
该项目，主要用于解决API文档生成的问题。
项目基于laravel5+swagger-php构成。[项目源地址](https://github.com/slampenny/Swaggervel)

# 改进日志
* 2015年7月1日 [v1.1.0] 修改路由
* 修改了项目文件结构
* 将swagger前端部分版本提升到V2.1版本，使用swagger前端[项目地址](https://github.com/helei112g/swagger-ui)
* 将项目改进为PSR-4自动加载，抛弃之前的PSR-0

# 安装
建议采用 `composer` 进行安装，
 1. 在项目的composer.json中配置 `"riverslei/laravel-swagger": "*"`
 2. 运行 `composer update` 
 3. 安装完成后，配置 `config/app.php` 中的服务提供者 `Riverslei\Swaggervel\SwaggervelServiceProvider::class`
 4. 以上配置完成后，运行 `php artisan vendor:publish` ，生成相关的配置文件以及资源文件。

*通过以上配置，已经完成了所有的安装工作，现在开始运行*

# 运行
查看api-doc的路由，使用一下命令
```artisan
php artisan route:list
```
根据路由信息，访问：baseUrl+api-docs，如果看到swagger的首页，说明已经成功

# 补充
安装该lib后，不需要再运行命令生成相关的json文件，一切在你运行url访问你项目swagger文档首页时，它会自动扫描相关的Model及Controller
，一切就是这么美妙，以后再也不需要劳心费神的写api接口文档了。

这里给出swagger-php注解的书写规则文档:[官方文档](http://zircote.com/swagger-php/annotations.html)
