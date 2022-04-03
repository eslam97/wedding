<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Endpayment;
use App\Models\User;
use App\Models\Team;
use App\Models\Invoce;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $teams = Team::get();
        $endpayments = Endpayment::with(['hall' => function($q){
            $q->select('name', 'price', 'actual_price', 'id');
        }])->with(['user' => function($q){
            $q->select('id', 'first_name', 'last_name', 'email');
        }])->with(['details' =>function($q){
            $q->select('address','phone', 'id');
        }])->paginate(pagination_count);
        return view('admin.payment', compact('endpayments', 'teams'));

    }
    public function changeStatus($id){
        try{
            $endpayment = Endpayment::find($id);
            if(!$endpayment){
                return redirect()->route('payment')->with('error', 'this payment is not exists');
            }

            $endpayment->update([
                'status_payment' => 1,
            ]);
            $endpayment->with(['hall' => function($q){
                $q->select('name','id');
            }])->first();
            $invoice = Invoce::create([
                'name' => time().$endpayment->hall->name,
                'numberofinvoce' => time(). $endpayment->id,
                'endpayment_id' => $endpayment->id
            ]);
            if($invoice){
                return redirect()->route('payment')->with('success', 'this payment is successfuly approved');
            }
            return redirect()->route('payment')->with('error', 'this payment is has error');

        }catch(\Exception $ex){
            return $ex;
            return redirect()->route('payment')->with('error', 'please try again later');
        }
    }
    public function changeStatusRefuse($id){
        try{
            $endpayment = Endpayment::find($id);
            if(!$endpayment){
                return redirect()->route('payment')->with('error', 'this payment is not exists');
            }
            $endpayment->update(['status_payment' => 0]);
            $endpayment->with(['hall' => function($q){
                $q->select('name','id');
            }])->first();
            $invoice = Invoce::create([
                'name' => time().$endpayment->hall->name,
                'numberofinvoce' => time(). $endpayment->id,
                'endpayment_id' => $endpayment->id
            ]);
            if($invoice){
                return redirect()->route('payment')->with('success', 'this payment is successfuly Rejected');
            }
            return redirect()->route('payment')->with('error', 'this payment is has error');

        }catch(\Exception $ex){
            return redirect()->route('payment')->with('error', 'please try again later');
        }
    }
        public function destroy($id){
        try{
            $endpayment = Endpayment::find($id);
            if(!$endpayment){
                return redirect()->route('payment')->with('error', 'this payment is not exists');
            }
            $endpayment->details()->delete();
            $endpayment->invoce()->delete();
            $endpayment->delete();

            return redirect()->route('payment')->with('success', 'this payment is deleted successfuly');

        }catch(\Exception $ex){
            return $ex;
            //return redirect()->route('payment')->with('error', 'please try again later');
        }


    }
    
}
