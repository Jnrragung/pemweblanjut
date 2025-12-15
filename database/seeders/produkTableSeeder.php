<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\Database\QueryException;
use App\Models\produk;
class produkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $brg = new produk();
    $brg->nama_produk ='Indomie Goreng';
    $brg->kategori = 1;
    $brg->harga_satuan = 100;
    $brg->stok = 100;
    $brg->satuan = 3000;
    $brg->created_at = now();
    $brg->updated_at =now();
    $brg->save();
    }
}
