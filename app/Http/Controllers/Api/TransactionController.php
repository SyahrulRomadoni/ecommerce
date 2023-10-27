<?php

namespace App\Http\Controllers\Api;

use App\Models\CustomerAddress;
use App\Models\Transactions;
use App\Models\TransactionsItem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaction(Request $request) {
        $transaction = new Transactions;
        $transaction->customer_id = $request->customer_id;
        $customer = CustomerAddress::where('customer_id', $request->customer_id)->first();
        $transaction->customer_address = $customer->address;
        $transaction->payment_method_id = $request->payment_method_id;
        $transaction->date_transactions = date("Y-m-d");
        $transaction->save();
    
        foreach ($request->items as $itemData) {
            $item = new TransactionsItem;
            $item->transactions_id = $transaction->id;
            $item->product_id = $itemData['product_id'];
            $item->quantity = $itemData['quantity'];
            $transaction->items()->save($item);
        }
    
        return response()->json([
            'status' => true,
            'message' => 'Transaksi berhasil dibuat',
        ]);
    }
}