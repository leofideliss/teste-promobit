<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $fillable = ['id','name_prod','qtd','price','visits'];
    public $timestamps = false;


    public function tags(){
      return $this->belongsToMany('App\Models\Tag')->orderByPivot('tags.id','asc');
    }

}
