@extends('layouts.app')
@section('content')

  
<section class="section">
  
  
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Dosen</h5>
          <p>Tabel data dosen adalah wadah untuk menyimpan informasi penting tentang dosen secara terstruktur.</p>

          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pendidik as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->jabatan }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>

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