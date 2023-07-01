@extends('layout.main')

@section('content')
@push('styles')
<style type="text/css">
  .story{
    background-image: url('../images/blog/soon.jpg');
    /*background-position: center center;*/
    background-size: cover;
    background-repeat: no-repeat;
    /*height: 35rem;*/
  }
</style>
@endpush
<section class="edica-landing-section edica-landing-blog">
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-center align-items-center">
            <div class="">
            <img src="{{ asset('images/blog/soon.jpg') }}" alt="">
            </div>
          </div>
        </div>
        {{-- <h2 class="edica-landing-section-title">
          Check our app latest blog post <br />
          for more update.
        </h2>
        <div class="row mb-5">
          @foreach ($blogs as $blog)
            <div class="col-md-4 landing-blog-post mt-3">
              <img src="{{ url('../storage/app/public/'.$blog->blog_image) }}" alt="blog post" class="blog-post-thumbnail" />
              <p class="blog-post-category">{{ $blog->created_at->format('d M Y')  }}</p>
              <h4 class="blog-post-title">{{ $blog->title }}</h4>
              <a href="{{ route('blog.details', ['blog' => $blog]) }}" class="blog-post-link" style="font-size: 1.4rem;">Read more</a>
            </div>
          @endforeach
        </div> --}}
      </div>
    </section>
@endsection