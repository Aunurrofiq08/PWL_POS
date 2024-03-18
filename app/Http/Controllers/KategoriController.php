<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use Illuminate\Http\Request;
use app\Models\KategoriModel;


class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create()
    {
        return view('kategori.create');
    }
    public function store(Request $request)
    {
    KategoriModel::create([
        'Kategori_kode' => $request->kodeKategori,
        'Kategori_nama' => $request->namaKategori,
    ]);
    return redirect('/kategori');
}


    // public function index()
    // {
    //     // $data = [
    //     //     'kategori_kode' => 'SNK',
    //     //     'kategori_nama' => 'Snack/Makanan Ringan',
    //     //     'created_at' => now(),
    //     // ];
    //     // DB::table('m_kategori')->insert($data);
    //     // return 'Insert data baru berhasil';



    //     // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
    //     // return 'Update data berhasil. Jumlah data yang di update: ' . $row . ' baris';

    //     $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //     return 'Delete data berhasil. Jumlah data yang di delete: ' . $row . ' baris';

    // }
}
