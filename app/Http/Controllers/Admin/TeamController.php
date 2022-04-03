<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\TeamRequest;
use App\Models\Team;


class TeamController extends Controller
{
    public function index(){
        $teams = Team::select('id','name')->paginate(pagination_count);
        return view('admin.teams', compact('teams'));
    }
    public function create(){
        return view('admin.teamcreate');
    }
    public function store(TeamRequest $request){
        try {
            //validation external
            // insert into db 
            $teams = Team::create([
                "name" => $request->name,
                ]);
            if(!$teams){
                return redirect()->route('create.team')->with('error', 'can\'t save in db');
            }
            return redirect()->route('team')->with('success', 'the team is saved successfully');

        } catch (\Exception $ex) {
            return $ex;
            //return redirect()->route('create.team')->with('error', 'please try again later');
        }
    }
    public function edit($id){
        try{
            $team= Team::find($id);
            if(!$team){
                return redirect()->route('team')->with('error', 'this team is not exists');
            }
            return view('admin.editteam', compact('team'));
        }catch(\Exception $ex){
            return redirect()->route('team')->with('error', 'please try again later');
        }
    }
    public function update(TeamRequest $request, $id){
        try{
            $team= team::find($id);
            if(!$team){
                return redirect()->route('team')->with('error', 'this team is not exists');
            }
            //validation external
            // insert into db 
            $team->update([
                'name' => $request->name
            ]);
            //return with success
            return redirect()->route('team')->with('success', 'this team is updated successfuly');
        }catch(\Exception $ex){
            return redirect()->route('edit.team')->with('error', 'please try again later');
        }
    }
    public function delete($id){
        try{
            $team = Team::find($id);
            if(!$team){
                return redirect()->route('team')->with('error', 'this team is not exists');
            }
            $team->delete();
            return redirect()->route('team')->with('success', 'this team is deleted successfuly');

        }catch(\Exception $ex){
            return redirect()->route('team')->with('error', 'please try again later');
        }
    }
}
