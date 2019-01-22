<?php

use Illuminate\Database\Seeder;
use App\Kriteria;
use Carbon\Carbon;

class KriteriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now('utc')->toDateTimeString();

        $data = array(
            array(
                'kriteria' => 'Pendidikan', 
                'bobot' => 7,
                'jenis' => 'benefit',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'kriteria' => 'Usia',
                'bobot' => 5,
                'jenis' => 'cost',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            array(
                'kriteria' => 'Pengalaman',
                'bobot' => 8,
                'jenis' => 'cost',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        );

        Kriteria::insert($data);
    }
}
