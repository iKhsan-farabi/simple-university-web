@extends('admin.layouts.app');
@section('content')
<div class="pagetitle">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Data Mata Kuliah</h1>
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
            <h5 class="card-title">Edit Data Mata Kuliah</h5>

            <!-- General Form Elements -->
            <form action="{{ route('matkul.update', $matkul->id) }}" method="POST">
                @csrf
                @method('PUT')
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" value="{{ $matkul->nama }}">
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="kategori">
                        <option value="Prodi" {{ $matkul->kategori === 'Prodi' ? 'selected' : '' }}>Prodi</option>
                        <option value="Umum" {{ $matkul->kategori === 'Umum' ? 'selected' : '' }}>Umum</option>
                        <option value="Agama" {{ $matkul->kategori === 'Agama' ? 'selected' : '' }}>Agama</option>
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
                        <a class="btn btn-success" href="{{ route('matkul.index') }}"><i class="bi bi-table"></i> Lihat</a>
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