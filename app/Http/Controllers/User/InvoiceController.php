<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Endpayment;


class InvoiceController extends Controller
{
    public function index(){

        $invoices = Endpayment::select('id','payment_type','payment_brand','amount','status_payment','hall_id')->where('status_payment', '<>', null)->where('user_id', auth()->user()->id)->with(['hall' => function($q){
            $q->select('name','actual_price', 'id');
        }])->with(['invoce'])->paginate(pagination_count);
        return view('user.invoices', compact('invoices'));
    }
    public function show($id){
        try{
            $invoice = Endpayment::select('id','payment_type','payment_brand','amount','status_payment', 'hall_id')->where('status_payment', '<>', null)->with(['hall' => function($q){
                $q->select('name','actual_price','id');
            }])->with(['invoce'])->find($id);
            if(!$invoice){
                return redirect()->route('dashboard')->with('error', 'this invoice is not exists');
            }
            return view('user.show', compact('invoice'));

        }catch(\Exception $ex){
            return redirect()->route('dashboard')->with('error', 'please try again later');
        }
    }
}
