@extends('admin.layouts.app');
@section('content')
<div class="pagetitle">
  @if(session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
    <h1>Data Berita</h1>
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
            <h5 class="card-title">Data Berita</h5>
            <p>Tabel data berita adalah wadah untuk menyimpan informasi penting tentang berita secara terstruktur.</p>
            <div class="mb-3">
              <a class="btn btn-primary" href="{{ route('news.create') }}">Tambah Berita</a>
          
            </div>
            
            <!-- Table with stripped rows -->
            <table class="table datatable" id="myTable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Content</th>
                  <th scope="col">Author</th>
                  <th scope="col">Created At</th>

                  
                </tr>
              </thead>
              <tbody>

                @foreach ( $news as $item )
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->slug }}</td>
                    <td>{{ Str::limit($item->content, 20) }}</td>
                    <td>{{ $item->author }}</td>
                    <td>{{ $item->created_at }}</td>

                    <td>
                      <div class="btn-group btn-group-sm" role="group" aria-label="Aksi">
                        <form action="{{ route('news.destroy', $item->id) }}" method="POST">
                            <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
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
