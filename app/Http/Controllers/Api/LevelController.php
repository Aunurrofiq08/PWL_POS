<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_levelModel;

class LevelController extends Controller
{
    public function index()
    {
        return m_levelModel::all();
    }
    public function store(Request $request)
    {
        $level = m_levelModel::create($request->all());
        return response()->json ($level,201);
    }

    public function show(m_levelModel $level)
    {
        return m_levelModel::find($level);
    }
    public function update(Request $request,m_levelModel $level)
    {
        $level->update($request->all());
        return m_levelModel::find($level);
    }
    public function destroy(m_levelModel $user)
    {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}
