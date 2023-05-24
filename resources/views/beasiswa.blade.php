@extends('layouts.app')
@section('content')

  
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Beasiswa</h5>
          <p>Tabel data beasiswa adalah wadah untuk menyimpan informasi penting tentang beasiswa secara terstruktur.</p>
          <div class="mb-3">
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