<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(roluserTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ClinicaTableSeeder::class);
        $this->call(AsignaturaTableSeeder::class);
        $this->call(AlumnoTableSeeder::class);
        $this->call(DocenteTableSeeder::class);
        $this->call(PacienteTableSeeder::class);
        $this->call(ProcedimientoTableSeeder::class);
    }
}
