<?php

use Illuminate\Database\Seeder;

class HouseholderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $householder = factory(App\Models\Householder::class,229)->create();
    }
}
