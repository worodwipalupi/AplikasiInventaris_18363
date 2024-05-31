@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/inventaris">Anggota</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="" style="color: white;">Edit Anggota</a></li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Edit Anggota</h6>
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
              <h5 class="card-title">Tambah Data Anggota</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
                @foreach($anggotas as $d)
                    <form action="/anggota/updateanggota" method="post">
                        @csrf
                        <input type="hidden" name="id_anggota" value="{{ $d->id_anggota }}">

                            <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                                <label for="nama_anggota" class="form-label">Nama Anggota</label>
                                <input type="text" class="form-control" name="nama_anggota" value="{{ $d->nama_anggota }}">
                            </div>

                            <div class="mb-3">
                                <label for="no_anggota" class="form-label">No Anggota</label>
                                <input type="number" class="form-control" name="no_anggota" value="{{ $d->no_anggota }}">
                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ $d->alamat }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

@endsection