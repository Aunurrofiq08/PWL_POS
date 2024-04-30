<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_userModel;

class UserController extends Controller
{
    public function index()
    {
        return m_userModel::all();
    }
    public function store(Request $request)
    {
        $user = m_usermodel::create([
            'username' => $request->username,
            'nama' =>$request->nama,
            'password'  => bcrypt($request->password),
            'level_id' => $request->level_id,
            ]);
        return response()->json ($user,201);
    }

    public function show(m_userModel $user)
    {
        return m_userModel::find($user);
    }
    public function update(Request $request,m_userModel $user)
    {
        if ($request->filled('password')) {
            $user->update(['password' => bcrypt($request->password)]);
            // $user->update(['nama' => $request->nama]);
        }
        $user->update($request->except('password'));
        return m_userModel::find($user);
    }
    public function destroy(m_userModel $user)
    {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}
