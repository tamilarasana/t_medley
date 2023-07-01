@extends('layout.main')

@section('content')
<div class="container px-lg-5 pt-lg-5 justify">
<div class="row px-lg-5 my-5">
  <div class="col-xl-6">
    <h1 class="text-center" style="font-family: 'Fleur De Leah', cursive; font-size: 5rem; margin-top: -10px;">About Us</h1>
  </div>
  <div class="col-xl-6">
    <p class="px-5">The light of curiosity sparked into a passion and gave us a green light on establishing a company that would specialize in teas and tisanes. This is an art, we take great pride in and we are humbled to see the work roll out from our artisans every day. Well, we nurtured nature and took it to school. This is how we found ourselves exploring a tea garden to learn the best of techniques for making exotic cuppas; The beginning of T-Medley.</p>
    <p class="px-5">Wanna hear our Story? Pour yourself some tea. Pull up a chair and click your way through to read some of our medley moments.<a href = "{{ route('our.story') }}"class=""> Click Here!</a>
    </p>
  </div>
</div>
<div class="row px-lg-5 my-5">
  <div class="col-xl-6 pt-5 pb-5 pb-md-0 text-center">
    <h1 style="font-family: 'Fleur De Leah', cursive;font-size: 5rem;">Mission and Vision</h1>
      <p>T- Medley was founded on the belief that tea shouldn’t just be a simple drink. </p>
      <p>Our goal is to change the way you think about teas and tisanes by delivering you some of our chosen products at profoundly fair prices.</p>
  </div>
  {{-- <div class="col-xl-6 px-5 pt-5">
    <h1 class="mt-5">Join Us</h1>
    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum natus facere dignissimos reprehenderit vero voluptatem doloremque impedit eos repellat porro sapiente qui beatae excepturi deleniti non, corrupti ipsa exercitationem. Molestias, nostrum aut? Dolorum neque inventore veritatis voluptates ut. Impedit dolor repellat accusantium esse dolorem, iusto molestiae! Inventore, veniam placeat. Minus.</p>
  </div> --}}
 
</div>

 <div class="col-xl-12 px-5 pt-5 mb-5 text-light text-center">
  <!-- Carousel Section Starts -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height:75vh;">
   <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="{{ asset('images/about/01.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img src="{{ asset('images/about/02.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/about/03.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/about/04.jpg') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/about/05.jpg') }}" class="d-block w-100" alt="...">
      </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
   <span class="carousel-control-next-icon" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
   </a>
</div>
<!-- Carousel Section Ends -->
  </div>

<!-- <div class="row px-5" style="height: 10px;">
  <div class="col-xl-6 d-flex justify-content-center pt-5" style="position: relative;top: -573px;">
    <div class="w-50" id="about-bg-bottom" >
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. In, quidem at consequatur blanditiis, officiis beatae ex vero voluptates necessitatibus nam velit dolor quod iure totam quos quae eum perferendis, quisquam consequuntur eaque id illum facilis ipsum non. Odit, repellendus consequatur voluptatibus reiciendis laborum, doloremque deserunt error eos dolorum dolorem necessitatibus!</p>   
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste minima magni, nihil pariatur asperiores porro accusantium dolorum praesentium nulla quos doloremque incidunt doloribus a sunt. Iusto ducimus, ratione quos tenetur amet qui culpa perspiciatis, eos ipsum esse saepe obcaecati commodi! Blanditiis deleniti voluptatum perferendis dicta dolorem cupiditate magni accusantium voluptate!</p> 
    <button class="btn" style="background-color: #00734c; color: white">Apply Today</button>
  </div>
      
  </div>
  <div class="col-xl-6 px-5 pt-5" id="about-quote-div">
  <div style="height: 300px;">

  </div>
    <h5 class="my-5">Lorem ipsum dolor sit amet consectetur.</h5>
    <p class="p-0 m-0"><i class="fas fa-quote-left fa-2x" style="color: #00704c"></i></p>
    <p class="w-75" style=" word-spacing: 5px; font-size: 1.5rem;">The secret of life is honesty and fair dealing. if you can fake that you have got it made.</p>
    <p>Lorem ipsum dolor sit amet consectetur.</p>
    <p>
    <i class="far fa-arrow-alt-circle-left fa-2x mr-4"></i> 
    <i class="far fa-arrow-alt-circle-right fa-2x"></i>
  </p>
  </div>
</div> -->
</div>

 
@endsection