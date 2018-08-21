<?php

namespace App\Http\Controllers;

use App\DitujukanUntuk;
use App\Pembayaran;
use App\Pengurban;
use App\qurban;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class QurbanController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('qurban.qurban-list');
    }

    public function getPengurban()
    {
        $pengurbans = qurban::select(['qurbans.id','qurbans.jenisHewan', 'qurbans.statusPembayaran', 'pengurbans.nama', 'pengurbans.rt', 'pengurbans.rw', 'pengurbans.nohp'])
            ->join('pengurbans', 'qurbans.pengurban_id', '=', 'pengurbans.id')
            ->join('users', 'qurbans.user_id', '=', 'users.id')
            ->whereYear('qurbans.created_at', date('Y'))
            ->orderBy('qurbans.id');

        return DataTables::of($pengurbans)
            ->addColumn('action', function ($pengurbans) {
                return '<div class="btn-group pull-right"><button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">Tools<i class="fa fa-angle-down"></i></button><ul class="dropdown-menu pull-right"><li>'
                        .'<a href="javascript:;">'
                    .'<i class="fa fa-print"></i> Print </a></li><li>'
                    .'<a href="'. url('qurban-edit').'/'.$pengurbans->id.'">'
                    .'<i class="fa fa-file-pdf-o"></i> Edit </a> </li><li>'
                    .'<a href="javascript:;">'
                    .'<i class="fa fa-file-excel-o"></i> Export to Excel </a></li></ul></div>';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $status = 'Belum Lunas';
        if ($request->jumlah != 0){
            $status = 'Lunas';
        } elseif ($request->jenisPemberian == 'Hewan'){
            $status = 'Tidak Patungan';
        }
        try{
            $pengurban = Pengurban::create([
                'nama' => $request->nama,
                'RT' => $request->RT,
                'RW' => $request->RW,
                'nohp' => $request->nohp,
            ]);

            $qurban = qurban::create([
                'pengurban_id' => $pengurban->id,
                'user_id' => Auth::user()->id,
                'jenisHewan' => $request->jenisHewan,
                'jenisPemberian' => $request->jenisPemberian,
                'statusPembayaran' => $status,
            ]);

            if ($request->jumlah != 0){
                Pembayaran::create([
                    'pengurban_id' => $pengurban->id,
                    'user_id' => Auth::user()->id,
                    'jumlah' => $request->jumlah,
                ]);
            }

            return redirect('qurban');
        } catch (\Illuminate\Database\QueryException $ex){
            dd($ex);
        }

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
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qurban = qurban::findOrfail($id);

        return view('qurban.qurban-edit', compact('qurban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qurban $qurban)
    {
        $pengurban = Pengurban::findOrfail(request('idpengurban'));
        $pengurban->update([
            'nama' => request('nama'),
            'RT' => request('RT'),
            'RW' => request('RW'),
            'nohp' => request('nohp'),
        ]);
        $qurban->update([
            'jenisHewan' => request('jenisHewan'),
            'jenisPemberian' => request('jenisPemberian'),
        ]);

        return redirect('qurban');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function indexDitujukanUntuk()
    {
        $pengurban = Pengurban::all();

        return view('qurban.ditujukanuntuk-input', compact('pengurban'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getDitujukanUntuk(Request $request)
    {
        $ditujukanuntuk = DitujukanUntuk::select(['ditujukan_untuks.id','pengurbans.nama as namaPengurban','ditujukan_untuks.nama', 'users.nama as namaUser'])
            ->join('pengurbans', 'ditujukan_untuks.pengurban_id', '=', 'pengurbans.id')
            ->join('users', 'ditujukan_untuks.user_id', '=', 'users.id')
            ->orderBy('ditujukan_untuks.id');

        return DataTables::of($ditujukanuntuk)
            ->addColumn('action', function ($ditujukanuntuk) {
                return '<div class="btn-group pull-right"><button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">Tools<i class="fa fa-angle-down"></i></button><ul class="dropdown-menu pull-right"><li>'
                    . '<a href="javascript:;">'
                    . '<i class="fa fa-print"></i> Print </a></li><li>'
                    . '<a href="' . url('ditujukanuntuk-edit') . '/' . $ditujukanuntuk->id . '">'
                    . '<i class="fa fa-file-pdf-o"></i> Edit </a> </li><li>'
                    . '<a href="javascript:;">'
                    . '<i class="fa fa-file-excel-o"></i> Export to Excel </a></li></ul></div>';
            })
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createDitujukanUntuk(Request $request)
    {
        try{
            $ditujukanuntuk = DitujukanUntuk::create([
                'pengurban_id' =>$request->pengurban_id,
                'nama' => $request->nama,
                'user_id' => Auth::user()->id,
            ]);

            return redirect('ditujukanuntuk');
        } catch (\Illuminate\Database\QueryException $ex){
            dd($ex);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editDitujukanUntuk($id)
    {
        $ditujukan = DitujukanUntuk::findOrfail($id);
        $pengurban = Pengurban::all();


        return view('qurban.ditujukanuntuk-edit', compact('ditujukan','pengurban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateDitujukanUntuk(Request $request, DitujukanUntuk $ditujukan)
    {
        $ditujukan->update([
            'pengurban_id' => request('pengurban_id'),
            'nama' => request('nama'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect('ditujukanuntuk');
    }
}
