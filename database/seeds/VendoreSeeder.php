<?php

use Illuminate\Database\Seeder;

class VendoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;

        factory(App\Vendor::class, $limit)->create();
    }
}
