<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
    return view("page.home");
    }

    public function project(){
        return view("page.project");
    }

    public function education(){
        return view("page.education");
    }

    public function contact(){
        return view("page.contact");
    }


    public function about(){
        return view("page.about");
    }


}
