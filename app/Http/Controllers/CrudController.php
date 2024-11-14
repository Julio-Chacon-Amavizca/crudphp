<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    //
    public function index()
    {
        $datos = DB::select(" select * from productos");
        return view("welcome")->with("datos", $datos);
    }

    public function create(Request $request)
    {
        try {
            $sql = DB::insert("insert into productos (id_producto ,nombre ,precio , cantidad) values (? ,? ,? ,? )", [$request->txtcodigo, $request->txtnombre, $request->txtprecio, $request->txtcantidad]);
        } catch (\Throwable $e) {
            $sql = 0;
        }

        if ($sql == true) {
            return back()->with("correcto", "Se ha agregado el producto correctamente");
        } else {
            return back()->with("incorrecto", "No se pudo agregar el producto");
        }
    }

    public function update(Request $request)
    {
        try {
            $sql = DB::update("update productos set nombre = ? , precio = ? , cantidad = ? where id_producto = ?", [$request->txtnombre, $request->txtprecio, $request->txtcantidad, $request->txtcodigo]);
            if ($sql == 0) {
                $sql = 1;
            }
        } catch (\Throwable $e) {
            $sql = 0;
        }

        if ($sql == true) {
            return back()->with("correcto", "Se ha modificado el producto correctamente");
        } else {
            return back()->with("incorrecto", "No se pudo modificar el producto");
        }
    }

    public function delete($id)
    {
        try {
            $sql = DB::delete("delete from productos where id_producto = ?", [$id]);
        } catch (\Throwable $e) {
            $sql = 0;
        }

        if ($sql == true) {
            return back()->with("correcto", "Se ha eliminado el producto correctamente");
        } else {
            return back()->with("incorrecto", "No se pudo eliminar el producto");
        }
    }
}
