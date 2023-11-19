<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Logo;
use App\Models\User;
use App\Models\Prefer; 
use App\Models\About;
use App\Models\Category;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use session;
class FrontendController extends Controller
{
    //
    public function index(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['category'] = Category::latest()->get();
        return view('frontend.index', $data);
    }

    /* user login */
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


    /* user login */


    /*designer login*/

    public function designer_register(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['prefer'] = Prefer::latest()->get();
        return view('frontend.designer.register', $data);
    }

    public function designer_login(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['prefer'] = Prefer::latest()->get();
        return view('frontend.designer.register', $data);
    }

    /* designer login */

    public function designer_profile_update(Request $request){
        
    }


    public function about(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        return view('frontend.about', $data);
    }
}
