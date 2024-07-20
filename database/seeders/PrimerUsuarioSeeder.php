<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PrimerUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //
       $contraseña = "12345678abc";

       DB::statement('SET FOREIGN_KEY_CHECKS = 0;');


       $user = new User([
           "name" => "NO BORRAR - Super Administrador",
           "email" => "admin@gmail.com",
           "password" => Hash::make($contraseña),
           "admin" => "1",
           "status" =>"1",
       ]);
       $user->saveOrFail();

       DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
