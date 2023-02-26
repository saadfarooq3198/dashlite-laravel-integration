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

}
