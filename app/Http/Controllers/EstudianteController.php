<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Faker\Calculator\Ean;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('index',compact('estudiantes'));
    }

    public function create()
    {
        $estudiante= new Estudiante();
        return view('create', compact('estudiante'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required',
            'nota_1' => 'required|numeric',
            'nota_2' => 'required|numeric',
            'nota_3' => 'required|numeric',
            'promedio'=>'required|numeric',
        ]);
        $estudiante = new Estudiante();
        $estudiante->nombre = $data['nombre'];
        $estudiante->nota_1 = $data['nota_1'];
        $estudiante->nota_2 = $data['nota_2'];
        $estudiante->nota_3 = $data['nota_3'];
        $estudiante->promedio = $data['promedio'];
        $estudiante->save();
        return redirect()->route('estudiantes.index');
    }
    public function delete($id_estudiante)
    {
        $estudiante= Estudiante::where('id',$id_estudiante) -> delete();
        return redirect()->route('estudiantes.index');
    }
}
