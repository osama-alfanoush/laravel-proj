<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';
    use HasFactory;

        protected $fillable = ['user_id', 'shop_name','address'];


        public function user()
        {
          return $this->belongsTo(User::class);
        }
        public function categories() {
            return $this->hasMany(Category::class);
          }
        public function products()
        {
          return $this->hasMany(Product::class);
        }
        public function hasOrders()
{
    return $this->orders->count() > 0;
}
    }
