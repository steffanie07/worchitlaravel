<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Input;
class OtherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */




   



   public function profile()
    {
    	    

        return view('profile');
    }



   public function details()
    {
        return view('details');
    }



     public function catalog()
    {

        return view('catalog');
    }



   public function login()
    {

        return view('login');
    }

       public function signin()
    {

        return view('register');
    }


 public function postregister(Request $request)
    {

        $response = Http::post('https://testv2.worchit.com/api/auth/email/sign-up', [
    'name' => $request->input('name'),
    'email' =>  $request->input('email'),
    'password' => $request->input('password'),

]);


   return redirect('/profile');  

    }


public function postlogin(Request $request)
    {

        $response = Http::post('https://testv2.worchit.com/api/auth/email/login', [
 
    'email' =>  $request->input('email'),
    'password' => $request->input('password'),

]);


   return redirect('/profile');  

    }

    public function logout(Request $request) {
  Auth::logout();
  return redirect('/');
}


}