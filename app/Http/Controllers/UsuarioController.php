<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Usuario::all();
        //
        return view('usuarios.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuarios.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request);
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|max:50',
            'apellidos' => 'required|max:100',
            'correo' => 'required|max:150',
            'telefono' => 'required|max:10',
            'direccion' => 'required|max:100',
            'DocumentoId' => 'required|max:11',
            'password' => 'required|max:100'
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator)
                         ->withInput();
        }
        else{
            Usuario::create($request->only(['nombre','apellidos','correo','telefono','direccion','DocumentoId','password']));

            return redirect('usuarios')->with('type','Succes')
                                         ->with('message','Registro creado exitosamente');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $datos = Usuario::find($id);
        return view('usuarios.edit', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        // dd($request);
        $validator = Validator::make($request->all(),[
            'nombre' => 'required|max:50',
            'apellidos' => 'required|max:100',
            'correo' => 'required|max:150',
            'telefono' => 'required|max:10',
            'direccion' => 'required|max:100',
            'DocumentoId' => 'required|max:11',
            'password' => 'required|max:100'
        ]);
        if ($validator->fails()){
            return back()->withErrors($validator)
                         ->withInput();
        }
        else{
            $usuario->update($request->all());

            return redirect('usuarios')->with('type','warning')
                                         ->with('message','Editado exitosamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Usuario::destroy($id);
        return redirect('usuarios')->with('type', 'danger')
                                     ->with('message', 'EL resgistro se elimino');
    }
}
