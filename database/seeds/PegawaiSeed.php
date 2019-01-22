<?php

use Illuminate\Database\Seeder;

class PegawaiSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory('App\Pegawai', 10)->create();
    }
}
