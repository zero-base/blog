<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $table='category';
    protected $primaryKey='id';
    public  $timestamps=false;

    public function article(){
        return $this->hasMany('Article');


    }

}
