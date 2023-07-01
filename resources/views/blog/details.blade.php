@extends('layout.main')

@section('content')
<div class="container">
            <h1 class="edica-page-title" style="padding-bottom: 33px;">{{ $blog->title }}</h1>
            <p class="edica-blog-post-meta">Written by Richard Searls {{ $blog->created_at->format('d M Y')  }}</p>
            <section class="blog-post-featured-img aos-init aos-animate" data-aos="fade-up">
                <img src="{{ url('../storage/app/public/'.$blog->blog_image) }}" alt="featured image" class="w-75 mx-auto">
            </section>
            <section class="post-content mt-5">
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                        <p>
                            {!! $blog->description !!}
                        </p>
                    </div>
                </div>
            </section>
            <div class="row mb-5">
                <div class="col-lg-9 mx-auto">
                    <section class="related-posts">
                        <h2 class="section-title mb-4 text-center">Related Posts</h2>
                        <div class="row justify-content-around align-items-center">
                            @foreach($related_data as $data)
                            <div class="col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{ url('../storage/app/public/'.$data->blog_image) }}" alt="related post" class="post-thumbnail mx-auto">
                                <a href="{{ route('blog.details', ['blog' => $data]) }}"><h5 class="post-category text-center mt-4">{{ $data->title }}</h5></a>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    {{-- <section class="comment-section">
                        <h2 class="section-title mb-5" leave="" a="" reply<="" h2="">
                        <form action="/" method="post">
                            <div class="row">
                                <div class="form-group col-12">
                                <label for="comment" class="sr-only">Comment</label>
                                <textarea name="comment" id="comment" class="form-control" placeholder="Comment" rows="10">Comment</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name*">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email" class="sr-only">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email*" required="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="website" class="sr-only">Website</label>
                                    <input type="url" name="website" id="website" class="form-control" placeholder="Website*">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" value="Send Message" class="btn btn-warning">
                                </div>
                            </div>
                        </form>
                    </h2></section> --}}
                </div>
            </div>
        </div>
@endsection