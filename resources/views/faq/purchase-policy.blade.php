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
        <h1 class="text-center">PURCHASE POLICY</h1>
        <h3>Your Account</h3>
        <p class="">If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. T-Medley does sell products for children, but it sells them to adults, who can purchase with a credit card or other permitted payment method. If you are under 18, you may use this site only with involvement of a parent or guardian. T-Medley reserves the right to refuse service, terminate accounts, remove or edit content, or cancel orders in their sole discretion.</p>
        <h3>Eligibility</h3>
        <p>You represent and warrant that you are competent and eligible (above 18 years) to enter into legally binding agreement and have the requisite authority to bind the other party to this Agreement. You shall not use this Site if you are not competent to contract under the applicable laws, rules and regulations.</p>
        <h3>Registration Data</h3>
        <p>To avail of and use the online services for purchasing our products, you will have to register with us. As a part of registration process you agree to provide current, complete, and accurate registration information (the "Registration Data") as prompted to do by during creating your account.</p>
        <p>If you provide any information or show reasonable grounds to suspect that such information is untrue, inaccurate not current or incomplete, T-medley has the right to indefinitely suspend or terminate your membership and refuse to provide you with access to the site and its services.</p>
        <p>You shall be responsible for maintaining the confidentiality of your password. T-Medley employees or agents, if any, will never ask for your password.</p>
        <p>You agree and understand that T-Medley service is advertising supported and you grant T-Medley right to disclose the aggregate Registration Data to third parties in connection with marketing the Services. Furthermore, you agree and grant T-Medley the right to use your individual Registration Data to provide targeting of advertisements and other Services.</p>
        <p>You shall notify support@tmedley.com of any known or suspected unauthorized use(s) of your account, or any known or suspected breach of security, including loss, theft, or unauthorized disclosure of your password.</p>
        <h3>Electronic Communication</h3>
        <p>User consents to receive communications from T-Medley electronically. T-Medley will communicate with users by email or by posting notices on the site.</p>
        <h3>Product Descriptions</h3>
        <p>Rovadar Enterprises Pvt. Ltd. attempts to be as accurate as possible. However, Rovadar Enterprises Pvt. Ltd.  does not warrant that product descriptions or other content of this site is accurate, complete, reliable, cur-rent, or error-free. If a product owned by Rovadar Enterprises Pvt. Ltd. itself is not as described, your sole remedy is to return it in unused condition.</p>
        <h3>Pricing</h3>
        <p>Except where noted otherwise, the list price displayed for products on our website represents the full retail price (MRP) listed on the product itself. Discounts on product’s list price are applicable on bulk orders only. Please contact us to know more. With respect to items sold on our website, we cannot confirm the final price of an item until you checkout for payment; however, we do NOT charge your credit card until your order been confirmed for shipping.</p>
        <h3>Credit Card Details</h3>
        <p>You agree, understand and confirm that the credit card details provided by you for availing of services on our website have to be correct and accurate and you shall not use the credit card which is not lawfully owned by you. You further agree and undertake to provide the correct and valid credit card details to T-Medley. Further the said information will be not being utilized and shared by T-Medley with any of the third parties unless required by law, regulation or court order.</p>
        <h3>Suspension Due To Non-Compliance with Agreement</h3>
        <p>Notwithstanding other legal remedies that may be available to T-Medley, may in its sole discretion limit user activity by immediately removing user listing either temporarily or indefinitely or suspend or terminate user membership, and/or refuse to provide user with access to the site,</p>
        <div class="pl-5">
          <p>1. If the user is in breach any of the terms and conditions of this Agreement and/or the Terms and conditions of usage;</p>
          <p>2. If the user has provided wrong, inaccurate, incomplete or incorrect information;</p>
          <p>3. If your actions may cause any harm, damage or loss to the other users or T-Medley;</p>
          <p>4. Illegal and/or un-authorized use of the Service, including unauthorized framing of or linking to the T-Medley website;</p>
          <p>5. Such acts will be investigated, and appropriate legal action will be taken, including without limitation, civil, criminal and injunctive redress</p>
        </div>
      </div>
      
    </div>
  </div>
@endsection
