<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin;

class UserAuth extends Controller
{
    function userLogin(Request $req){
        $data = $req->input();
        $req->session()->put('user',$data['user']);
        return redirect('adminpanel');
    }
}
