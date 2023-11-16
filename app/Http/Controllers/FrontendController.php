<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FrontendController extends Controller
{
    //
    public function index(){
        $data['contact'] = Contact::first();
        return view('frontend.index', $data);
    }
}
