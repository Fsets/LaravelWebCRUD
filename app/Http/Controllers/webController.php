<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Foto;
use App\Http\Requests\RegisterRequest;

class webController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view("home")->with('users', $users); //para enviar datos al blade
    }
    
    public function users(){
        
        return view("home", compact('users'));
    }

    public function editUsuario()
    {
        //
        return view("usuario.editUsuario");
    }
    

    public function IniciarSesion()
    {
        //
        return view("usuario.loginUsuario");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $entrada = $request->all(); //almacena en entrada el resultado de toda la consulta que hagamos en la bd
        if($archivo=$request->file('foto_id')){ //si hay imagen
            $nombre= $archivo->getClientOriginalName(); 
            $archivo->move('images', $nombre);
            $foto= Foto::create(['ruta_foto'=> $nombre]);
            $entrada['foto_id'] = $foto->id;

        }
        //encriptar la contraseña
        $entrada['password']= bcrypt($request->password);
        User::create($entrada); //crea el objeto usuario
        return redirect("usuario");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        //
        $user= User::findOrFail($id);
        return view("usuario.editUsuario", compact("producto"));
    }

    public function editarUsuario(Request $request){
        //pasamos parametros de la bd a variables para usar
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;

        //buscamos el usuario a editar
        $user = User::find($id);
        $user->name= $name;
        $user->email= $email;
        $user->save();

        return redirect('/home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $user= User::findOrFail($id); //almacenamos usuario
        $entrada= $request->all();
        if($archivo=$request->file('foto_id')){ //si hay imagen
            $nombre= $archivo->getClientOriginalName(); 
            $archivo->move('images', $nombre);
            $foto= Foto::create(['ruta_foto'=> $nombre]);
            $entrada['foto_id'] = $foto->id;
        }
        $user->update($entrada); //actualiza la informacion en la bd

        return redirect('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
