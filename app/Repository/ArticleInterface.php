<?php
namespace App\Repository;
/**
 * Created by PhpStorm.
 * User: jimliu
 * Date: 15-4-29
 * Time: 下午11:42
 */

interface ArticleInterface{
     public function findAllPaginated($perpage=15);
     public function showArticle($id);
}

