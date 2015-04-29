<?php
/**
 * Created by PhpStorm.
 * User: jimliu
 * Date: 15-4-29
 * Time: 下午10:39
 */

namespace App\Repository\Eloquent;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository{
    protected $model;

    public function __construct(Model $pmodel){
        $this->model=$pmodel;

    }

}