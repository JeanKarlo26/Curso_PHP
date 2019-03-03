<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = Producto::all();
        return view('Producto.productos', compact('producto'));
    }

    public function store(Request $request)
    {
        Producto::create([
            'user_id' => \Auth::id(),
            'categoria' => $request['categoria'],
            'codigo' => $request['codigo'],
            'nombre' => $request['nombre'],
            'marca' => $request['marca'],
            'modelo' => $request['modelo'],
            'descripcion' => $request['descripcion'],
        ]);

        return redirect('producto/index');
    }

    public function update(Request $request, Producto $producto)
    {
        $producto->update([
            'user_id' => \Auth::id(),
            'categoria' => $request['categoria_e'],
            'codigo' => $request['codigo_e'],
            'nombre' => $request['nombre_e'],
            'marca' => $request['marca_e'],
            'modelo' => $request['modelo_e'],
            'descripcion' => $request['descripcion_e'],
        ]);

        return redirect('producto/index');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect('producto/index');
    }
}
