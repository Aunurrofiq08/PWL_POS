<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_usermodel;
use illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator =Validator::make($request->all(),[
            'validator' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'level_id' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(),422);
        }

        $user = m_usermodel::create([
        'username' => $request->username,
        'nama' =>$request->nama,
        'password'  => bcrypt($request->password),
        'level_id' => $request->level_id,
        ]);

        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user,
            ],201);
        }
            return response()->json([
                'success' => false,
            ],409);
            # code...

    }

}