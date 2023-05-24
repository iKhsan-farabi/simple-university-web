@extends('layouts.app')
@section('content')

  
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Aktivitas</h5>
          <p>Tabel data aktivitas adalah wadah untuk menyimpan informasi penting tentang aktivitas anda secara terstruktur.</p>
          <div class="mb-3">
          <!-- Table with stripped rows -->
          <table class="table datatable" id="myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Aktivitas</th>
                <th scope="col">Waktu</th>

                
              </tr>
            </thead>
            <tbody>

              @foreach ( $aktivitas as $item )
              <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $item->activity }}</td>
                  <td>{{ $item->timestamp }}</td>
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