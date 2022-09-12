<?php

namespace App\Models;

use App\Http\Controllers\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['title','description','price','category_id'];

    public function product()
    {
        $this->belongsTo('categories',Category::class,'category_id','id');
    }
}
