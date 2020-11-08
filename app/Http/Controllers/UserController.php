<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function viewProfile(){
        if(Auth::user()){
            $user=User::find(Auth::user()->id);
            if($user){
            //return view('user.viewProfile')->with($user);
             return view('user.viewProfile')->withUser($user);
           
           // return view('user.viewProfile')->withUser($user); // share user detail to view.
            }else {
                return redirect()->back();// it will automatically re-direct to back.
            }
        }else {
            return redirect()->back();// it will automatically re-direct to back.
        }
    }
    public function edit()
    {
        if(Auth::user()){
            $user=User::find(Auth::user()->id);
            if($user){
            return view('user.edit')->withUser($user); // share user detail to view.
            }else {
                return redirect()->back();// it will automatically re-direct to back.
            }
        }else {
            return redirect()->back();// it will automatically re-direct to back.
        }
        # code...
    }
     public function update(Request $request)
    {

        $user=User::find(Auth::user()->id); // get user
         if($user){
             $validate=null;
            // both email and name is required but if dont want to change there email than this condition will run
              if(Auth::user()->email===$request["email"]){
                $validate=$request->validate([
                 'name'=>'required|min:2',
                 'email'=>'required|email'
             ]);
              }else {
                // name and email both are required and email should be unique.not already use for any user.
                $validate=$request->validate([
                 'name'=>'required|min:2',
                 'email'=>'required|email|unique:users'
             ]);
        }
            if($validate){
            $user->name=$request["name"];
            $user->email=$request["email"];
            $user->save(); // update the user details
            $request->session()->flash('success','You detail have now been saved');
            return redirect()->back();
            }else {
                return redirect()->back();
            }

         }else {
             return redirect()->back();  // it will automatically re-direct to back.
         }
        # code...
    }
}
