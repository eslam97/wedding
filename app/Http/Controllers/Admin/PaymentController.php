<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Endpayment;
use App\Models\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $endpayments = Endpayment::select('id', 'payment_status_id', 'payment_type', 'payment_brand', 'amount', 'desc', 'user_id', 'status_payment')->paginate(pagination_count);
        return view('admin.payment', compact('endpayments'));
    }
}
