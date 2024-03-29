<?php

namespace App\Models;

use Illuminate\Database\Eloquent\relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey = 'kategori_id';

    protected $fillable = ['kategori_kode','kategori_nama'];

    public function barang(): HasMany
    {
        return $this->HasMany(BarangModel::class,'barang_id' ,'barang_id');
    }
}
