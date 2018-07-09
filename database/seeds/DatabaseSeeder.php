<?php

use Illuminate\Database\Seeder;
use App\cursos;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_usuarios')->insert([
            'tipo' => 'Profesor',
        ]);

        DB::table('tipo_usuarios')->insert([
            'tipo' => 'Estudiante',
        ]);

        DB::table('tipo_usuarios')->insert([
            'tipo' => 'Administrador',
        ]);

        DB::table('users')->insert([
            'tipoUsuario_id' => '3',
            'nombre' => 'Administrador',
            'apellido' => 'Administrador',
            'cedula' => '1',
            'email' => 'administrador@gmail.com',
            'password' => Hash::make('administrador'),
        ]);

        for($i = 0; $i<200; $i++){
            cursos::create([
                'nombre' => 'Matematicas '.($i+1),
                'Descripcion' => 'ESTA MIERDA ES UY ARRECHA Y NO SE QUE PONER '.($i+2),
                'Fecha_Inicio' => '2018-07-01 22:21:30',
                'Fecha_Fin' => '2018-07-01 22:21:30',
                'costo' => '2000',
            ]);
        }
    }
}
