<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function servicePage(){
        $services = Service::all();
        $serviceCount = Service::where('id','>',0)->count();
        return view('serviceedit',array('services'=>$services,'serviceCount'=>$serviceCount));
    }

    public function postService(Request $request){
        $validateData = $request->validate(
            [
                'head'=>'required|string',
                'commenthead'=>'required|string',
                'comment'=>'required|string',
            ]
        );
        // Kayıt İşlemleri
        $service = new Service();
        $service->head = $request->head;
        $service->commenthead = $request->commenthead;
        $service->comment = $request->comment;
        $service->save();
        return back();
    }

    public function serviceHomePage(){
        $services = Service::all();
        $serviceCount = Service::where('id','>',0)->count();
        return view('service',array('services'=>$services,'serviceCount'=>$serviceCount));
    }
}
