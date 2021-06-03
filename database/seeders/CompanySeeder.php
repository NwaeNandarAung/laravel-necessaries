<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'SCM',
            'postcode' => 'A123',
            'address' => 'No.111, Ban Road',
            'tel' => '09-879876578',
            'representative_name' => 'Mr. John',
            'industry' => 'Sia',
            'billing_name' => 'AAA',
            'billing_postcode' => 'B123',
            'billing_address' => 'Kanthi Road',
            'billing_tel' => '09-879876444',
        ]);
    }
}
