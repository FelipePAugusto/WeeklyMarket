<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>"Felipe Augusto",
            'email'=>"felipe@mail.com",
            'password'=>Hash::make("123456"),
            'imagem'=>"img/usuario/perfil.png"
        ]);

        /*$dados = [
            'name'=>"Felipe Augusto",
            'email'=>"felipe@mail.com",
            'password'=>bcrypt("123456"),
            'imagem'=>"img/usuario/perfil.png",
        ];
        User::create($dados);
        if(User::where('email','=',$dados['email'])->count()){
            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);
            echo "Usuario Alterado!";
        }else{
            User::create($dados);
            echo "Usuario Criado!";
        }*/
    }
}
