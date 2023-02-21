<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductosRequest;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

    public function index(){

        $productos = Producto::all();
        return view("productos.inicio" , compact("productos") );
    }


    public function create(){
        return view("productos.create");
    }


    public function store(CreateProductosRequest $request){

        /*$this->validate($request,
        ['seccion' =>'required' ,
         'paisOrigen' => 'required' ,
         'nombreArticulo' => 'required' ,
         'precio'=>'required'
        ]);*/


        $nombre = $request->file('foto')->getClientOriginalName();
        $archivo = $request->file('foto')->move('images',$nombre);


        $producto = new Producto;
        $producto->nombreArticulo = $request->nombreArticulo;
        $producto->seccion = $request->seccion;
        $producto->precio = $request->precio;
        $producto->fecha = $request->fecha;
        $producto->paisOrigen = $request->paisOrigen;
        $producto->ruta = $nombre;

        $producto->save();

        return redirect("/");


        $entrada = $request->all();

        if($archivo=$request->file('foto')){

            $archivo->move('images' , $nombre );
            $entrada['ruta'] = $nombre;
        }

        Producto::create($entrada);

    }


    public function show($id){
    }


    public function edit($id){
        $producto = Producto::findOrFail($id);
        return view("productos.edit" , compact("producto"));
    }


    public function update(Request $request, $id){
        $producto = Producto::findOrFail($id);

        $producto->update($request->all());

        return redirect("/");
    }


    public function destroy($id){
        $producto = Producto::findOrFail($id);

        $producto->delete();

        return redirect("/");


    }
}
