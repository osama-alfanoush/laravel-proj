<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'total_amount',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getTotal(){
        $cartItems = CartItem::where('user_id', Auth::user()->id)->get();

        $productsprice = 0;
        $total=0;
        $fee=3;
        foreach ($cartItems as $cartItem) {
            $productsprice += $cartItem->quantity * $cartItem->product->price;
        }
        $total=$productsprice+$fee;
    }
    public function start()
{
    $this->status = 'pending';
    $this->save();
}
public function orderRequest()
{
    return $this->hasOne(OrderRequest::class);
}

}
