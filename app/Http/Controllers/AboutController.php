<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function aboutPage(){
        $abouts = About::all();
        $aboutCount = About::where('id','>',0)->count();
        return view('about',array('abouts'=>$abouts,'aboutCount'=>$aboutCount));
    }

    public function postAbout(Request $request){
        $validateData = $request->validate(
            [
                'name'=>'required|string',
                'author'=>'required|string',
                'comment'=>'required|string',
            ]
        );
        // Kayıt İşlemleri
        $about = new About();
        $about->name = $request->name;
        $about->author = $request->author;
        $about->comment = $request->comment;
        $about->save();
        return back();
    }
}
