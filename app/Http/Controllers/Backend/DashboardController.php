<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index');
    }

    public function curriculm()
    {
        return view('backend.curriculum');
    }

    public function almayeeyah()
    {
        return view('backend.almayeeyah');
    }

    public function ethos(){
        return view('backend.ethos');
    }

    public function partnership(){
        return view('backend.partnership');
    }

    public function contact(){
        return view('backend.contact');
    }

    public function feeStructure(){
        return view('backend.fee');
    }

    public function footer(){
        return view('backend.footer');
    }

    public function weekPop(){
        return view('backend.week_pop');
    }

    public function research(){
        return view('backend.research');
    }

}
