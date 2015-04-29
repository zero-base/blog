<?php
namespace App\Repository\Eloquent;
use App\Repository\ArticleInterface;
use App\Models\Article;
/**
 * Created by PhpStorm.
 * User: jimliu
 * Date: 15-4-29
 * Time: 下午11:48
 *
 */

class ArticleRepository extends AbstractRepository implements ArticleInterface{
    public function __construct(Article $article){
        $this->model=$article;
    }

    public function findAllPaginated($perpage=15){
        $ret=$this->model->orderBy('created_at','DESC')->paginate($perpage);
        return $ret;
    }
}