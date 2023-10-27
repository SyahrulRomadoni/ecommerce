<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class TransactionsItem extends Model
{
    protected $table = 'transactions_item';

    protected $primaryKey = 'id';

    protected $fillable = [
        'transactions_id',
        'product_id',
        'quantity',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}
