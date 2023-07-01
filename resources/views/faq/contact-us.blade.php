@extends('layout.main')

@section('content')
@push('styles')
<style>
  .line{
    border-left: 1px solid black;
  }

  @media (max-width: 768px) {
    .line{
    border-left: none;
  }
  }
</style>
@endpush
  <div class="container">
    <div class="row mt-5 pt-5">
      <div class="col-md-1"></div>
      <div class="col-12 col-md-2 text-left">
        <h3>HELP WITH</h3>
        <p><a href="{{ route('faq') }}">FAQ</a></p>
        <p><a href="{{ route('suggestion') }}">Suggestion</a></p>
        <p><a href="{{ route('purchase.policy') }}">Purchase Policy</a></p>
        <p><a href="{{ route('order.cancellation') }}">Order Cancellation</a></p>
        <p><a href="{{ route('shipping.info') }}">Shipping Info</a></p>
        <p><a href="{{ route('disclaimer') }}">Disclaimer</a></p>
        <p><a href="{{ route('cookies.policy') }}">Cookies Policy</a></p>
        <p><a href="{{ route('privacy.policy') }}">Privacy Policy</a></p>
        <p><a href="{{ route('terms') }}">Terms & Conditions</a></p>
        <p><a href="{{ route('contact.us') }}">Contact Us</a></p>
      </div>
      <div class="col-12 col-md-8 line mb-5">
      <h1 class="text-center">CONTACT US</h1>

      <h3>Web Support</h3>
      <p><b>Guest Support / Medley Circle Support/ Questions</b><br/><a href = "mailto: support@tmedley.com">support@tmedley.com</a></p>

      <p><b>Press Inquiries/ Brand Partnership Inquiries</b><br/><a href = "mailto: info@rovadar.com">info@rovadar.com</a></p>

      <h3>Our Office</h3>
      <p>Address<br/>Rovadar Enterprises Pvt. Ltd.<br/>95,1st Main Road, Maruthi Nagar,<br/> Yelahanka, Bangalore, Karnataka – 560064<br/>India.</p>

      <h3>Contact</h3><p>+91 – 72 04 50 29 16.</p>

      </div>
      
    </div>
  </div>
@endsection
