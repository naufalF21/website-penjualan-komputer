<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Transaction::factory(5)->create();

        // DB::table('items')->insert([
        //     [
        //         'transaction_id' => 1,
        //         'kode_barang' => 'VGAGT103025',
        //         'nama' => 'GALAX Geforce GT 1030 2GB DDR5',
        //         'harga_jual' => '1.230.000',
        //         'harga_beli' => '1.000.000',
        //         'stok' => '98',
        //         'kategori' => 'VGA'
        //     ],
        //     [
        //         'transaction_id' => 1,
        //         'kode_barang' => 'VGAGT71023',
        //         'nama' => 'GALAX GeForce GT 710 2GB DDR3',
        //         'harga_jual' => '1.230.000',
        //         'harga_beli' => '1.000.000',
        //         'stok' => '98',
        //         'kategori' => 'VGA'
        //     ],
        //     [
        //         'transaction_id' => 2,
        //         'kode_barang' => 'PROi3-13100F',
        //         'nama' => 'Intel Core i3-13100F 3.4GHz Up To 4.5GHz - Cache 12MB',
        //         'harga_jual' => '1.000.000',
        //         'harga_beli' => '500.000',
        //         'stok' => '98',
        //         'kategori' => 'VGA'
        //     ],

        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
