@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row my-2">
            <div class="col text-center">
                <h2>Daftar Inventaris Ruangan / Input Barang Berlebih</h2>
            </div>
        </div>
    
        <div class="row justify-content-center my-5">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-3">
                        <label for="ruangan" class="">Ruangan</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="ruangan" name="ruangan" value="{{$ruangan_id}}" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label for="pengurus-barang" class="">Pengurus Barang</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="pengurus-barang" name="pengurus-barang" value="{{$ruangan_id}}" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex">
                    <div class="p-2">
                        <button class="btn btn-primary mr-0 mb-2 disabled"data-toggle="modal" data-target="#tambah-modal">
                            <i class="bi bi-box-arrow-left"></i>
                            Tambah Data
                        </button>
                    </div>
                    <div class="p-2">
                        <a href="" class="btn btn-warning disabled">
                            Ubah
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{route('transaksi-inventarisasi.ruangan', ['ruangan' => $ruangan_id])}}" class="btn btn-danger">
                            <i class="bi bi-box-arrow-left "></i>
                            Tunda
                        </a>
                    </div>
                    <div class="ml-auto p-2">
                        <a href="" class="btn btn-success disabled">
                            Ajukan
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- baris untuk tombol -->
    
        <!-- tabel berisi barangnya -->
        <div class="container d-flex flex-column">
            <div class="table-responsive mt-5 ms-1 me-5">
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>Nomer Register</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Perolehan</th>
                        <th>Keterangan</th>
                        <th>Kondisi</th>
                        <th>Aksi</th>
                    </thead>
    
                    <tbody>
                        <!--baris tabel  -->
                        @foreach($transaksiInventarisasi as $trxInv)
                            <tr>
                                <!-- isi dari tiap kolom. mengisinya dari kiri ke kanan -->
                                <td>{{$no++}}</td>
                                <td>{{$trxInv->nomor_registrasi}}</td>
                                <td>{{$trxInv->kode_barang}}</td>
                                <td>{{$trxInv->nama_barang}}</td>
                                <td>{{$trxInv->tanggal_perolehan}}</td>
                                <td>{{$trxInv->keterangan}}</td>
                                <td>{{$trxInv->master_kondisi->keterangan}}</td>
                                <td>
                                    <form action="{{route('transaksi-inventarisasi.destroy', ['transaksi_inventarisasi' => $trxInv->id])}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </div>
    
        </div>
    </div>
@endsection

@section('modal')

    @include('transaksi-inventarisasi.create')

    @include('transaksi-inventarisasi.edit')
    
@endsection

@section('script')
@endsection