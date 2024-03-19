<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Software;


class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $softwares = Software::all();
      return $softwares;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $software = new Software();
          $software->descripcion = $request->descripcion;
          $software->precio = $request->precio;
          $software->stock = $request->stock;

          $software->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
           $software = Software::findOrFail($request->id);
           $software->descripcion = $request->descripcion;
           $software->precio = $request->precio;
           $software->stock = $request->stock;
           $software->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $software = Software::destroy($request->id);
          return $software;
    }
}
