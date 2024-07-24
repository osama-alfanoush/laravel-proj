<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
         'image',
         'price',
         'category_id',
         'seller_id',
         'admin_id',
         'rating',
         'quantity',
         'old_price'
        ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function seller()
  {
      return $this->belongsTo(Seller::class);
  }
  public function admin()
  {
      return $this->belongsTo(Admin::class);
  }
  public function cartItems()
  {
      return $this->hasMany(CartItem::class);
  }
  public function ordersItems()
  {
      return $this->hasMany(Order::class);
  }   public function reviews() {
    return $this->hasMany(Review::class);
}
}
