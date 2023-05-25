@extends('admin.layouts.app');
@section('content')
<div class="pagetitle">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <h1>Data Profile</h1>
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
            <h5 class="card-title">Edit Data Profile</h5>

            <!-- General Form Elements -->
            <form action="{{ route('profile.update', $profile->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label" name="visi">Visi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="visi" value="{{ $profile->visi }}">
                    </div>
                  </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Misi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="misi" value="{{ $profile->misi }}">
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Aksi</label>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-3">
                      <div class="btn-group btn-group-sm">
                        <button type="submit" class="btn btn-warning"><i class="bi bi-pencil"></i> Simpan</button>
                        <a class="btn btn-success" href="{{ route('profile.index') }}"><i class="bi bi-table"></i> Lihat</a>
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