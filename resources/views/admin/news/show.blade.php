@extends('layouts.app')

@section('content')

<div class="blog" id="blog">
<div class="row g-5 mt-3">
  <div class="col-lg-8">
   
    <article class="blog-details">
        <div class="mb-4">
            <p><a href="{{ route('news') }}">Kembali</a></p>
        </div>
      <div class="post-img">
        <img src="{{ asset('img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
      </div>
      <h2 class="title">{{ $news->title }}</h2>
      <div class="meta-top">
        <ul>
          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{ $news->author }}</a></li>
          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="{{ $news->created_at }}">{{ $news->created_at }}</time></a></li>
        </ul>
      </div>
      <div class="content">
        <p>{!! $news->content !!}</p>
      </div>
    </article>
    <div class="post-author d-flex align-items-center">
      <img src="{{ asset('img/blog/blog-author.jpg') }}" class="rounded-circle flex-shrink-0" alt="">
      <div>
        <h4>{{ $news->author }}</h4>
        <div class="social-links">
          <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
          <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
          <a href="https://instagram.com/#"><i class="bi bi-instagram"></i></a>
        </div>
        <p>
          Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="sidebar">
      <div class="sidebar-item popular-posts">
        <h3 class="sidebar-title">Postingan Lain</h3>
        <div class="mt-3">
            @foreach ($similarpost as $post)
            <div class="post-item clearfix">
                <h4><a href="{{ route('news.show', $post->slug) }}">{{ $post->title }}</a></h4>
                <time datetime="{{ $post->created_at }}">{{ $post->created_at }}</time>
              </div>
            @endforeach
        </div>
    </div>
    </div>
  </div>
</div>
</div>

@endsection
