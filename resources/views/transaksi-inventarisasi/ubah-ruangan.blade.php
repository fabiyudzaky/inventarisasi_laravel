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
                        <button class="btn btn-primary mr-0 mb-2"data-toggle="modal" data-target="#tambah-modal" disabled>
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
                        <a href="{{route('transaksi-inventarisasi.ruangan', ['ruangan' => $ruangan->id])}}" class="btn btn-success">
                            <i class="bi bi-box-arrow-left "></i>
                            Selesai
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
            <div class="table-responsive mt-3 ms-1 me-5">
                <table class="table table-bordered text-center">
                    <thead>
                        <th width="9%">Nomer Register</th>
                        <th width="15%">Kode Barang</th>
                        <th width="17%">Nama Barang</th>
                        <th width="12%">Tanggal Perolehan</th>
                        <th width="15%">Keterangan</th>
                        <th width="10%">Kondisi</th>
                        <th width="10%">Status</th>
                        <th width="13%">Aksi</th>
                    </thead>
    
                    <tbody>
                        <!--baris tabel  -->
                        @foreach($transaksiInventarisasi as $trxInv)
                            <tr>
                                <!-- isi dari tiap kolom. mengisinya dari kiri ke kanan -->
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
                                <td>
                                    <form action="{{route('transaksi-inventarisasi.destroy', ['transaksi_inventarisasi' => $trxInv->id])}}" method="post">
                                        <button type="button" id="" class="btn btn-warning btn-edit" data-toggle="modal" data-target="#edit-modal" data-id="{{$trxInv->id}}" @if($trxInv->ubah == "Mati") disabled @endif>Ubah</button>
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" @if($trxInv->hapus == "Mati") disabled @endif>Hapus</button>
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

    @include('transaksi-inventarisasi.edit')
    
@endsection

@section('script')
<script>
    $( ".btn-edit" ).click(function() {
        let id = $(this).data('id');
        console.log(id);

        $('#myFormId').attr('action', '/transaksi-inventarisasi/'+id);

        $.ajax({
            type: "get",
            url: "{{url('/transaksi-inventarisasi')}}/"+id+"/edit",
            dataType: 'json',
            success: function(res){
                  console.log(res);
                $('#kode_barang').val(res.kode_barang);
                $('#nama_barang').val(res.nama_barang);
                $('#tanggal_perolehan').val(res.tanggal_perolehan);
                $('#keterangan').val(res.keterangan);
                $('#kondisi_id').val(res.kondisi_id);
            }
        });
    });
</script>
@endsection