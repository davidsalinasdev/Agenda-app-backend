<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Administrador
        $user = new User();
        $user->nombres = "Joel_admin";
        $user->cargo = "Profesional 2";
        $user->user = "Admin";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Administrador';
        $user->estado = 'Habilitado';
        $user->save();

        // Administrador 2
        $user = new User();
        $user->nombres = "Joel_admin_2";
        $user->cargo = "Profesional 2";
        $user->user = "Admin_2";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Administrador';
        $user->estado = 'Habilitado';
        $user->save();

        // Funcionario_1
        $user = new User();
        $user->nombres = "David Funcionario_1";
        $user->cargo = "Gerente";
        $user->user = "funcionario_1";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Funcionario';
        $user->estado = 'Habilitado';
        $user->save();

        // Funcionario_2
        $user = new User();
        $user->nombres = "Raul Funcionario_2";
        $user->cargo = "Gerente";
        $user->user = "funcionario_2";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Funcionario';
        $user->estado = 'Habilitado';
        $user->save();

        // Funcionario_3
        $user = new User();
        $user->nombres = "Marce Funcionario_3";
        $user->cargo = "Gerente";
        $user->user = "funcionario_3";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Funcionario';
        $user->estado = 'Habilitado';
        $user->save();



        // Invitado
        $user = new User();
        $user->nombres = "Naomi Invitado";
        $user->cargo = "Gerente";
        $user->user = "Invitado";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Invitado';
        $user->estado = 'Habilitado';
        $user->save();
    }
}
