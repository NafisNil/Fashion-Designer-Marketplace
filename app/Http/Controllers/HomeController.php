<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    //
    public function all_designer(){
        $user = User::where('role', 'designer')->get();
        return view('backend.designer.index', compact('user'));
    }

    
}
