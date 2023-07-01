<div class="container md">
<div class=row>
   <div class="col-12 col-lg-10 offset-lg-1">
      <div class=row>
         <nav class="col o-footer__text">
            <ul class="text-center">
               <li>
                  <h4>
                     <a href={{ route('our.story') }}>Our Story</a>
                  </h4>
                  <!-- <ul>
                     <li class="o-footer__nav-item"><a class="footer" href="#">Cafe Shop</a></li>
                     <li class="o-footer__nav-item"><a class="footer" href="#">Cafe Shop</a></li>
                     <li class="o-footer__nav-item"><a class="footer" href="#">Cafe Shop</a></li>
                     </ul> -->
               </li>
               <li>
                  <h4>
                     <a href="{{ route('faq') }}" >FAQ</a>
                  </h4>
               </li>
               <li>
                  <h4>
                     <a href="{{ route('suggestion') }}" >Suggestion Box</a>
                  </h4>
               </li>
            </ul>
         </nav>
         <div class="col o-footer__text" style="border-left: 1px solid rgba(255, 255, 255, 0.5)">
            <a class=text-center href="{{ route('welcome') }}">
               <h3><img
                  class="logo lazyload" src="{{ asset('images/coffee.png') }}" alt="Cafe Shop"></h3>
            </a>
            <h4 class="text-center">A brand of ROVADAR</h4>
         </div>
         <div class="col o-footer__text text-center" style="border-left: 1px solid rgba(255, 255, 255, 0.5);">
            <h4>Call us at</h4>
            <h5><a
               class="tel_link" href="tel:+917204502916">+91 – 72 04 50 29 16</a>
               <p class="mt-1"><small>(9:00 hrs to 20:00 hrs)</small></p>
            </h5>
            <h4>Email us at</h4>
            <h5><a href = "mailto: support@tmedley.com"><small>support@tmedley.com</small></a>
            </h5>
            
            <h4>FOLLOW US AT</h4>
            <ul class="justify-content-center m-social-networks">
               <li><a target="_blank" href="https://www.facebook.com/Tmedleyofficialpage"><i class="fab fa-facebook-f"></i>
							 <span class="sro">Facebook</span></a></li>
               <li><a target="_blank" href="https://www.instagram.com/tmedleyofficial/"><i class="fab fa-instagram"></i>
							 <span class="sro">Instagram</span></a></li>
               <li><a target="_blank" href="https://twitter.com/tmedleyofficial"><i class="fab fa-twitter"></i>
							 <span class="sro">Twitter</span></a></li>
              {{--  <li><a target="_blank" href="#"><i class="fab fa-google-plus-g"></i>
							 <span class="sro">Google Plus</span></a></li> --}}
               <li><a target="_blank" href="https://www.linkedin.com/company/tmedleyofficial"><i class="fab fa-linkedin"></i>
							 <span class=sro>LinkedIn</span></a></li>
            </ul>
            <!-- <a class="btn btn--invert" href=/contact>Contact Us</a>  -->
         </div>
      </div>
      <div class="row">
         <nav class="col o-footer__credits">
            <ul>
               <li style="font-size: 1rem">Copyright 2021 – Rovadar | All Rights Reserved | <a href="{{ route('terms') }}">Terms & Conditions</a> | Seeds</li>
            </ul>
         </nav>
      </div>
   </div>
   <!-- </div> -->
</div>
<a class="c-action__gototop c-fonticon__icon-chevron--bottom" id="scroll-button" role="button" title="Scroll To Top"><i class="fas fa-arrow-up"></i></a>