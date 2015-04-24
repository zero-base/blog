<?php
/**
 * Created by PhpStorm.
 * User: jimliu
 * Date: 15-4-23
 * Time: 下午10:44
 */

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $repeate=30;
        $arry_stack=[];

        $titele=[
            'ubuntu LAMP 下laravel5.0 运行环境设置 ',
            ' git 使用技巧 ',
            'ubuntu12.04 启动apache2 对.htaccess 的支持 ',
            '开启ubuntu下lamp的php错误提示',
            '破Laravel白屏问题 '
        ];

        $body=[
            '当你试图在mysql中创建一个外键的时候，这个出错会经常发生，这是非常令人沮丧的。像这种不能创建一个.frm 文件的报错好像暗示着操作系统的文件的权限错误或者其它原因，但实际上，这些都不是的，事实上，这个mysql报错已经被报告是一个mysql本身的bug并出现在mysql 开发者列表当中很多年了，然而这似乎又是一种误导。

在很多实例中，这种错误的发生都是因为mysql一直以来都不能很好的支持的关系的问题， 更不幸的是它也并没有指明到底是哪一个问题会导致上面那种错误，下面我把导致这个可怕 的150错误的常见原因列出来了，并且我以可能性的大小作了排序

已知的原因：

1， 两个字段的类型或者大小不严格匹配，例如，如果一个是INT(10), 那么外键也必须设置成INT(10), 而不是 INT(11) 也不能是 TINYINT. 你得使用 SHOW 命令来查看字段的大小，因为一些查询浏览器有时候把 int(10) 和int(11) 都显示为integer。另外，你还必须确定两个字段是否一个为 SIGNED,而另一个又是UNSIGNED, 这两字段必须严格地一致匹配，更多关于signed 和 unsigned 的信息，请参阅：http://www.verysimple.com/blog/?p=57

2， 你试图引用的其中一个外键没有建立起索引，或者不是一个primary key , 如果其中一个不是primary key 的放，你必须为它创建一个索引。

3， 外键的名字是一个已经存在的一个键值了，这个时候，你应该检查你的数据库以确保外健名字是唯一的，或者你在键名后面加上几个随机的字符以测试是否是这个原因。

4， 其中一个或者两个表是MyISAM引擎的表，若想要使用外键约束，必须是InnoDB引擎，（实际上，如果两个表都是MyISAM 引擎的，这个错误根本不会发生，但也不会产生外键），你可以通过查询浏览器来设置表的引擎类型

5， 你可能设置了ON DELETE SET NULL, 但是相关的键的字段又设置成了NOTS NULL 值。你可能通过修改cascade 的属性值或者把字段属性设置成 allow null 来搞定这个bug.

6， 请确定你的Charset 和 Collate 选项在表级和字段级上的一致

7， 你可能设置为外键设置了一个默认值，如 default=0

8， 在这个关系里面，其中的一个字段是一个混合键值中的一个，它没有自己独立的索引，这时，你必须为它创建一个独立的索引。

9， ALTER 声明中有语法错误

10. 要连接的两个表的编码格式不同',
            'Nginx在配置文件中添加

location / {
 try_files $uri $uri/ /index.php?$query_string;
}

2.app/storage的写入权限

chmod -R 777 app/storage

给了权限就可以
3.open_basedir的设置问题
因为一些自动工具会自动的将open_basedir设置到域名所在的跟目录，也就是public目录，但其实open_basedir应该在public上一级目录
在站点配置或者php.ini 或者 httpd.conf中改过来重启下对应的服务即可

最后还可以在根目录使用php artisan env来查找错误',
            '1配置github

参考github官方文档https://help.github.com/articles/set-up-git/ 配置了HTTPS和SSH连接。
2 在github中创建版本库

略。可参见github官方文档https://help.github.com/articles/create-a-repo
3 初始化本地版本库

进入项目根目录，输入：

    git init

4 将项目文件添加到版本库中

还是在项目根目录中输入：

    git add .

5 添加项目改动说明

还是在项目根目录中输入：

    git commit -m “第一次提交，创建项目。”

6 将本地仓库与github项目仓库xxx相关联

在本地项目仓库的根目录中，输入：

    git remote add origin git@github.com:yourname/xxx.git

7 将本地库的内容同步到github上

    git push -u origin master

注意:由于远程库是空的，我们第一次推送master分支时，加上了-u参数，Git不但会把本地的master分支内容推送的远程新的master分支，还会把本地的master分支和远程的master分支关联起来，在以后的推送或者拉取时就可以简化命令。



则使用强行更新 +master:

    git push -u origin +master

8 将本地库与github项目仓库相关联的另外一种办法

在本地仓库的根目录中，输入：

    git clone https://github.com/yourname/xxx.git

进入xxx目录中，将所有文件复制到上一层目录中：

    cd xxx

    cp -r * ../

回到本地仓库根目录，删除xxx目录的所有文件

    rm -rf xxx/

这样也能将本地仓库和远程仓库相关联，接下来可以添加文件到本地仓库，再提交内容到github。
8 git的回滚操作
8.1 先使用git log查看日志，找到想要回滚的版本

在项目目录中，输入',


        ];

        $category_array=DB::table('category')->lists('id');

        for($i=0;$i<$repeate;$i++){
            $insert_item['title']=$titele[rand(0,count($titele)-1)];
            $insert_item['body']=$body[rand(0,count($body)-1)];
            $insert_item['category_id']=$category_array[rand(0,count($category_array)-1)];

            array_push($arry_stack,$insert_item);

        }

        DB::table('article')->insert($arry_stack);

    }

}