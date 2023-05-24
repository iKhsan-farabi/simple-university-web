@extends('layouts.app')
@section('content')

  
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Mata Kuliah</h5>
          <p>Tabel data mata kuliah adalah wadah untuk menyimpan informasi penting tentang mata kuliah secara terstruktur.</p>
          <!-- Table with stripped rows -->
          <table class="table datatable" id="myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Kategori</th>
             </tr>
            </thead>
            <tbody>
              @foreach ( $matkul as $item )
              <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->kategori }}</td>
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