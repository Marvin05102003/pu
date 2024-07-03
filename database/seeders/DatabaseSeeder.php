<?php

namespace Database\Seeders;
use App\Models\Grupo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('docente')->insert([
            'nombre' => 'admin',
            'apellido' => 'admin',
            'email' => 'profe@admin.com',
            'password' => Hash::make('admin'),
        ]);
    

    


        DB::table('estudiante')->insert([
            'nombre' => 'estudiante',
            'apellido' => 'admin',
            'email' => 'estudiante@admin.com',
            'pin' =>('123456'),
        ]);

    }

}
