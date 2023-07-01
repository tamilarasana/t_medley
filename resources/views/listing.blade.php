@extends('layout.main')

@section('content')

  @foreach ($subcategories as $key => $sub_cat)
  @php
  $image = $sub_cat->images->first();
  @endphp
    @if ($key % 2 == 0)
      <section class="o-section-img-text px-5 pt-5" style="margin-top: 0">
        <div class="row">
        <div class="col-md-6 p-0 p-md-5">
          <img
          style = "width: 35rem; height: 25rem;"
          class=""
          src="{{ url('../storage/'.$image->file_path) }}"
          alt="An authentic French coffee shop !"
        />
        </div>
        <div class="col-md-6">
          <h3 class="mt-0" style="font-family: 'Fleur De Leah', cursive; font-weight: bold; font-size: 2rem;color: #0c8281;text-transform: none;">{{ $sub_cat->sub_title }}</h3>
        <p></p>
        <p>
            {!! substr($sub_cat->description, 0, 300) !!}....
        </p>
        <a class="btn mr-5 mb-3 mb-sm-0" href="{{ route('details', ['subcategory' => $sub_cat]) }}">Buy Now</a>
        <a class="btn-holder"><a href="{{ route('add.to.cart', $sub_cat->id) }}"class="btn mr-5 mb-3 mb-sm-0" role="button">Add to cart</a>
        </div>
        </div>
      </section>
      <br class="clear-fix">
    @else
      <section class="px-5 pt-5">
        <div class="row flex-column-reverse flex-md-row">
            <div class="col-md-6">
              <h3 class="mt-3 mt-md-0" style="font-family: 'Fleur De Leah', cursive; font-weight: bold; font-size: 2rem;color: #0c8281">{{ $sub_cat->sub_title }}</h3>
              <p>
                {!! substr($sub_cat->description, 0, 300) !!}....
              </p>
              <a class="btn mr-5 mb-3 mb-sm-0" href="{{ route('details', ['subcategory' => $sub_cat]) }}">Buy Now</a>
              <a class="btn-holder"><a href="{{ route('add.to.cart', $sub_cat->id) }}"class="btn mr-5 mb-3 mb-sm-0" role="button">Add to cart</a>
              <p style="clear: both;"></p>
            </div>
            <div class="col-md-6 pl-0 pl-md-5">
              <img
                  style = "width: 35rem; height: 25rem;"
                  class="mx-auto"
                  src="{{ url('../storage/'.$image->file_path) }}"
                  alt=""
                 />
            </div>
        </div>


        <!-- <hr style="margin-bottom: 0"> -->
      </section>
      <br class="clear-fix">
    @endif
  @endforeach
@endsection
