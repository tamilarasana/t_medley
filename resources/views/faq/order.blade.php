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
        <h1 class="text-center">ORDER CANCELLATION</h1>
        <h3>How do I Cancel my order?</h3>
        <p>Please note that cancellations have to be made within a maximum 24 hours of placing an order. Send us an email to support@tmedley.com specifying the Order Number. . However, cancellation of an order will not be accepted if the order has been processed. For cancelling your order, a cancellation fee of 10% on the invoice value will be charged and the balance amount will be refunded. The customer agrees that the company’s decision is final in accepting or denying the cancellation request.</p>
        <h3>How will you refund my money?</h3>
        <p>Once the order is cancelled, T-Medley will process the refund based on your choice mode of refund. In such case, the money will be debited back to your account. However this typically may take about 7-10 working days.</p>
        <h3>I am not satisfied with your tea or I received a wrong shipment. What will happen now?</h3>
        <p>Through our Micro-Production method we make sure that a customer receives only the highest quality tea which is our top priority. However if you think that your cuppa is not up to the mark with an issue in quality or quantity, feel free to reach out to us either through our helpline e-mail or contact us through the given contact number. We’ll be more than happy to help you out with the best possible solution.</p>
        <h3>How to return my order?</h3>
        <p>We take great pride in delivering the freshest tea there is. Just like a fruit or vegetable, even tea is perishable. So T-Medley doesn’t do returns. Instead Whatsapp us or Contact us directly and we will make sure that we will resolve your issue instantly. In the end, all that matters to us is your satisfaction.</p>
      </div>
      
    </div>
  </div>
@endsection
