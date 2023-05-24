@extends('layouts.app')
@section('content')

<section id="recent-blog-posts" class="recent-blog-posts">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Berita</h2>
      <p>Recent posts form our Berita</p>
    </div>
    <div class="row">
      @foreach ($news as $item )
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="post-box">
          <div class="post-img">
            <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="meta">
            <span class="post-date">{{ $item->created_at }}</span>
            <span class="post-author">{{ $item->author }}</span>
          </div>
          <h3 class="post-title">{{ $item->title }}</h3>
          <p>{{ Str::limit($item->content, 100) }}</p>
          <a href="{{ route('news.show', $item->slug) }}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      @endforeach
    </div>


</section><!-- End Recent Blog Posts Section -->
  @endsection
  