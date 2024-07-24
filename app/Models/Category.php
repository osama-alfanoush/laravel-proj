<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'seller_id',
        'admin_id',
        'image',

    ];



    public function admin(){
        return $this->belongsTo(Admin::class);
      }

      public function products()
      {
          return $this->hasMany(Product::class);
      }

      public function requests()
      {
          return $this->hasMany(CategoryRequest::class);
      }

}
