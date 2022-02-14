<?php

namespace App\Http\Controllers\Client\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\OfferRequest;
use App\Models\v1\Offer;
use Illuminate\Http\Request;

class OfferClientController extends Controller
{
    public function store(OfferRequest $request){
        $offer = new Offer();
        $offer->standart_id = $request['standart_id'];
        $offer->text= $request['text'];
        $offer->phone_number = $request['phone_number'];
        $offer->save();
        if ($offer==true){
            return redirect()->route('standart1',$request->standart_id);
        }
    }
}
