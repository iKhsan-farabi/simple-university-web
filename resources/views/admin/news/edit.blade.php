@extends('admin.layouts.app');
@section('content')

<div class="pagetitle">
    @if(session('success'))
        <div class="alert alert-success">
      {{ session('success') }}
        </div>
    @endif
    <h1>Form Berita</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Berita</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Nama Berita</h5>
            <form action="{{ route('news.update' , $news->id) }}" method="POST">
                @csrf
                @method('PUT')
            <input type="text" class="form-control" name="title" value="{{ $news->title }}">
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Slug</h5>
            <div class="col-lg-3">
            <input type="text" class="form-control" name="slug" value="{{ $news->slug }}">
            </div>  
        </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Author</h5>
            <div class="col-lg-5">
                <input type="text" class="form-control" name="author" value="{{ $news->author }}">

                </div>  
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Isi Berita</h5>
  
            <!-- Quill Editor Full -->
        
              <div id="quill-editor">
                <textarea name="content" class="form-control" cols="30" rows="10">{!! $news->content !!}</textarea>
                </div>

                <input type="hidden" id="content" name="content">
            
              <div class="btn btn-group-sm mt-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('news.index') }}" class="btn btn-success">Lihat</a>
              </div>
          
  
            <!-- End Quill Editor Full -->
  
          </div>
        </div>
      </div>
    </div>
</form>
  </section>

  <!-- Tambahkan skrip JavaScript untuk menginisialisasi Quill Editor -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
  let quill = new Quill('#quill-editor', {
    theme: 'snow'
    // Konfigurasi lain yang Anda inginkan
  });

// Mendapatkan elemen input tersembunyi
let quillContentInput = document.getElementById('content');

// Menyimpan konten Quill ke dalam input tersembunyi saat tombol diklik
function saveQuillContent() {
    let quillContent = quill.root.innerHTML;
    quillContentInput.value = quillContent;
}

// Menjalankan fungsi saveQuillContent() saat ada perubahan pada konten editor Quill
quill.on('text-change', function() {
    saveQuillContent();
});

</script>
  
@endsection