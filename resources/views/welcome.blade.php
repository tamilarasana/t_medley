@extends('layout.main')

   <link rel="stylesheet" href="{{ asset('slick/slick/slick.css') }}">
   <link rel="stylesheet" href="{{ asset('slick/slick/slick-theme.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="{{ asset('slick/slick/slick.js') }}" type="text/javascript"></script>

@section('content')
<!-- Carousel Section Starts -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height:75vh;">
   <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
   </ol>
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="{{ asset('images/banner/banner1.jpg') }}" class="d-block w-100" alt="..." style="height:75vh;">
         
      </div>
      <div class="carousel-item">
         <img src="{{ asset('images/banner/banner2.jpg') }}" class="d-block w-100" alt="..." style="height:75vh;">
        
      </div>
      <div class="carousel-item">
         <img src="{{ asset('images/banner/banner3.jpg') }}" class="d-block w-100" alt="..." style="height:75vh">
        
      </div>
      <div class="carousel-item">
         <img src="{{ asset('images/banner/banner4.jpg') }}" class="d-block w-100" alt="..." style="height:75vh">
         
      </div>
      {{--  --}}
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
<!-- Here, we live, we share, we have fun Starts -->

<style type="text/css">
   .slick-next{
      color: #fff;
      background: #bbcab5;
   }
   .slick-next:hover{
      color: #fff;
      background: #bbcab5;
   }
   .slick-prev{
      color: #fff;
      background: #bbcab5;
   }
   .slick-prev:hover{
      color: #fff;
      background: #bbcab5;
   }
   .equalize{
      height: 450px;
   }
</style>

<section class="o-hero o-hero--text">
   <div class=container>
      <div class="row justify-content-center justify">
         <div class="col-10 col-lg-6">
            <h1 class="o-hero__title-lg o-section-title" style = "font-family: 'Fleur De Leah', cursive;">Creating Unique Adventure</h1>
            <p class="o-hero__text">Everyone deserves something that they would love. It’s that taste that is both familiar and decadent. It’s that moment of pleasure when your hands are warmed by a mug. It’s that life changing experience you encounter/ undergo/ come across/run into when u breathe in deeply through your nose and open your mouth slightly to taste the flavours that people always clamour all about. That’s when our teas and tisanes that are made with finest ingredients and are wrapped in a beautiful sustainable pack complement your life with happiness and artisanal craftsmanship.</p>
         </div>
      </div>
   </div>
</section>
<!-- Here, we live, we share, we have fun Ends -->
<hr class="plain d-lg-none">
<!-- d-lg-none starts -->
<!-- d-lg-none-ends -->
<!-- Who are we ? Section Starts -->
<section class="o-whoweare">
   <div class="container">
      <div class="row justify-content-center">
          <h2 class="o-hero__title-lg o-section-title" style = "font-family: 'Fleur De Leah', cursive;"><span>We believe in good cup of tea and a better company</span></h2>
         <div class="w-100"></div>
         <div class="col-md-6">
            <div class="row justify">
               <div class="col-md-12 mb-3 mb-md-0 mr-3 mr-md-0"> 
                  <div class="">            
               <p>It’s no secret that tea has existed for centuries. A cup of hot tea is perfect for making your insides feel warm and refreshed. We are as passionate about tea as you are. So, we decided to disrupt the overpriced and outdated tea flavours by creating something peculiar and worthy for everyone’s taste buds.</p>
               <p>Though we wanted our teas and tisanes to be peculiar, we also wanted our company to be a better one. That means taking into account all the morals and principles to treat everyone and everything in the most humane way. At T-Medley, we ensure that we build lasting relationships and also uphold a scrupulous social code.</p>
               </div>
             </div>
            </div>
         </div>
         <div class="col-md-6">
         <div class="row">
               <div class="col-md-6 mb-3 mb-md-0 mr-3 mr-md-0"> 
                     <img class="" src="images/idea/1.jpg" alt="cofee-img">
               </div>
               <div class="col-md-6 mb-3 mb-md-0 mr-3 mr-md-0"> 
                     <img class="" src="images/idea/2.jpg" alt="cofee-img">
               </div> 
         </div>
      </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-6">
            <div class="row justify">
               <div class="col-md-12 mb-3 mb-md-0 mr-3 mr-md-0"> 
                  
               <img class="" style="height: 250px; width: 100%;" src="images/idea/4.jpg" alt="cofee-img">
               </div>
            </div>

         </div>
         <div class="col-md-6">
            <div class="row justify">
               <div class="col-md-12 mb-3 mb-md-0 mr-3 mr-md-0"> 
                  
               <img class="" style="height: 250px; width: 100%;" src="images/idea/3.jpg" alt="cofee-img">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Who are we ? Section Ends -->
