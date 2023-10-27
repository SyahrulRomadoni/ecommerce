<?php
namespace App\Models;
use App\Models\TransactionsItem;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'customer_id',
        'customer_address',
        'payment_method_id',
        'date_transactions',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    public function items()
    {
        return $this->hasMany(TransactionsItem::class);
    }
}
