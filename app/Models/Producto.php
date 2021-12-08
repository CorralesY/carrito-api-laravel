<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
   protected $fillable = [
        'name_product',
        'description',
        'price',
   ];

   public function users(){
    return $this->belongsToMany('App\Models\Producto');
}
}
