@extends('layout.main')

@section('content')
<section class="pt-5">
  <div class="row">
    <div class="col-md-7">
      <div class="row pl-md-5">
        <div class="col-md-3 pr-5">
          @foreach ($images as $image)
          <img src="{{ url('../storage/'.$image->file_path) }}" alt="{{ $subcategory->sub_title }}" class="m-3" style="cursor: pointer" onclick="changePic(event)">
          @endforeach

        </div>
        @foreach ($images as $image)
          @if($loop->first)
        <div class="d-none d-md-block col-md-9 mt-3">
           <img src="{{ url('../storage/'.$image->file_path) }}" alt="{{ $subcategory->sub_title }}" id="view_pic" style="height: 25rem; width:35rem">
        </div>
        @endif
        @endforeach
      </div>

    </div>
    <div class="col-md-5 px-5 d-flex justify-content-center align-items-center d-md-block">
      <div>
        <h1 class="mt-5" style="font-weight: bold; color: #0c8281">{{ $subcategory->sub_title }}</h1>
        <h3>₹{{ $subcategory->price_from  }} @if ($subcategory->price_to != NULL)

        - ₹{{ $subcategory->price_to }}@endif</h3>
          {{-- <form action="{{ route('dashboard.user.fill.cart', ['subcategory' => $subcategory]) }}" method="GET">
            @csrf
          <p class="w-50 mb-5">
          <select name="" id="" class="form-control custom-select" required>
            <option selected>Select Quantity</option>
            <option value="100g">100g</option>
            <option value="250g">250g</option>
            <option value="500g">500g</option>
            <option value="1000g">1000g</option>
          </select>
        </p>
        <button type="submit" class="btn mb-5"href="">Add To Cart</button>
        @if (session()->has('success'))
        <p class="text-danger"><small>Added in Cart</small></p>
        @endif
        @if (session()->has('failure'))
        <p class="text-danger"><small>Already Exist in Cart</small></p>
        @endif
        </form> --}}
      <p class="justify">
          {!! $subcategory->description !!}
      </p>
      </div>

    </div>
  </div>
  <div class="row ml-3 ml-md-5 mt-5">
    <div class="col-md-6">
      <h1>FLAVOUR PROFILE</h1>
      <div class="row">
      <div class="col-md-6">
        <h3> <b> Liquor</b></h3>
        <p> {{ $subcategory->liquor }}</p>

        <h3> <b> Flavour</b></h3>
        <p> {{ $subcategory->flavour }}</p>
      </div>
      <div class="col-md-6">
        <h3> <b> Caffeine Content</b></h3>
        <p> {{ $subcategory->caffeine }}</p>

        <h3> <b> Ingredients</b></h3>
        <p> {{ $subcategory->ingredients }}</p>
      </div>
      </div>

    </div>
  </div>
  <div class="row my-5">
    <div class="col-12 d-flex justify-content-center align-items-center d-md-block">
      <div>
      <h3 class="text-center mb-5" style="font-weight: bold; font-size: 2rem;color: #0c8281">You might also like</h3>
      <div class="row px-5 justify-content-center align-items-center">
        @foreach ($related_data as $data)
        @php
        $image = $data->images->first();
        @endphp
          <div class="col-md-3">
            <img style="width: 21rem; height:15rem;" src="{{ url('../storage/'.$image->file_path) }}" alt="" class="mx-auto">
            <a href="{{ route('details', ['subcategory' => $data]) }}">
                <h5 class="text-center mt-4" style="font-size: 1.4rem">{{ $data->sub_title }}</h5>
            </a>

          </div>
        @endforeach
      </div>
      </div>

    </div>
  </div>
</section>
@endsection
