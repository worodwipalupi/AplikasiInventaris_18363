@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/peminjaman">Peminjaman</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="" style="color: white;">Tambah Peminjaman</a></li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Tambah Peminjaman</h6>
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
            <h5 class="card-title">Peminjaman</h5> <!-- Mengurangi ukuran judul -->
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <form action="storepeminjaman" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="inventaris" class="form-label">Inventaris</label>
                            <select name="id_inventaris" class="form-control" id="">
                                <option value="">-- Inventaris --</option>
                                @foreach ($inventaris as $item)
                                <option value="{{ $item['id_inventaris'] }}">{{ $item['nama'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group">
                          <label for="jumlah" class="form-label">Jumlah</label>
                          <input type="number" name="jumlah" class="form-control" id="jumlah" required>
                        </div>

                        <div class="form-group">
                            <label for="anggota" class="form-label">Anggota</label>
                            <select name="id_anggota" class="form-control" id="">
                                <option value="">-- Anggota --</option>
                                @foreach ($anggota as $item)
                                <option value="{{ $item['id_anggota'] }}">{{ $item['nama_anggota'] }}</option>
                                @endforeach
                            </select>
                        </div>
                      
                        <div class="form-group">
                            <label for="tanggal_pinjam" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_pinjam" class="form-control" id="tanggal_pinjam" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_kembali" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" name="tanggal_kembali" class="form-control" id="tanggal_kembali" required>
                        </div>

                        <div class="form-group">
                            <label for="status_peminjaman" class="form-label">Status</label>
                            <select name="status_peminjaman" class="form-select" id="status_peminjaman" required>
                                <option value="Dipinjam">Dipinjam</option>
                                <option value="Proses Dipinjam">Proses dipinjam</option>
                                <option value="Dikembalikan">Dikembalikan</option>
                                <option value="Proses Dikembalikan">Proses Dikembalikan</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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