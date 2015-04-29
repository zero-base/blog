<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $table='article';

    public function category(){
        return $this->belongsTo('category');

    }

    public function comment(){
        return $this->hasMany('comment');
    }

}
