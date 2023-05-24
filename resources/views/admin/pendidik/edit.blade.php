@extends('admin.layouts.app');
@section('content')
<div class="pagetitle">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Data Pendidik</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-9">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Data Pendidik</h5>

            <!-- General Form Elements -->
            <form action="{{ route('pendidik.update', $pendidik->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label" name="nip">NIP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nip" maxlength="8" value="{{ $pendidik->nip }}">
                    </div>
                  </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" value="{{ $pendidik->nama }}">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="jabatan">
                      <option value="Ketua Prodi" {{ $pendidik->jabatan === 'Ketua Prodi' ? 'selected' : '' }}>Ketua Prodi</option>
                      <option value="Dekan" {{ $pendidik->jabatan === 'Dekan' ? 'selected' : '' }}>Dekan</option>
                      <option value="Staff" {{ $pendidik->jabatan === 'Staff' ? 'selected' : '' }}>Staff</option>
                      <option value="Dosen" {{ $pendidik->jabatan === 'Dosen' ? 'selected' : '' }}>Dosen</option>
                      <option value="Rektor" {{ $pendidik->jabatan === 'Rektor' ? 'selected' : '' }}>Rektor</option>
                    </select>
                </div>
            </div>
            
              
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Aksi</label>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-3">
                      <div class="btn-group btn-group-sm">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil"></i> Simpan</button>
                        <a class="btn btn-success" href="{{ route('pendidik.index') }}"><i class="bi bi-table"></i> Lihat</a>
                      </div> 
                    </div>
               
               
                  </div>
                </div>
              </div>              
            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection