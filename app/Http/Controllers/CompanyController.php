<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function downloadApps(){
        return view('front.company.download-apps');
    }
    public function aboutUs(){
        return view('front.company.about-us');
    }
    public function contactUs(){
        return view('front.company.contact');
    }
}
