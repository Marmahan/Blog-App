<?php

namespace App\Http\Controllers;

//to handle requests
use Illuminate\Http\Request;

//controllers must extens Controller
class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        return view('pages.services');
    }

}
