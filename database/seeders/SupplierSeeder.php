<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          DB::table('m_supplier')->insert([
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT Sumber Pangan',
                'supplier_alamat' => 'Malang',
                'supplier_telp' => '081234567890'
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV Minuman Segar',
                'supplier_alamat' => 'Surabaya',
                'supplier_telp' => '082345678901'
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'PT Elektronik Jaya',
                'supplier_alamat' => 'Jakarta',
                'supplier_telp' => '083456789012'
            ]
        ]);
    }
}
