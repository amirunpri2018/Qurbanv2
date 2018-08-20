<?php

namespace App\Http\Controllers;

use App\Kupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class KuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kupon.kupon-list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getKupons()
    {
        $kupons = Kupon::select(['kupons.id','kupons.idKupon','kupons.jenisKupon', 'kupons.isKembali', 'pengurbans.nama as namaPengurban', 'pengurbans.rt as rtPengurban', 'pengurbans.rw as rwPengurban', 'penerima_dagings.nama', 'penerima_dagings.rt', 'penerima_dagings.rw'])
            ->leftJoin('pengurbans', 'kupons.pengurban_id', '=', 'pengurbans.id')
            ->leftJoin('penerima_dagings', 'kupons.penerima_daging_id', '=', 'penerima_dagings.id')
            ->whereYear('kupons.created_at', date('Y'))
            ->orderBy('kupons.id');

        return DataTables::of($kupons)
            ->addColumn('action', function ($kupons) {
                return '<div class="btn-group pull-right"><button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">Tools<i class="fa fa-angle-down"></i></button><ul class="dropdown-menu pull-right"><li>'
                    .'<a href="javascript:;">'
                    .'<i class="fa fa-print"></i> Print </a></li><li>'
                    .'<a href="'. url('kupon-edit').'/'.$kupons->id.'">'
                    .'<i class="fa fa-file-pdf-o"></i> Edit </a> </li><li>'
                    .'<a href="javascript:;">'
                    .'<i class="fa fa-file-excel-o"></i> Export to Excel </a></li></ul></div>';
            })
            ->editColumn('nama', function ($kupons){
                if (isset($kupons->namaPengurban)){
                    return $nama=$kupons->namaPengurban;
                } else {
                    return $nama=$kupons->nama;
                }
            })
            ->editColumn('rt', function ($kupons){
                if (isset($kupons->rtPengurban)){
                    return $rt=$kupons->rtPengurban;
                } else {
                    return $rt=$kupons->rt;
                }
            })
            ->editColumn('rw', function ($kupons){
                if (isset($kupons->rwPengurban)){
                    return $rw=$kupons->rwPengurban;
                } else {
                    return $rw=$kupons->rw;
                }
            })
            ->make(true);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showQcPage($jenis)
    {
        return view('kupon.kupon-qc',['jenis' => $jenis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchKupon($idKupon)
    {
        $html = null;
        $queries = DB::select("select kupons.idkupon, pengurbans.nama as namaPengurban, pengurbans.rt as rtPengurban, pengurbans.rw as rwPengurban, penerima_dagings.nama, penerima_dagings.rt, penerima_dagings.rw from kupons left join pengurbans on kupons.pengurban_id = pengurbans.id left join penerima_dagings on kupons.penerima_daging_id = penerima_dagings.id where kupons.idkupon = '".$idKupon."' AND kupons.isKembali = '0' and YEAR(kupons.created_at) = '2018' limit 5");
        foreach($queries as $q){
            if (isset($q->namaPengurban)){
                $nama = $q->namaPengurban;
            } else{
                $nama = $q->nama;
            }

            if (isset($q->rtPengurban)){
                $rt = $q->rtPengurban;
            } else{
                $rt = $q->rt;
            }

            if (isset($q->rwPengurban)){
                $rw = $q->rwPengurban;
            } else{
                $rw = $q->rw;
            }
            $html = "<tr>"
                ."<td>".$q->idkupon."</td>"
                ."<td>".$nama."</td>"
                ."<td>".$rt."</td>"
                ."<td>".$rw."</td>"
                ."</tr>";
        }

        return Response($html);
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
    public function storeStatusKupon(Request $request, $idKupon)
    {
        $kupon = Kupon::where('idkupon','=',$idKupon)
                ->first();
        $kupon->isKembali = '1';
        $kupon->user_id = Auth::user()->id;
        $kupon->save();
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
