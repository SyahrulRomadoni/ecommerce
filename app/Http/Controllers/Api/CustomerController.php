<?php

namespace App\Http\Controllers\Api;

use App\Models\Customer;
use App\Models\CustomerAddress;
use App\Models\Transactions;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function delete($id) {
        $cs = CustomerAddress::where('customer_id', $id)->first();
        $tc = Transactions::where('customer_id', $id)->first();
    
        if ($cs || $tc) {
            return response()->json([
                'status' => false,
                'message' => 'Customer tidak bisa dihapus karena masih ada relasi dengan alamat atau transaksi',
            ]);
        }
    
        $c = Customer::find($id);
    
        if ($c) {
            $c->delete();
    
            return response()->json([
                'status' => true,
                'message' => 'Customer berhasil dihapus',
            ]);
        }
    
        return response()->json([
            'status' => false,
            'message' => 'Customer tidak ditemukan',
        ]);
    }
}