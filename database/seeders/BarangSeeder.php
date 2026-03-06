<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            ['barang_id'=>1,'barang_kode'=>'BRG001','barang_nama'=>'Indomie','harga_beli'=>2500,'harga_jual'=>3500,'kategori_id'=>1,'supplier_id'=>1],
            ['barang_id'=>2,'barang_kode'=>'BRG002','barang_nama'=>'Beras 5kg','harga_beli'=>60000,'harga_jual'=>65000,'kategori_id'=>1,'supplier_id'=>1],
            ['barang_id'=>3,'barang_kode'=>'BRG003','barang_nama'=>'Aqua Botol','harga_beli'=>3000,'harga_jual'=>4000,'kategori_id'=>2,'supplier_id'=>2],
            ['barang_id'=>4,'barang_kode'=>'BRG004','barang_nama'=>'Teh Botol','harga_beli'=>3500,'harga_jual'=>4500,'kategori_id'=>2,'supplier_id'=>2],
            ['barang_id'=>5,'barang_kode'=>'BRG005','barang_nama'=>'Chitato','harga_beli'=>8000,'harga_jual'=>10000,'kategori_id'=>3,'supplier_id'=>1],
            ['barang_id'=>6,'barang_kode'=>'BRG006','barang_nama'=>'Oreo','harga_beli'=>7000,'harga_jual'=>9000,'kategori_id'=>3,'supplier_id'=>1],
            ['barang_id'=>7,'barang_kode'=>'BRG007','barang_nama'=>'Pulpen','harga_beli'=>2000,'harga_jual'=>3000,'kategori_id'=>4,'supplier_id'=>3],
            ['barang_id'=>8,'barang_kode'=>'BRG008','barang_nama'=>'Buku Tulis','harga_beli'=>3000,'harga_jual'=>4000,'kategori_id'=>4,'supplier_id'=>3],
            ['barang_id'=>9,'barang_kode'=>'BRG009','barang_nama'=>'Pensil','harga_beli'=>1500,'harga_jual'=>2500,'kategori_id'=>4,'supplier_id'=>3],
            ['barang_id'=>10,'barang_kode'=>'BRG010','barang_nama'=>'Lampu LED','harga_beli'=>15000,'harga_jual'=>20000,'kategori_id'=>5,'supplier_id'=>3],
            ['barang_id'=>11,'barang_kode'=>'BRG011','barang_nama'=>'Stop Kontak','harga_beli'=>12000,'harga_jual'=>16000,'kategori_id'=>5,'supplier_id'=>3],
            ['barang_id'=>12,'barang_kode'=>'BRG012','barang_nama'=>'Gula 1kg','harga_beli'=>12000,'harga_jual'=>15000,'kategori_id'=>1,'supplier_id'=>1],
            ['barang_id'=>13,'barang_kode'=>'BRG013','barang_nama'=>'Susu UHT','harga_beli'=>6000,'harga_jual'=>8000,'kategori_id'=>2,'supplier_id'=>2],
            ['barang_id'=>14,'barang_kode'=>'BRG014','barang_nama'=>'Taro','harga_beli'=>7000,'harga_jual'=>9000,'kategori_id'=>3,'supplier_id'=>1],
            ['barang_id'=>15,'barang_kode'=>'BRG015','barang_nama'=>'Charger HP','harga_beli'=>20000,'harga_jual'=>25000,'kategori_id'=>5,'supplier_id'=>3],
        ]);
    }
}
