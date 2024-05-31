@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/inventaris">Petugas</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="" style="color: white;">Edit Petugas</a></li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Edit Petugas</h6>
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
              <h5 class="card-title">Tambah Data Barang</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
                @foreach($petugas as $d)
                <form action="/petugas/updatepetugas" method="post">
                    @csrf
                    <input type="hidden" name="id_petugas" value="{{ $d->id_petugas }}">
                    <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                        <label for="nama_petugas" class="form-label">Nama Petugas</label>
                        <input type="text" class="form-control" name="nama_petugas" value="{{ $d->nama_petugas }}">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="{{ $d->username }}">
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" >
                  </div>

                    <div class="mb-3">
                        <label for="id_level" class="form-label">Level</label>
                        <select name="id_level" class="form-control" value="{{ $d->id_level }}">
                            <option value="">-- Pilih Level --</option>
                            @foreach ($detail_level as $item)
                            <option value="{{ $item['id_level'] }}">{{ $item['nama_level'] }}</option>
                            @endforeach
                        </select>
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