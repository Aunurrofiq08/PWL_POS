<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function index($id, $name) {
        // return view('user')
        //     ->with('id', $id)
        //     ->with('name', $name);
        public function index()
        {

            // $data = [
            //     'level_id' => 2,
            //     'username' => 'manager tiga',
            //     'nama' => 'manager 3',
            //     'password' => Hash::make('12345')

            // ];
            // UserModel::create($data);


            // $user = UserModel::all();
            // return view('user', ['data' => $user]);

            // $user=UserModel::find(1);
            // return view('user',['data' => $user]);

            // $user=UserModel::where('level_id', 1 );
            // return view('user',['data' => $user]);

            // $user=UserModel::firstwhere('level_id', 1 );
            // return view('user',['data' => $user]);

            // $user=UserModel::findOr(1,['username','nama'],function(){abort(404);
            // });
            // return view('user',['data' => $user]);

            // $user=UserModel::findOr(20,['username','nama'],function(){abort(404);
            // });
            // return view('user',['data' => $user]);

            // $user=UserModel::findOrFail(1);
            // return view ('user',['data' => $user]);
            
            // $user = UserModel::where('username','manager9')->firstOrFail();
            // return view('user',['data' => $user]);
        }
}
