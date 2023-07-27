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
        $user->nombres = "Administrador";
        $user->paterno = "sitio";
        $user->materno = "web";
        $user->user = "Administrador";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Administrador';
        $user->estado = 'habilitado';
        $user->save();

        // Funcionario_1
        $user = new User();
        $user->nombres = "Funcionario_1";
        $user->paterno = "Salinas";
        $user->materno = "Poma";
        $user->user = "funcionario_1";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Funcionario';
        $user->estado = 'habilitado';
        $user->save();

        // Funcionario_2
        $user = new User();
        $user->nombres = "Funcionario_2";
        $user->paterno = "Salinas";
        $user->materno = "Poma";
        $user->user = "funcionario_2";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Funcionario';
        $user->estado = 'habilitado';
        $user->save();

        // Funcionario_3
        $user = new User();
        $user->nombres = "Funcionario_3";
        $user->paterno = "Salinas";
        $user->materno = "Poma";
        $user->user = "funcionario_3";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Funcionario';
        $user->estado = 'habilitado';
        $user->save();



        // Invitado
        $user = new User();
        $user->nombres = "Invitado";
        $user->paterno = "Salinas";
        $user->materno = "Poma";
        $user->user = "Invitado";
        $user->password = "dd27564ac5d8b5065d5986d0f9e92fb91e71a23f9f5c13e599985c646c078a16"; //1231230
        $user->rol = 'Invitado';
        $user->estado = 'habilitado';
        $user->save();
    }
}
