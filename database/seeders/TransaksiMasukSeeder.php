<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransaksiMasukSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('transaksi_masuk')->insert([
            ['nama' => 'tes', 'email' => 'tes@gmail.com', 'nominal' => 500000, 'keterangan' => '', 'status' => '', 'created_at' => Carbon::now()],
            ['nama' => 'tes3', 'email' => 'tes3@gmail.com', 'nominal' => 1250000, 'keterangan' => '', 'status' => '', 'created_at' => Carbon::now()],
            ['nama' => 'tes', 'email' => 'tes3@gmail.com', 'nominal' => 1250000, 'keterangan' => 'tes', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'tes', 'email' => 'tes@gmail.com', 'nominal' => 1254000, 'keterangan' => 'tes', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'tes', 'email' => 'tes@gmail.com', 'nominal' => 12345000, 'keterangan' => 'tes', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'tes', 'email' => 'tes@gmail.com', 'nominal' => 12500000, 'keterangan' => 'tes', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'tes', 'email' => 'tes@gmail.com', 'nominal' => 12500000, 'keterangan' => 'tes', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'tes123', 'email' => 'tes@gmail.com', 'nominal' => 12500000, 'keterangan' => 'tes', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'apip', 'email' => 'apip@gmail.com', 'nominal' => 1250000, 'keterangan' => 'percobaan', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'apip', 'email' => 'apip@gmail.com', 'nominal' => 12500000, 'keterangan' => 'percobaan 2', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'apip', 'email' => 'apip@gmail.com', 'nominal' => 12500000, 'keterangan' => 'percobaan 3', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'apip', 'email' => 'apip@gmail.com', 'nominal' => 12500000, 'keterangan' => 'percobaan 3', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'apip ganteng', 'email' => 'apip@gmail.com', 'nominal' => 12500000, 'keterangan' => 'apip sangat gantenk', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'apip ganteng', 'email' => 'apip@gmail.com', 'nominal' => 12500000, 'keterangan' => 'apip sangat gantenk', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'pip', 'email' => 'pipgmaing@gmail.com', 'nominal' => 12500000, 'keterangan' => 'tes', 'status' => 'Selesai', 'created_at' => Carbon::now()],
            ['nama' => 'pip', 'email' => 'pipgmaing@gmail.com', 'nominal' => 12500000, 'keterangan' => 'tes', 'status' => 'Selesai', 'created_at' => Carbon::now()],
        ]);
    }
}
