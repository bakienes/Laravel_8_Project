<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function BlogPage(){
        $blogs = Blog::all();
        $blogCount = Blog::where('id','>',0)->count();
        return view('blogedit',array('blogs'=>$blogs,'blogCount'=>$blogCount));
    }

    public function postBlog(Request $request){
        $validateData = $request->validate(
            [
                'head'=>'required|string',
                'commenthead'=>'required|string',
                'author'=>'required|string',
                'comment'=>'required|string',
            ]
        );
        // Kayıt İşlemleri
        $blog = new Blog();
        $blog->head = $request->head;
        $blog->commenthead = $request->commenthead;
        $blog->author = $request->author;
        $blog->comment = $request->comment;
        $blog->save();
        return back();
    }

    public function blogHomePage(){
        $blogs = Blog::all();
        $blogCount = Blog::where('id','>',0)->count();
        return view('blog',array('blogs'=>$blogs,'blogCount'=>$blogCount));
    }
}
