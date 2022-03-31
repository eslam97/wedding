<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hall;
use App\Models\Endpayment;



class OfferController extends Controller
{
    public function index(){

        $halls = Hall::select('id','name', 'master_img', 'desc', 'price')->paginate(pagination_count);
        return view('user.offers', compact('halls'));
    }
    public function show($id){
        try{
            $hall = Hall::find($id);
            if(!$hall){
                return redirect()->route('offer.all')->with('error', 'this hall is not exists');
            }
            if (request('id') && request('resourcePath')) {
                $payment_status = $this->getPaymentStatus(request('id'), request('resourcePath'));
                if (isset($payment_status['id'])) { //success payment id -> transaction bank id
                     $showSuccessPaymentMessage = true;
                     Endpayment::create([
                        'payment_status_id'=> $payment_status['id'],
                        'payment_type' => $payment_status['paymentType'],
                        'payment_brand' => $payment_status['paymentBrand'],
                        'amount' => $payment_status['amount'],
                        'desc' => $payment_status['result']['description'],
                        'user_id' => auth()->user()->id,
                        'hall_id' =>$hall->id,
                         'status_payment' => null // pending
                    ]);

                     //save order in orders table with transaction id  = $payment_status['id']
                   return view('user.details',compact('hall'))-> with(['success' =>  'payment is success']);
               } else {
                   $showFailPaymentMessage = true;
                    return view('user.details',compact('hall'))-> with(['error'  => 'faild payment']);
               }
            }
            return view('user.details', compact('hall'));
        }catch(\Exception $ex){
            return redirect()->route('user.details')->with('error', 'please try again later');

        }

    }


    
    private function getPaymentStatus($id, $resourcePath){
        $url = "https://eu-test.oppwa.com/";
        $url .= $resourcePath ;
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                       'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return json_decode($responseData, true);
    }
}
