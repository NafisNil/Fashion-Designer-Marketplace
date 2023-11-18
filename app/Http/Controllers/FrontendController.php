<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Logo;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use session;
class FrontendController extends Controller
{
    //
    public function index(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        return view('frontend.index', $data);
    }

    public function user_register(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        return view('frontend.user.register', $data);
    }

    public function user_login(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        return view('frontend.user.register', $data);
    }

    public function user_login_store(Request $request){
        
     /*   $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required'],
        ]);*/
        $email = $request->email;
        $password = $request->password;
      
        $userExists = User::where('email', $email)->exists();
        
        if ($userExists) {
            $user = User::where('email', $email)->first();
        
            if (Hash::check($password, $user->password)) {
                # code...
                $name = $user->name;
                $request->session()->put('name', $name);
                 return redirect()->route('index');
            } else {
                return redirect()->back()->with('error', 'Wrong Credentials! Please try again!');
            }
        } else {
            return redirect()->back()->with('error', 'User with that email address does not exist!');
        }

    }
}
