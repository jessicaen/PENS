<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KFSales;

class KFSalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        KFSales::create([
            'Nama_Produk' => 'HARNAL OCAS 0.4MG TAB@30 BPJS',
            'Nama_Bisnis_Manager' => 'UNIT BISNIS LAMPUNG',
            'Provinsi' => 'LAMPUNG',
            'Qty_Sales' => '18',
            'Satuan' => 'TAB',
            'Tanggal_Upload' => '2021-06-10',
        ]);
        KFSales::create([
            'Nama_Produk' => 'HARNAL OCAS 0.4MG TAB@30 BPJS',
            'Nama_Bisnis_Manager' => 'UNIT BISNIS KARAWANG',
            'Provinsi' => 'JAWA BARAT',
            'Qty_Sales' => '5',
            'Satuan' => 'TAB',
            'Tanggal_Upload' => '2021-06-10',
            ]);
        KFSales::create([
            'Nama_Produk' => 'INSULIN NOVORAPID FLEXPEN BPJS',
            'Nama_Bisnis_Manager' => 'UNIT BISNIS MEDAN',
            'Provinsi' => 'SUMATERA UTARA',
            'Qty_Sales' => '52',
            'Satuan' => 'AMP',
            'Tanggal_Upload' => '2021-06-10',
            ]);
    }
}
