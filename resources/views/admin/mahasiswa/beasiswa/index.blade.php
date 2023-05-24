@extends('admin.layouts.app');
@section('content')
<div class="pagetitle">
  @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
    <h1>Data Beasiswa</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Beasiswa</h5>
            <p>Tabel data beasiswa adalah wadah untuk menyimpan informasi penting tentang beasiswa secara terstruktur.</p>
            <div class="mb-3">
              <a class="btn btn-primary" href="{{ route('beasiswa.create') }}">Tambah Beasiswa</a>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable" id="myTable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Beasiswa</th>
                  <th scope="col">Start</th>
                  <th scope="col">End</th>
                  <th scope="col">Kuota</th>
                  
                </tr>
              </thead>
              <tbody>

                @foreach ( $beasiswa as $item )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->start }}</td>
                    <td>{{ $item->end }}</td>
                    <td>{{ $item->kuota }}</td>
                    <td>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Aksi">
                        <form action="{{ route('beasiswa.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('beasiswa.edit', $item->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </div>
                  </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
  
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const table = document.querySelector('#myTable');
        new simpleDatatables.DataTable(table);
    });
</script>
