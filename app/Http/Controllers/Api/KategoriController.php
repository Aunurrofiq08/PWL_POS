<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_kategoriModel;

class KategoriController extends Controller
{
    public function index()
    {
        return m_kategoriModel::all();
    }
    public function store(Request $request)
    {
        $kategori = m_kategoriModel::create($request->all());
        return response()->json ($kategori,201);
    }

    public function show(m_kategoriModel $kategori)
    {
        return m_kategoriModel::find($kategori);
    }
    public function update(Request $request,m_kategoriModel $kategori)
    {
        $kategori->update($request->all());
        return m_kategoriModel::find($kategori);
    }
    public function destroy(m_kategoriModel $user)
    {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}
