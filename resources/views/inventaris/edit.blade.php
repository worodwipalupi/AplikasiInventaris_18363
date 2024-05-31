@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/inventaris">Inventaris</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="" style="color: white;">Edit Inventaris</a></li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Edit Inventaris</h6>
    </nav>
  </div>
</nav>

 <!-- Main content -->
 <div class="content">
  <div class="container">
    <div class="row justify-content-center"> <!-- Menengahkan konten -->
      <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Edit Inventaris</h5> <!-- Mengurangi ukuran judul -->
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                  <form action="/inventaris/updateinventaris" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="id_inventaris" value="{{ $inventaris->id_inventaris ?? '' }}">
                    @if ($inventaris)
                    <div class="form-group">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" value="{{ $inventaris->nama ?? '' }}">
                    </div>
                    
                    <div class="form-group">
                      <label for="kondisi" class="form-label">Kondisi</label>
                      <select class="form-control" id="kondisi" name="kondisi" required>
                          <option value="">-- Kondisi --</option>
                          <option value="Selesai" {{ $inventaris->kondisi == 'Selesai' ? 'selected' : ''}}>Selesai</option>
                          <option value="Proses" {{ $inventaris->kondisi == 'Proses' ? 'selected' : ''}}>Proses</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="keterangan" class="form-label">Keterangan</label>
                      <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $inventaris->keterangan ?? '' }}">
                    </div>
                    
                    <div class="form-group">
                      <label for="jumlah" class="form-label">Jumlah</label>
                      <input type="number" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah" value="{{ $inventaris->jumlah ?? '' }}">
                    </div>
                    
                    <div class="form-group">
                      <label for="jenis" class="form-label">Jenis</label>
                      <select name="id_jenis" class="form-control" id="">
                      <option value="">-- Jenis --</option>
                      @foreach ($jenis as $item)
                      <option value="{{ $item->id_jenis }}" {{ $item->id_jenis ? 'selected' : '' }}>{{ $item->nama_jenis }}</option>
                      @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group mt-3">
                      <label for="tanggalregister" class="form-label">Tanggal Register</label>
                      <input type="date" id="tanggal_register" name="tanggal_register" class="form-control" value="{{ $inventaris->tanggal_register ?? '' }}">
                    </div>
                    
                    <div class="form-group">
                      <label for="ruang" class="form-label">Ruang</label>
                      <select name="id_ruang" class="form-control" id="">
                      <option value="">-- Ruang --</option>
                      @foreach ($ruang as $item)
                      <option value="{{ $item->id_ruang }}" {{ $item->id_ruang  ? 'selected' : '' }}>{{ $item->nama_ruang }}</option>
                      @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group mt-3">
                      <label for="kodeinventaris" class="form-label">Kode Inventaris</label>
                      <input type="text" id="kode_inventaris" name="kode_inventaris" class="form-control" placeholder="Kode Inventaris" value="{{ $inventaris->kode_inventaris ?? '' }}">
                    </div>

                    <div class="form-group">
                      <label for="petugas" class="form-label">Petugas</label>
                      <select name="id_petugas" class="form-control" id="">
                      <option value="">-- Petugas --</option>
                      @foreach ($petugas as $item)
                      <option value="{{ $item->id_petugas }}" {{ $item->id_petugas  ? 'selected' : '' }}>{{ $item->nama_petugas }}</option>
                      @endforeach
                    </select>
                    </div>
                    
                    <div class="form-group mt-3">
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    @else
                      <p>Inventaris not found.</p>
                    @endif
                  </form>
                </thead>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       </div>
       <!-- /.col-md-6 -->
   
       <!-- /.col-md-6 -->
     </div>
     <!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>

@endsection