<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name' => 'John Doe',
            'phone' => '4334442222',
            'address' => '30 Bloor St.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('contacts')->insert([
            'name' => 'Jane Doe',
            'phone' => '4334442333',
            'address' => '50 Bloor St.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('contacts')->insert([
            'name' => 'Michael Porter',
            'phone' => '4334444444',
            'address' => '30 King St.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('contacts')->insert([
            'name' => 'Dan Brown',
            'phone' => '4334446666',
            'address' => '60 Bloor St.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('contacts')->insert([
            'name' => 'Donald Trump',
            'phone' => '4334447777',
            'address' => '120 Bloor St.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('contacts')->insert([
            'name' => 'Kim Young',
            'phone' => '4445555666',
            'address' => '60 Queen St.',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
