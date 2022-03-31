<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\DashboardRequest;
use App\Models\Hall;
use App\Traits\WeddingTrait;


class DashboardController extends Controller
{
    use WeddingTrait;
    public function index(){
        $halls = Hall::select('id','name', 'master_img', 'desc', 'price', 'actual_price')->paginate(pagination_count);
        return view('admin.dashboard', compact('halls'));
    }
    public function create(){
        return view('admin.create');
    }
    public function store(DashboardRequest $request){
        try {
            //validation external
            // save photo in folder
            $file_name = $this->saveFile($request->img, "img/halls");
            // insert into db
            $halls = Hall::create([
                "name" => $request->name,
                "desc" => $request->desc,
                "master_img" => $file_name,
                'price' => $request->price,
                'actual_price' => $request->actual_price,

            ]);
            if(!$halls){
                return redirect()->route('admin.create')->with('error', 'can\'t save in db');
            }
            return redirect()->route('dashboard')->with('success', 'the hall is saved successfully');

        } catch (\Exception $ex) {
            return redirect()->route('admin.create')->with('error', 'please try again later');
        }
    }
    public function edit($id){
        try{
            $hall= Hall::find($id);
            if(!$hall){
                return redirect()->route('dashboard')->with('error', 'this hall is not exists');
            }
            return view('admin.edit', compact('hall'));
        }catch(\Exception $ex){
            return redirect()->route('dashboard')->with('error', 'please try again later');
        }
    }
    public function update(DashboardRequest $request, $id){
        try{
            $hall= Hall::find($id);
            if(!$hall){
                return redirect()->route('dashboard')->with('error', 'this hall is not exists');
            }
            //validation external
            // save photo in folder
            if($request->has('img')){
                $file_name = $this->saveFile($request->img, "img/halls");
                $hall->update([
                    'master_img'=> $file_name
                ]);
            }
            // insert into db
            $data = $request->except('id', 'master_img','name');
            $hall->update($data);
            //return with success
            return redirect()->route('dashboard')->with('success', 'this hall is updated successfuly');
        }catch(\Exception $ex){
            return redirect()->route('admin.edit')->with('error', 'please try again later');
        }
    }
    public function delete($id){
        try{
            $hall = Hall::find($id);
            if(!$hall){
                return redirect()->route('dashboard')->with('error', 'this hall is not exists');
            }
            $hall->delete();
            return redirect()->route('dashboard')->with('success', 'this hall is deleted successfuly');

        }catch(\Exception $ex){
            return redirect()->route('dashboard')->with('error', 'please try again later');
        }

    }
    public function show($id){
        try{
            $hall = Hall::find($id);
            if(!$hall){
                return redirect()->route('dashboard')->with('error', 'this hall is not exists');
            }
            return view('admin.show', compact('hall'));

        }catch(\Exception $ex){
            return redirect()->route('dashboard')->with('error', 'please try again later');
        }

    }
}
