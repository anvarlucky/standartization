<?php

namespace App\Http\Controllers\Client\Admin;

use App\Http\Controllers\Controller;
use App\Models\v1\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index(){
        $offers = Offer::all();
        return view('admin.offers.index',['offers'=> $offers]);
    }

}
