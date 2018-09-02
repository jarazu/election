<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    // public function show(Request $request)
    // {
    //     //echo "Start with db";
    //      //$result = DB::insert("insert into test (id, name, email) values(?,?,?)",[5,'Razu1','razu1@gmail.com']);
    //      //$result = DB::update('update test set name = "Razu change" where name = ?', ['Razu1']);
    //     // $result = DB::delete('delete from test where name = ?', ['Razu']);
    //     $result = DB::select('select * from test ');
    //     print_r($result);
    //     //echo $result;
    //   //  echo "Test controller";
    //    //  print_r($users);
    //     //  $request->validate([
    //     //      'name'=> 'required | min:3 | numeric',
    //     //      'password'=> 'required | max:5'
    //     //  ]);
    //     //  echo "Form is submitted";
    //     // return " hello show";
    //    // return view('user.profile', ['user' => User::findOrFail($id)]);
    // }

     public function store(Request $request)
    //public function store()
    {
       // $users = DB::table('test')->paginate(3);
       // return view('page', ['data' => $users]);
      //  print_r($request->input());
       $result = DB::insert("insert into test (id, name, email, token) values(?,?,?,?)",[null, $request->input('name'),$request->input('email'), sha1(time())]);
       echo $result;
       //print_r($result);
    }

    public function logs(Request $request)
    {
        $result = DB::select('select * from test ');
        if(count($data)){
            print_r($result);
        }else{
            echo "error";
        }
        
       // 
    }
}