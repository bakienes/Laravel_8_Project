<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;

class PriceController extends Controller
{
    public function pricePage(){
        $prices = Price::all();
        $priceCount = Price::where('id','>',0)->count();
        return view('priceedit',array('prices'=>$prices,'priceCount'=>$priceCount));
    }

    public function postprice(Request $request){
        $validateData = $request->validate(
            [
                'head'=>'required|string',
                'commenthead'=>'required|string',
                'price'=>'required|string',
                'comment'=>'required|string',
            ]
        );
        // Kayıt İşlemleri
        $price = new Price();
        $price->head = $request->head;
        $price->commenthead = $request->commenthead;
        $price->price = $request->price;
        $price->comment = $request->comment;
        $price->save();
        return back();
    }

    public function priceHomePage(){
        $prices = Price::all();
        $priceCount = Price::where('id','>',0)->count();
        return view('price',array('prices'=>$prices,'priceCount'=>$priceCount));
    }
}
