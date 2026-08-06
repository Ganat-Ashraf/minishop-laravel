// app/Models/Order.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'items',
        'subtotal',
        'delivery_fee',
        'discount',
        'total',
        'status'
    ];

    protected $casts = [
        'items' => 'array'
    ];
}