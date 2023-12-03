<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Logo;
use App\Models\User;
use App\Models\Prefer; 
use App\Models\About;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use session;
use Auth;
class FrontendController extends Controller
{
    //
    public function index(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['category'] = Category::latest()->get();
        $data['partner'] = Partner::latest()->get();
        $data['slider'] = Slider::latest()->get();
        $data['product'] = Product::latest()->get();
        $data['designer'] = User::where('role','designer')->where('approve', 1)->limit(10)->get();
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

    public function single_designer($id){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['designer'] = User::where('id', $id)->first();
        return view('frontend.designer.single_designer', $data );
    }

    /* designer login */

   


    public function about(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        return view('frontend.about', $data);
    }

    public function shop(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        $data['designer'] = User::where('role','designer')->where('approve', 1)->latest()->paginate(10);
        $data['category'] = Category::all();
        return view('frontend.designer.shop', $data);
    }

    public function contact(){
        $data['contact'] = Contact::first();
        $data['logo'] = Logo::first();
        return view('frontend.contact', $data);
    }

    public function filterProducts(Request $request){
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');

        $products = User::where('min_price', '>=', $minPrice)
            ->where('min_price', '<=', $maxPrice)
            ->get();

        return response()->json($products);
    }
}
