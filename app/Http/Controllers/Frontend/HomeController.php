<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }

    public function about(){
        return view('frontend.about');
    }

    public function almayeeyah(){
        return view('frontend.almayeeyah');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function curriculum(){
        return view('frontend.curriculum');
    }

    public function ethos(){
        return view('frontend.ethos');
    }

    public function freestruc(){
        return view('frontend.freestruc');
    }

    public function guide(){
        return view('frontend.guide');
    }

    public function class(){
        return view('frontend.ourclasses');
    }

    public function partnerPage(){
        return view('frontend.partnerpage');
    }

    public function rdSection(){
        return view('frontend.rd');
    }

    public function research(){
        return view('frontend.research');
    }

    public function schoolclub(){
        return view('frontend.schoolclub');
    }

    public function weekPOP(){
        return view('frontend.week-pop');
    }

    public function weekend(){
        return view('frontend.weekend');
    }
}
