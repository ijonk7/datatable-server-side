<?php

use App\Pegawai;
use Illuminate\Database\Seeder;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pegawai::class, 100)->create();
    }
}
