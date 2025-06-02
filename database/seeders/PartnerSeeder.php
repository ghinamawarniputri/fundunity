<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('partner')->insert([
            ['nama' => 'BnC Cookies', 'logo' => ''],
            ['nama' => 'UPI', 'logo' => ''],
            ['nama' => 'UIN', 'logo' => ''],
            ['nama' => 'Anugerah Cipta Arsitektur', 'logo' => ''],
            ['nama' => 'Sinai Adventure', 'logo' => ''],
        ]);
    }
}
