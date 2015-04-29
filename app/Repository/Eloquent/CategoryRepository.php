<?php
namespace App\Repository\Eloquent;
use App\Repository\CategoryInterface;
use App\Models\Category;
/**
 * Created by PhpStorm.
 * User: jimliu
 * Date: 15-4-29
 * Time: 下午10:49
 */

class CategoryRepository extends AbstractRepository implements  CategoryInterface{
    public function __construct(Category $category){
       $this->model=$category;
    }

    public function listAll(){
        $ret=$this->model->lists('name');
        return $ret;

    }

}