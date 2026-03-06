<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            ['penjualan_id'=>1,'user_id'=>3,'pembeli'=>'Budi','penjualan_tanggal'=>now()],
            ['penjualan_id'=>2,'user_id'=>3,'pembeli'=>'Siti','penjualan_tanggal'=>now()],
            ['penjualan_id'=>3,'user_id'=>3,'pembeli'=>'Andi','penjualan_tanggal'=>now()],
            ['penjualan_id'=>4,'user_id'=>3,'pembeli'=>'Rina','penjualan_tanggal'=>now()],
            ['penjualan_id'=>5,'user_id'=>3,'pembeli'=>'Dewi','penjualan_tanggal'=>now()],
            ['penjualan_id'=>6,'user_id'=>3,'pembeli'=>'Agus','penjualan_tanggal'=>now()],
            ['penjualan_id'=>7,'user_id'=>3,'pembeli'=>'Lina','penjualan_tanggal'=>now()],
            ['penjualan_id'=>8,'user_id'=>3,'pembeli'=>'Rudi','penjualan_tanggal'=>now()],
            ['penjualan_id'=>9,'user_id'=>3,'pembeli'=>'Dani','penjualan_tanggal'=>now()],
            ['penjualan_id'=>10,'user_id'=>3,'pembeli'=>'Putri','penjualan_tanggal'=>now()],
        ]);
    }
}
