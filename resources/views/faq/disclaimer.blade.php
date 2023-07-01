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
      <div class="col-12 col-md-8 line mb-5 justify">
        <h1 class="text-center">DISCLAIMER</h1>
        <p>Testimonials, reviews and images found at T-Medley.com and/or from T-Medley are unverified results that have been forwarded to us by users of our products; may not reflect the typical user experience; may not apply to the average person; and are not intended to represent or guarantee that anyone will achieve the same or similar results. You should always perform your own research and not take such results at face value. It is possible that even with perfect use of our products, you will not achieve the results described or shown. They are meant to be a showcase of the best results our products have produced, and should not be taken as the results a typical user will get.</p>
        <p><b>T-Medley, A Brand of Rovadar Enterprises Pvt. Ltd. (“T-Medley”)</b> offers a full refund if an order is cancelled (in the manner described below) prior to the earlier of: (i) two (2) hours after the time the order is placed; and (i) the time the order is prepared for shipment. Requests to cancel an order must be made via e-mail and include a direction to cancel the order and the subject line "CANCEL ORDER".</p>
        <p>Incorrect orders or an error made on T-Medley’s behalf will be reissued or refunded, as applicable. After your order has been shipped, due to the consumable and perishable nature of the products, T-Medley does not offer refunds, returns or exchanges.</p>
        <p>Please note that while certain products do promote results, due to the unique habits, routines and diets of each customer: (i) T-Medley does not make any guarantees with respect to the results or effects of using any product; and (ii) no refunds, returns or exchanges will be permitted where a product does not have the desired effects or results or causes undesired side effects. In any event, if you believe a product is not having the desired effects or results, please feel free to e-mail T-Medley for assistance with enhancing your experience.</p>
      </div>
      
    </div>
  </div>
@endsection
