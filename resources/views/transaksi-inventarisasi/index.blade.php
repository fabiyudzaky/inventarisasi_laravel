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
                        <input type="text" class="form-control" id="ruangan" name="ruangan" value="{{$ruangan->nama_ruangan}}" readonly>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-4">
                        <label for="pengurus-barang" class="">Pengurus Barang</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="pengurus-barang" name="pengurus-barang" value="{{$ruangan->user->name}}" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="d-flex mx-2">
                    <div class="p-2">
                        <button class="btn btn-primary mr-0 mb-2"data-toggle="modal" data-target="#tambah-modal">
                            <i class="bi bi-box-arrow-left "></i>
                            Tambah Data
                        </button>
                    </div>
                    <div class="p-2">
                        <a href="{{route('transaksi-inventarisasi.ubah-ruangan', ['ruangan' => $ruangan->id])}}" class="btn btn-warning">
                            Ubah
                        </a>
                    </div>
                    <div class="p-2">
                        <a href="{{route('dir')}}" class="btn btn-danger">
                            <i class="bi bi-box-arrow-left "></i>
                            Kembali
                        </a>
                    </div>
                    <div class="ml-auto p-2">
                        <button class="btn btn-success @if($ajukan == 'Mati') disabled @endif" id="ajukan">
                            Ajukan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- baris untuk tombol -->
    
        <!-- tabel berisi barangnya -->
        <div class="container d-flex flex-column">
            <div class="table-responsive mt-3 ms-1 me-5">
                <table class="table table-bordered text-center">
                    <thead>
                        <th width="4%">No</th>
                        <th width="14%">Nomer Register</th>
                        <th width="15%">Kode Barang</th>
                        <th width="17%">Nama Barang</th>
                        <th width="15%">Tanggal Perolehan</th>
                        <th width="15%">Keterangan</th>
                        <th width="10%">Kondisi</th>
                        <th width="10%">Status</th>
    
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
                                    <span class="badge @if($trxInv->status == 'Proses') badge-primary 
                                        @elseif ($trxInv->status == 'Diajukan') badge-success @endif">
                                        {{$trxInv->status}}
                                    </span>
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
    
@endsection

@section('script')
    <script>
        $(document).ready(function(){
     
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $( "#ajukan" ).click(function() {
                var ruangan_id = {{$ruangan->id}};
                console.log(ruangan_id);

                // var _token = $('meta[name="csrf-token"]').attr('content');
                // console.log(_token);

                $.ajax({
                    data: {"ruangan_id" : ruangan_id},
                    url: "{{url('/approval-transaksi-inventarisasi/ruangan/ajukan')}}/"+ruangan_id,
                    type: "post",
                    success: function(res){
                        console.log(res);
                        window.location.href = "{{route('transaksi-inventarisasi.ruangan', ['ruangan' => $ruangan->id])}}";
                    }
                });
            });
        });
    </script>
@endsection