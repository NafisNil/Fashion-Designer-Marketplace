<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Logo;

class FrontendController extends Controller
{
    //
    public function index(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        return view('frontend.index', $data);
    }
}
