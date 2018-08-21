<?php

namespace App\Http\Controllers;

use App\Daging;
use App\JenisDaging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class DagingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dagings = Daging::select(['dagings.id','dagings.jumlah', 'jenis_dagings.nama'])
            ->join('jenis_dagings', 'dagings.jenis_daging_id', '=', 'jenis_dagings.id')
            ->whereYear('dagings.created_at', date('Y'))
            ->orderBy('dagings.id');

        return DataTables::of($dagings)
            ->addColumn('action', function ($dagings) {
                return '<div class="btn-group pull-right"><button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">Tools<i class="fa fa-angle-down"></i></button><ul class="dropdown-menu pull-right"><li>'
                    .'<a href="javascript:;">'
                    .'<i class="fa fa-print"></i> Print </a></li><li>'
                    .'<a href="'. url('daging-edit').'/'.$dagings->id.'">'
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
    public function create()
    {
        $jenis = JenisDaging::all();

        return view('daging.daging-input', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            Daging::create([
                'jenis_daging_id' => $request->jenis_daging_id,
                'jumlah' => $request->jumlah,
                'user_id' => Auth::user()->id,
            ]);

            return redirect('daging');
        } catch (\Illuminate\Database\QueryException $ex){
            dd($ex);
        }
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
        $daging = Daging::findOrfail($id);
        $jenis = JenisDaging::all();

        return view('daging.daging-edit', compact('daging','jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daging $daging)
    {
        $daging->update([
            'jenis_daging_id' => $request->jenis_daging_id,
            'jumlah' => $request->jumlah,
            'user_id' => Auth::user()->id,
        ]);

        return redirect('daging');
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