<hr class="plain d-lg-none">
<!-- Our Values Section Starts -->
<section class="o-values">
   <div class="container">
      <div class="row justify-content-center">
         <h2 class="o-values__title o-section-title c-xs-title-line brd col-12 col-lg-6" style = "font-family: 'Fleur De Leah', cursive;"><span>Our Ideologies</span></h2>
      </div>
      <div class="slider single-item">
         <div class="">   
              <img style="height:30rem" src="images/idea-slide/01.jpg" class="card-img-top" alt="...">
         </div>
         <div class="">   
              <img style="height:30rem" src="images/idea-slide/02.jpg" class="card-img-top" alt="...">
         </div>
         <div class="">   
              <img style="height:30rem" src="images/idea-slide/03.jpg" class="card-img-top" alt="...">
         </div>
         <div class="">   
              <img src="images/idea-slide/04.jpg" class="card-img-top" alt="...">
         </div>
         <div class="">   
              <img style="height:30rem" src="images/idea-slide/05.jpg" class="card-img-top" alt="...">
         </div>
      </div>

<script>
 $('.single-item').slick();
</script>
   </div>
</section>
<!-- Where to find our coffee shops? Ends -->
<hr class="plain d-lg-none">
<!-- follow us Section Starts -->
<section class=o-follow-us>
   <div class="container">
      <div class="row justify-content-center">
         <h2 class="o-follow-us__title o-section-title brd col-12 col-lg-6" style = "font-family: 'Fleur De Leah', cursive;"><span>Our Socials</span></h2>
         <div class="w-100"></div>
         <div class="o-follow-us__content col-12 col-lg-6 mt-5">
            <p>T–Medley is more than just a tea company. We are an active community.</p>
            <p>Follow us on </p>
            <ul class="m-social-networks mb-3">
               <li><a target="_blank" href="https://www.facebook.com/Tmedleyofficialpage"><i class="fab fa-facebook-f"></i>
                  <span class="sro">Facebook</span></a>
               </li>
               <li><a target="_blank" href="https://www.instagram.com/tmedleyofficial/"><i class="fab fa-instagram"></i>
                  <span class="sro">Instagram</span></a>
               </li>
               <li><a target="_blank" href="https://twitter.com/tmedleyofficial"><i class="fab fa-twitter"></i>
                  <span class="sro">Twitter</span></a>
               </li>
               {{-- <li><a target="_blank" href="#"><i class="fab fa-google-plus-g"></i>
                  <span class="sro">Google Plus</span></a>
               </li> --}}
               <li><a target="_blank" href="https://www.linkedin.com/company/tmedleyofficial"><i class="fab fa-linkedin"></i>
                  <span class=sro>LinkedIn</span></a>
               </li>
            </ul>
            <p>for a coup d’oeil of T-Medley's way of life.</p>
         </div>
      </div>
   </div>
</section>
<!-- follow us Section Ends -->
<hr class="plain d-lg-none">
<!-- Our Resource Hub Starts-->

<section class=o-follow-us>
   <div class="container">
      <div class="row justify-content-center">
         <h2 class="o-follow-us__title o-section-title brd col-12 col-lg-6" style = "font-family: 'Fleur De Leah', cursive;"><span>Our Resource Hub</span></h2>
         <section class="related-posts col-lg-12 mt-5">
            <img class="mx-auto" src="{{ asset('images/blog/soon-home.jpg') }}" alt="">

         {{-- <h2 class="section-title mb-4 text-center"></h2>
         
         <div class="row justify-content-around align-items-center">
            @foreach ($blogs as $blog)
            <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ route('blog.details', ['blog' => $blog]) }}">

               <img src="{{ url('../storage/app/public/'.$blog->blog_image) }}" alt="related post" class="post-thumbnail mx-auto">
               <h5 class="post-category text-center mt-4">{{ $blog->title }}</h5>
            </a>

            </div>
            @endforeach
         </div> --}}
      </section>
      </div>
   </div>
</section>

