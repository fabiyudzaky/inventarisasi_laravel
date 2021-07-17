<?php

namespace App\Http\Controllers;

use App\TransaksiInventarisasi;
use Illuminate\Http\Request;
use App\MasterRuangan;
use App\ApprovalTransaksiInventarisasi;
use Auth;

class TransaksiInventarisasiController extends Controller
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
        return view('transaksi-inventarisasi.create');
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
        $digit  = TransaksiInventarisasi::max('nomor_registrasi');
        if($digit == null){
            $digit = "1";
        }else{
            $digit = (int)$digit + 1;
        }
        // dd($digit);

        $transaksiInventarisasi = new TransaksiInventarisasi;
        $transaksiInventarisasi->nomor_registrasi = sprintf('%07d', $digit);
        $transaksiInventarisasi->kode_barang = $request->input('kode_barang');
        $transaksiInventarisasi->nama_barang = $request->input('nama_barang');
        $transaksiInventarisasi->tanggal_perolehan = $request->input('tanggal_perolehan');
        $transaksiInventarisasi->keterangan = $request->input('keterangan');
        $transaksiInventarisasi->kondisi_id = $request->input('kondisi_id');
        $transaksiInventarisasi->kode_unit = 15;
        $transaksiInventarisasi->jenis_inventarisasi_id = 1;
        $transaksiInventarisasi->ruangan_id = $request->input('ruangan_id');
        $transaksiInventarisasi->save();

        $approvalTransaksiInventarisasi = new ApprovalTransaksiInventarisasi;
        $approvalTransaksiInventarisasi->transaksi_inventarisasi_id = $transaksiInventarisasi->id;
        $approvalTransaksiInventarisasi->alasan                     = "";
        $approvalTransaksiInventarisasi->status                     = "Proses";
        $approvalTransaksiInventarisasi->pembuat_id                 = Auth::id();
        $approvalTransaksiInventarisasi->verifikator_id             = Auth::id();
        $approvalTransaksiInventarisasi->save();

        return redirect(route('transaksi-inventarisasi.ruangan', ['ruangan' => $transaksiInventarisasi->ruangan_id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TransaksiInventarisasi  $transaksiInventarisasi
     * @return \Illuminate\Http\Response
     */
    public function show(TransaksiInventarisasi $transaksiInventarisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TransaksiInventarisasi  $transaksiInventarisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(TransaksiInventarisasi $transaksiInventarisasi)
    {
        //
        return response()->json($transaksiInventarisasi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TransaksiInventarisasi  $transaksiInventarisasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TransaksiInventarisasi $transaksiInventarisasi)
    {
        //
        $transaksiInventarisasi->kode_barang = $request->input('kode_barang');
        $transaksiInventarisasi->nama_barang = $request->input('nama_barang');
        $transaksiInventarisasi->tanggal_perolehan = $request->input('tanggal_perolehan');
        $transaksiInventarisasi->keterangan = $request->input('keterangan');
        $transaksiInventarisasi->kondisi_id = $request->input('kondisi_id');
        $transaksiInventarisasi->save();
        
        return redirect(route('transaksi-inventarisasi.ubah-ruangan', ['ruangan' => $transaksiInventarisasi->ruangan_id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TransaksiInventarisasi  $transaksiInventarisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(TransaksiInventarisasi $transaksiInventarisasi)
    {
        //
        $transaksiInventarisasi->delete();

        return redirect(route('transaksi-inventarisasi.ubah-ruangan', ['ruangan' => $transaksiInventarisasi->ruangan_id]));
    }

    
    // Custom Controller
    public function ruangan($id){
        //
        $no = 1;
        $ajukan = "Mati";
        $ruangan = MasterRuangan::find($id);
        $transaksiInventarisasi = TransaksiInventarisasi::where('ruangan_id', '=', $ruangan->id)->get();
        foreach($transaksiInventarisasi as $trxInv){
            $approvalTransaksiInventarisasi = ApprovalTransaksiInventarisasi::where('transaksi_inventarisasi_id', '=', $trxInv->id)->latest()->first();
            $trxInv['status']   = $approvalTransaksiInventarisasi->status;
            if($trxInv['status'] == "Proses"){
                $ajukan = "Nyala";
            }
        }
        // dd($approvalTransaksiInventarisasi);
        return view('transaksi-inventarisasi.index', compact('transaksiInventarisasi', 'ruangan', 'no', 'ajukan'));
    }

    public function ubah_ruangan($id){
        $ruangan = MasterRuangan::find($id);
        $transaksiInventarisasi = TransaksiInventarisasi::where('ruangan_id', '=', $ruangan->id)->get();
        foreach($transaksiInventarisasi as $trxInv){
            $approvalTransaksiInventarisasi = ApprovalTransaksiInventarisasi::where('transaksi_inventarisasi_id', '=', $trxInv->id)->latest()->first();
            $trxInv['status']   = $approvalTransaksiInventarisasi->status;
            if($trxInv['status'] == "Diajukan"){
                $trxInv['ubah']   = "Mati";
                $trxInv['hapus']   = "Mati";
            }else{
                $trxInv['ubah']   = "Nyala";
                $trxInv['hapus']   = "Nyala";
            }
        }
        return view('transaksi-inventarisasi.ubah-ruangan', compact('transaksiInventarisasi', 'ruangan'));
    }
}
