<?php

namespace App\Http\Controllers;

use App\ApprovalTransaksiInventarisasi;
use Illuminate\Http\Request;
use App\MasterRuangan;
use App\TransaksiInventarisasi;
use Auth;

class ApprovalTransaksiInventarisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\ApprovalTransaksiInventarisasi  $approvalTransaksiInventarisasi
     * @return \Illuminate\Http\Response
     */
    public function show(ApprovalTransaksiInventarisasi $approvalTransaksiInventarisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApprovalTransaksiInventarisasi  $approvalTransaksiInventarisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(ApprovalTransaksiInventarisasi $approvalTransaksiInventarisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApprovalTransaksiInventarisasi  $approvalTransaksiInventarisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApprovalTransaksiInventarisasi $approvalTransaksiInventarisasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApprovalTransaksiInventarisasi  $approvalTransaksiInventarisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApprovalTransaksiInventarisasi $approvalTransaksiInventarisasi)
    {
        //
    }

    public function ajukan_ruangan(Request $request){
        $ruangan = MasterRuangan::find($request->ruangan_id);
        $transaksiInventarisasi = TransaksiInventarisasi::where('ruangan_id', '=', $ruangan->id)->get();
        foreach($transaksiInventarisasi as $trxInv){
            $approvalTransaksiInventarisasi                             = new ApprovalTransaksiInventarisasi;
            $approvalTransaksiInventarisasi->transaksi_inventarisasi_id = $trxInv->id;
            $approvalTransaksiInventarisasi->alasan                     = "";
            $approvalTransaksiInventarisasi->status                     = "Diajukan";
            $approvalTransaksiInventarisasi->pembuat_id                 = Auth::id();
            $approvalTransaksiInventarisasi->verifikator_id             = Auth::id();
            $approvalTransaksiInventarisasi->save();
        }
        
        return response()->json($transaksiInventarisasi, 200);
    }
}
