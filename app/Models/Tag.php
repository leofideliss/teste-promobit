<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = "tags";
    protected $fillable = ['id','name_tag'];
    public $timestamps = false;


    public function products(){
       return $this->belongsToMany('App\Models\Product')->orderByPivot('products.visits','desc');
    }
}
