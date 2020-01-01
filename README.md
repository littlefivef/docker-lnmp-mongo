#使用Docker 部署 LNMP+Redis+mongodb 环境 

###php版本选择了7.3，对应的mongdb扩展和测试方式都是用的php7的版本，不适于7以下的版本
###在php原来的镜像的基础上，主要增加的扩展有：redis、mongodb、pdo_mysql、mysqli、gd、zip

### Linux安装Docker
镜像：选择阿里云的docker-ce镜像安装
步骤：Ubuntu 和centos的安装方式请参考网址（有非常详细的说明步骤）：https://developer.aliyun.com/mirror/docker-ce
查看docker版本信息：docker version	
查看docker详细信息：docker info

### docker镜像加速（选择阿里云镜像加速）
vim /etc/docker/daemon.json
{ "registry-mirrors": ["你的阿里云镜像加速地址"] }
systemctl daemon-reload
systemctl restart docker

###安装docker-compose
方式一、官网对各个平台的docker-compose安装都有详细说明：https://docs.docker.com/compose/install/
方式二、除了官网的安装方式外，在centos我们还可以这么手动安装：
    yum install -y epel-release
    yum install -y python-pip
    pip install -i https://pypi.tuna.tsinghua.edu.cn/simple docker-compose==1.24.1   #（1.24.1版本比较稳定）
安装成功之后可以通过该命令查看安装的版本：docker-compose version

####简单的docker-commpose 命令
启动：docker-compose up -d
关闭：docker-compose down

####使用
- 进入 docker-lnmp-mongo 目录下
- 复制 env-example 并重命名为 .env
- 运行 docker-compose up -d (第一次运行因为需要构建镜像，所以需要比较长的时间)
- 通过浏览器访问即可，如果访问不到，请注意是否开放了80端口,www目录下放置了5个测试文件，分别用于测试mysql,html,php,mongodb,redis



