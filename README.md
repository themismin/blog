## 简介
支持 markdown 的博客系统

## 安装说明
1. git clone 克隆代码
2. composer install --no-dev 安装第三方扩展包
3. cp .env.example .env 配置环境变量
4. php artisan key:generate --ansi 生成key
5. php artisan migrate 数据库迁移
6. php artisan db:seed 初始化数据
7. php artisan storage:link 访问上传本地的文件资源