<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

    public function logout(Request $request) {
        $r= $request->session()->flush(); //termina la sesion actual y redirige al login
        return redirect('/');
    }

    public function crear_user()
    {
        //
        $user = User::all();
        return view("usuario.crearUsuario")->with('user', $user);
    }

    public function newUsuario(Request $request){
        $user = User::create([
            'id' => $request->id,
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt($request->password)
        ]);
        return redirect('home');
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
        
        return redirect('home'); //redirecciona a esa pagina
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
        $user= User::find($id); //almacena el usuario que queremos ver en concreto para luego editar
        return view("usuario.editUsuario")->with('user', $user); 
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
        $user = User::findOrFail($id);//Mediante este metodo findorfail hacemos una busqueda del id del usuario que nos llega por parametros de la tabla para ver si dicho usuario existe
        return view('usuario.editUsuario')->with('user', $user);// ridirigimos toda la informacion del usuario a la vista para su posterior edicion
        
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
        $user= User::find($id); //almacenamos usuario
        $entrada= $request->all();
        if($archivo=$request->file('foto_id')){ //si hay imagen
            $nombre= $archivo->getClientOriginalName(); 
            $archivo->move('images', $nombre);
            $foto= Foto::create(['ruta_foto'=> $nombre]);
            $entrada['foto_id'] = $foto->id;
        }
        $user->update($entrada); //actualiza la informacion en la bd

        return redirect('home');
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
        $user = User::find($id);
        $user->delete();
        return redirect('home');
    }
}
