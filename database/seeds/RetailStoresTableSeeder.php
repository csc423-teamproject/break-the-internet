<?php

use Illuminate\Database\Seeder;

class RetailStoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 10;

        factory(App\RetailStore::class, $limit)->create();
    }
}
