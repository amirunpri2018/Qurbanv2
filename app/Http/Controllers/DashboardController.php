<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $kupon = DB::table('kupons')
                    ->selectRaw("( SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Sapi' AND isKembali='1') AS sapi, ( SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Kambing' AND isKembali='1') AS kambing, ( SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Warga' AND isKembali='1') AS umum, ( SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Sapi' AND isKembali = '0') AS belumSapi, (SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Kambing' AND isKembali = '0') AS belumKambing, (SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Warga' AND isKembali = '0') AS belumUmum")
                    ->first();
            dd($kupon);

            return view('dashboard', compact('kupon'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kupon = DB::table('kupons')
            ->selectRaw("( SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Sapi' AND isKembali='1') AS sapi, ( SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Kambing' AND isKembali='1') AS kambing, ( SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Warga' AND isKembali='1') AS umum, ( SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Sapi' AND isKembali = '0') AS belumSapi, (SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Kambing' AND isKembali = '0') AS belumKambing, (SELECT COUNT(idKupon) FROM kupons WHERE jenisKupon='Warga' AND isKembali = '0') AS belumUmum")
            ->first();

        return response()->json($kupon);
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
