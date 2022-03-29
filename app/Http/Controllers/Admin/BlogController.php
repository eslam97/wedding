<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\Admin\BlogRequest;
use App\Traits\WeddingTrait;



class BlogController extends Controller
{
    use WeddingTrait;
    public function index(){
        $blogs = Blog::select('id','name', 'img', 'desc')->paginate(pagination_count);
        return view('admin.blogs', compact('blogs'));
    }
    public function create(){
        return view('admin.blogCreate');
    }
    public function store(BlogRequest $request){
        try {
            //validation external
            // save photo in folder
            $file_name = $this->saveFile($request->img, "img/blogs");
            // insert into db 
            $blogs = Blog::create([
                "name" => auth()->user()->first_name,
                'number' => $request->number,
                "desc" => $request->desc,
                "img" => $file_name,
                ]);
            if(!$blogs){
                return redirect()->route('create.blog')->with('error', 'can\'t save in db');
            }
            return redirect()->route('blog')->with('success', 'the blog is saved successfully');

        } catch (\Exception $ex) {
            return redirect()->route('create.blog')->with('error', 'please try again later');
        }
    }
    public function edit($id){
        try{
            $blog= Blog::find($id);
            if(!$blog){
                return redirect()->route('blog')->with('error', 'this blog is not exists');
            }
            return view('admin.editBlog', compact('blog'));
        }catch(\Exception $ex){
            return redirect()->route('blog')->with('error', 'please try again later');
        }
    }
    public function update(BlogRequest $request, $id){
        try{
            $blog= Blog::find($id);
            if(!$blog){
                return redirect()->route('blog')->with('error', 'this blog is not exists');
            }
            //validation external
            // save photo in folder
            if($request->has('img')){
                $file_name = $this->saveFile($request->img, "img/blogs");
                $blog->update([
                    'img'=> $file_name
                ]);
            }
            // insert into db 
            $data = $request->except('id', 'img');
            $blog->update($data);
            //return with success
            return redirect()->route('blog')->with('success', 'this blog is updated successfuly');
        }catch(\Exception $ex){
            return redirect()->route('edit.blog')->with('error', 'please try again later');
        }
    }
    public function delete($id){
        try{
            $blog = Blog::find($id);
            if(!$blog){
                return redirect()->route('blog')->with('error', 'this blog is not exists');
            }
            $blog->delete();
            return redirect()->route('blog')->with('success', 'this blog is deleted successfuly');

        }catch(\Exception $ex){
            return redirect()->route('blog')->with('error', 'please try again later');
        }

    }

}
