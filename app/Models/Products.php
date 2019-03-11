<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'product';

    protected $fillable = ['name','category_id','main_img','cost','new_cost','is_hot','is_new','rating','product_code','availability','overview','description','info','reviews'];
}
