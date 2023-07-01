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
        <h1 class="text-center">SHIPPING INFO</h1>
        <p>Order placed before 5 pm IST (Indian Standard Time) will be processed within the next 24 hours and shipped on the same or next working day. If courier service is not available for a particular place in India, the products will be sent through the services of the Indian Postal Department. Orders received during Indian public holidays and Sundays will be processed on the following working day.</p>
        <h3>Shipment within India</h3>
        <p>Confirmed domestic orders will be shipped via third party trusted courier partner. Shipping costs are not included in the price of the product listed on the website. The shopping cart adds shipping charges according to weight, packaging and pin code of a particular order.</p>
        <h3>Shipment outside India</h3>
        <p>Confirmed international orders will be shipped via DHL, FedEx, etc., depending on the best courier service available in that area. The shopping cart adds international shipping charges according to the total weight and packaging of the order. T-Medley will not be responsible for damages to the shipment during custom checking and clearances.</p>
        <h3>CASH ON DELIVERY (COD)</h3>
        <p>We are proud to state that we offer Cash on Delivery services for our customers. Cash on Delivery is charged at an extra of Rs. 80/- per order and is available for select pin codes. If you do not see a COD shipping method then your postal code will not be eligible for Cash on Delivery. We are constantly working on increasing our coverage of COD orders across India. Cash on Delivery is temporarily unserviceable.</p>
        <h3>Delivery</h3>
        <p>Within India: 3 - 5 Working Days <br/>Outside India: 7 - 10 Working Days<br/>Please note: These are approximates. You could receive the parcel earlier or later.</p>
        <h3>Where In India Can We Deliver?</h3>
        <p>Products purchased through us can be delivered to nearly 10000 pin codes (areas) across India.</p>
        <h3>Are there any costs such as delivery charges, taxes etc.?</h3>
        <p>Shipping charges are not included in the sales price as they vary from place to place. Based on the shipping address you select, shipping charges are calculated, and will reflect in your shopping cart while you check out for making payment. Wherever applicable, additional taxes or charges during transport especially in case of hand delivery will be collected from the consignee, at actual</p>
        <h3>How the delivery charge is calculated for multiple units?</h3>
        <p>The delivery charges are applicable once you ‘Proceed to checkout’. We do not apply separate</p>
        <h3>How will you know the delivery is complete?</h3>
        <p>An e-mail along with the shipping details will be sent to you informing you that your order has been shipped / delivered.</p>
        <h3>How can you cancel your order?</h3>
        <p>Please note that cancellations have to be made within a maximum 24 hours of placing an order.<br/>
        A formal email specifying the Order Number has to be sent to us within 24 hours of placing the order. However, cancellation of an order will not be accepted if the order has been processed. For cancelling your order, a cancellation fee of 10% on the invoice value will be charged and the balance amount will be refunded. The customer agrees that the company’s decision is final in accepting or denying the cancellation request.</p>
        <h3>What if the delivery doesn’t happen or is delayed?</h3>
        <P>Delays may happen due to conditions or circumstances beyond our control, which may include situations arising out of strikes, fire, arson, riots, earthquakes, floods, etc. However, at the time of delivery, when the recipient of the order is not at home, if the address is incorrect or has been changed, we will take maximum efforts to deliver it on the next working day. Please note that in case of non-delivery due to an error on our part, T-Medley reserves the right to cancel the order and refund the total amount to the customer.</P>
        <h3>Can you send personalized message with a gifting order?</h3>
        <p>Yes, you can send personalized messages/greetings along with your gifting order. Just type in your message in the message box in the order form. Your message will be printed on our special card and sent along with the order. Gift wrapping your order is also possible at additional nominal charges.</p>
      </div>
      
    </div>
  </div>
@endsection
