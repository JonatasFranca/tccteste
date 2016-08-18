<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Usuario;
use App\Http\Requests\UsuarioRequest;
class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();

        return view('usuarios.index', ['usuarios' => $usuarios]);
    }
    public function create()
    {
        return view('usuarios.create');
        
    }
    public function store(UsuarioRequest $request)
    {
        $input = $request->all();
        Usuario::create($input);

        return redirect()->route('usuario');
    }

}