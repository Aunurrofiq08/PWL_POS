<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\m_barangModel;

class BarangController extends Controller
{
    public function index()
    {
        return m_barangModel::all();
    }
    public function store(Request $request)
    {
        $barang = m_barangmodel::create($request->all());
        return response()->json ($barang,201);
    }

    public function show(m_barangModel $barang)
    {
        return m_barangModel::find($barang);
    }
    public function update(Request $request,m_barangModel $barang)
    {
        $barang->update($request->all());
        return m_barangModel::find($barang);

    }
    public function destroy(m_barangModel $user)
    {
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}
