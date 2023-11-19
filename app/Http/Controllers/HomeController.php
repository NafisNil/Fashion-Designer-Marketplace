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

    public function designer_edit(User $user){
        dd($user);
    }

    public function approve_designer($id){
      //  dd('designer');
        $user = User::find($id);
        $user->approve = 1;
        $user->save();
         return redirect()->back()->with('success', 'User has been approved!');
    }

    public function disapprove_designer($id){
        $user = User::find($id);
        $user->approve = 0;
        $user->save();
         return redirect()->back()->with('success', 'User has been disapproved!');
    }

}
