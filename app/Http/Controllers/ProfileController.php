<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        $usuario = User::all();
        return view('profile.edit',compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request, $id)
    {
        $dados = $request->all();
        User::find($id)->update($dados);

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem');
            $dir = "img/feirantes";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$dados['nome'].".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        return redirect()->route('profile.edit')->withStatus('Perfil atualizado com sucesso.');
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request, $id)
    {
        $dados = $request->all();

        $password = Hash::make($dados['password']);
        $dados['password'] = $password;
        User::find($id)->update($dados);

        return redirect()->route('profile.edit')->withStatus('Senha atualizada com sucesso.');
    }


    public function sair()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }
}
