<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function services(){
        return view('frontend.services.services');

    }
    public function pricing(){
        return view('frontend.pricing.pricing');


    }
    public function freetrail(){
        return view('frontend.freeTrail.free_trail');

    }
    public function portfolio(){
        return view('frontend.portfolio.portfolio');
    }

    public function contact(){

        return view('frontend.contact.contact');
    }

    public function about(){
        return view('frontend.about.about');

    }
}
