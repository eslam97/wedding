<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;


class WebController extends Controller
{
    public function about()
    {
        return view('user.about');
    }
        public function services()
    {
        return view('user.services');
    }
    public function portfolio()
    {
        return view('user.portfolio');
    }
    public function contact()
    {
        return view('user.offers');
    }
    public function webblog()
    {
        $blogs = Blog::select('name','number','desc', 'img')->paginate(pagination_count);
        return view('user.blog',compact('blogs'));
    }
        public function faq(){
        return view('user.services');
    }
}
