<?php
/**
 * Created by PhpStorm.
 * User: jimliu
 * Date: 15-4-24
 * Time: 上午11:31
 */

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $repeat=90;
        $insert_arr=[];
        $parentid_arry=DB::table('article')->lists('id');
        $bod=[
            '两个字段的类型或者大小不严格匹配，例如，如果一个是INT(10), 那么外键也必须设置成INT(10), 而不是 INT(11) 也不能是',
            '你可能设置为外键设置了一个默认值，如 default=0',
            '要连接的两个表的编码格式不同',
            '参考github官方文档https://help.github.com/articles/set-up-git/ 配置了HTTPS和SSH连接。',
            '在这个关系里面，其中的一个字段是一个混合键值中的一个，它没有自己独立的索引，这时，你必须为它创建一个独立的索引。'
        ];
        for($i=0;$i<$repeat;$i++){
            $item['article_id']=$parentid_arry[rand(0,count($parentid_arry)-1)];
            $item['body']=$bod[rand(0,count($bod)-1)];
            array_push($insert_arr,$item);
        }

        DB::table('comment')->insert($insert_arr);

    }

}