<!-- Our Resource Hub Ends-->
<hr class="plain d-lg-none">
<!-- Testimonial Section Starts -->
<section class=o-follow-us>
   <div class="container">
      <div class="row justify-content-center">
         <h2 class="o-follow-us__title o-section-title brd col-12 col-lg-6" style = "font-family: 'Fleur De Leah', cursive;"><span>What people are saying ?</span></h2>
         <div class="w-100"></div>
         <!-- <div class="o-follow-us__content col-12 col-lg-6">
            <p>The more bears we have, the more we laugh! #Graou</p>
            <ul class="m-social-networks">
            	<li><a href="#" target=_blank><i class="fab fa-amazon"></i><span
                                 class="sro">Facebook</span></a></li>
            	<li><a href="#" target=_blank><i class="fab fa-twitter"></i><span
                                 class="sro">Twitter</span></a></li>
            	<li><a href="#" target=_blank><i class="fab fa-instagram"></i><span
                                 class="sro">Instagram</span></a></li>
            	<li><a href="#" target=_blank><i class="fab fa-linkedin"></i><span
                                 class="sro">Linkedin</span></a></li>
            	<li><a href="#" target=_blank><i class="fab fa-pinterest"></i><span
                                 class="sro">Pinterest</span></a></li>
            </ul>
            </div> -->
         <!-- <div class=w-100></div>
            <div class="o-follow-us__insta col-12 col-lg-10">
            	<div class="row"></div>
            </div> -->
         <div class="o-follow-us__message col-12 col-lg-10">
            <section id="testim" class="testim">
               <!--         <div class="testim-cover"> -->
               <div class="wrap">
                  <span id="right-arrow" class="arrow right fa fa-chevron-right"></span> <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                  <ul id="testim-dots" class="dots">
                     <li class="dot active"></li>
                     <!---->
                     <li class="dot"></li>
                     <!--  -->
                     <li class="dot"></li>
                     <!-- -->
                     <li class="dot"></li>
                     <!--  -->
                     {{-- <li class="dot"></li> --}}
                  </ul>
                  <div id="testim-content" class="cont">
                     <div class="active">
                        <div class="img"><img src="images/testi/SaiPavan.jpg" alt=""></div>
                        <h2>Sai Pavan Maddela</h2>
                        <p style="color:black">I was skeptical about the taste at first, to be honest, but I tried Rosebiscus which was flavoursome. Never tasted unique blends like this. Looking forward to more blends from your brand.<br/>Good Going T-Medley..</p>
                     </div>
                     <div>
                        <div class="img"><img src="images/testi/shas.jpg" alt=""></div>
                        <h2>Shashikala Lakshman</h2>
                        <p style="color:black">Every Tea I have received from T-Medley is delicious and refreshing. My first experiences with the teas were delightful. Would surely recommend all tea lovers to give it a try.</p>
                     </div>
                     <div>
                        <div class="img"><img src="images/testi/sanjay.jpg" alt=""></div>
                        <h2>Sanjay Mahar</h2>
                        <p style="color:black">Really loved the taste profile of Rosebiscus. Very Refreshing. Could smell the aroma of Rose petals and Taste the hint of tangy Hibiscus. Great way to relax.</p>
                     </div>
                     <div>
                        <div class="img"> <img src="images/testi/rathan.jpg" alt=""></div>
                        <h2>Rathan M</h2>
                        <p style="color:black">I’m an enthusiast of tea, particularly tea that has health benefits and offers amazing taste! That’s exactly what I found out with Saint Basil here. The perfect drink to wind down a hectic day and relax by myself. Would Definitely Recommend it.</p>
                     </div>
                     {{-- <div>
                        <div class="img"><img src="images/testim-5.jfif" alt=""></div>
                        <h2>Ms. Lorem R. Ipsum</h2>
                        <p style="color:black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                     </div>
 --}}                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
</section>
<!-- testimonial Section Ends -->
<!-- d-lg-none Starts -->
<!-- <div class="container d-lg-none">
   <div class="row justify-content-center">
      <div class="col-12">
         <article class="o-action--image o-action--image--blue full-width lazyload js-bkg--defer" id="adventure" data-src="images/coffee-img-7.jpg">
            <h3 class="o-action__title">Join the Adventure</h3>
            <p class="o-action__text">At headquarters, in our coffee shops or to open your own Columbus, as long as you are greedy, do not hesitate to apply!</p>
            <p class="o-action__text"><a class="o-link--white" href="#">Our Current Offers</a></p>
            <p class="o-action__text"><a class="o-link--white" href="#">Spontaneous application</a></p>
            <p class="o-action__text"><a class="btn--invert" href="#">Become a Adventure</a></p>
         </article>
      </div>
   </div>
</div> -->
<!-- d-lg-none Ends -->
<!-- Our Key Figures Ends-->

<script src="{{ asset('js/testimonial.js') }}"></script>

@endsection