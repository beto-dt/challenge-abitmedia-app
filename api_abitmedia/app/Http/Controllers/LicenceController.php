<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Licence;


class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licences = Licence::all();
        return $licences;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $licence = new Licence();
          $licence->id_software = $request->id_software;
          $licence->num_licence = mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999). " - " .mt_rand(1000000000,9999999999);
          $licence->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
           $licence = Licence::findOrFail($request->id);
           $licence->id_software = $request->id_software;
           $licence->num_licence = $request->num_licence;
           $licence->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $licence = Licence::destroy($request->id);
      return $licence;
    }
}
