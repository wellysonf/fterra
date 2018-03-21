<?php

use Illuminate\Database\Seeder;

class FamilyMemberTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $householder = factory(App\Models\FamilyMember::class,700)->create();
    }
}
