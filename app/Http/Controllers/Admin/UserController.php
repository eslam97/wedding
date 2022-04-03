<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(){
        $users = User::select('id','first_name', 'email', 'is_admin')->where('id', '<>', auth()->user()->id)->paginate(pagination_count);
        return view('admin.users', compact('users'));
    }
    public function changeUserStatus($id){
        try{
            $user = User::find($id);
            if(!$user){
                return redirect()->route('admin.users')->with('error', 'this user is not exists');
            }
            $status = $user->is_admin == 0? 1 : 0;
            $user->update(['is_admin' => $status]);
            return redirect()->route('admin.users')->with('success', 'this status is successfuly changed');

        }catch(\Exception $ex){
            return redirect()->route('admin.users')->with('error', 'please try again later');
        }
    }
    public function destroy($id){
        try{
            $user = User::find($id);
            if(!$user){
                return redirect()->route('admin.users')->with('error', 'this User is not exists');
            }
            $user->endpayment()->delete();
            $user->details()->delete();
            $user->delete();

            return redirect()->route('admin.users')->with('success', 'this user is deleted successfuly');

        }catch(\Exception $ex){
            return redirect()->route('admin.users')->with('error', 'please try again later');
        }


    }
}
