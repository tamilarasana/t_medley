<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <!-- FontAwesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
	<link rel="stylesheet" href="{{ asset('css/testimonial.css') }}">
	@stack('styles')
	<style>
	#navbar {
  position: fixed;
  top: 0;
  transition: top 0.3s;
	}
	</style>
	<title>Cafe Shop</title>


</head>

<body class="home header-xs-transparent header-over-hero">

   <!-- Mobile Navbar Starts-->
	<header class="o-headermobile js-o-header">
		@include('shared.mobile-header')
	</header>
	<!-- Mobile Navbar Ends -->

	<!-- Top Navbar Starts -->
	<header class="o-header o-header--absolute js-o-header" id="navbar">
		@include('shared.header')
	</header>
   <!-- Top Navbar Ends -->

	<main>
		@yield('content')
	</main>

	<!--Footer Section Starts  -->
	<footer class=o-footer>
		@include('shared.footer')
   </footer>

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	<script>
	var prevScrollpos = window.pageYOffset;
	window.onscroll = function() {
	var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-170px";
  }
  prevScrollpos = currentScrollPos;
}

// change Pic when Clicked
function changePic(e) {
	const viewPic = document.getElementById('view_pic');
	viewPic.src = e.target.src;
	console.log(e.target.src)
}


 // Scroll to top button
      var btn = $('#scroll-button');

   $(window).scroll(function() {
   if ($(window).scrollTop() > 300) {
         btn.css({"opacity": "1", "pointer-events": "auto"});
   } else {
         btn.css({"opacity": "0", "pointer-events": "none"});
   }
   });

   btn.on('click', function(e) {
   e.preventDefault();
   $('html, body').animate({scrollTop:0}, '300');
   });
</script>
</body>

</html>
