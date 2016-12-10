<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Log;
use DB;
use App\conductor;

class userController extends Controller {




    public function postSignUp( Request $request){

        $this->validate($request,[
            'ID'=>'required|unique:users',
            'first_name'=>'required|max:120',
            'password'=>'required|min:4'
        ]);

        $ID=$request['ID'];
        $first_name=$request['first_name'];
        $password=bcrypt($request['password']);

        $user=new user();
        $user->ID=$ID;
        $user->first_name=$first_name;
        $user->password=$password;

        $user->save();


        Auth::login($user);
        return redirect()->route('dashboard');

    }

    public function postSignIn(Request $request){

//        $u=$request['email'];
//        $pass=$request['password'];

        $this->validate($request,[
            'ID'=>'required',
            'password'=>'required'
        ]);

        if(DB::connection()->getDatabaseName())
        {
            echo "connected successfully to database ".DB::connection()->getDatabaseName();
            echo "                                   ";
        }

        $ID = $request['ID'];
        $pword = $request['password'];

        //return DB::select("select * from conductor");

        //DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        $conductor=new conductor();
      $conductor= DB::select("SELECT * FROM conductor WHERE ID = (?) AND password = (?)",[$ID,$pword]);
        //return $conductor;
      // $result =self::  mysql_query($SQL);
      // Log::info($result);




      //  $user = User::where('ID', '=', Input::get('ID')&& 'password','=',Input::get('password'))->first();
        if ($conductor == null) {
           $str= "password or ID is wrong,check again";
            //return view('welcome',compact($str));
            return redirect()->route('home');
        }

        else{
            //return 1;
            return redirect()->route('conductorPage');

        }

//        if((['email'=>$request['email'],'password'=>$request['password']])){
//            return redirect()->route('dashboard');
//        }



    }


    public function getLogout(){
        Auth::logout();
        return redirect()->route('home');
    }
}