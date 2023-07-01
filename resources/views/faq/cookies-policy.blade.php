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
        <h1 class="text-center">COOKIE POLICY</h1>
        <p>This Cookie Policy applies for the website of T-Medley a brand of Rovadar Enterprises Pvt. Ltd. referred to in the Imprint.</p>
        <p>US & EU legislation requires all website operators to inform website visitors about their usage of cookies and similar technologies, e.g. pixels, (hereinafter “cookies”) and to collect the user’s consent to such cookie usage.</p>
        <h3>Cookie Consent</h3>
        <p>If you visit our websites for the first time, you will see our Cookie Banner and, when you click on Cookies Settings, our Privacy Preference Center. Here you can execute choice and control over the cookies we drop on your device.</p>
        <h3>What are cookies?</h3>
        <p>Cookies are small text files which are sent to your device (Computer, Laptop, Smartphone, Tablet) by the website you visit. Cookies are stored on your device in your browser’s file directory. Your browser sends these cookies back to the website each time you revisit it so it can recognize your device and improve your user experience on each subsequent visit. Cookies allow us e.g. to tailor a website to better match your interests or to store your password so that you do not need to re-enter it every time.</p>
        <p>Please note that certain functions of our website may no longer work or work not correctly without cookies</p>
        <p>If you want to learn more about cookies and how they work, please visit:</p>
        <p><a href="www.allaboutcookies.org">www.allaboutcookies.org</a></p>
        <p>or:</p>
        <p><a href="www.youronlinechoices.eu">www.youronlinechoices.eu</a></p>
        <h3>Categories of cookies</h3>
        <p>Depending on their function and their intended purpose, cookies can be assigned to the following categories:  strictly necessary cookies, performance cookies, functional cookies and targeting cookies.</p>
        <h3>Strictly necessary cookies</h3>
        <p>Strictly necessary cookies are required to navigate our websites and operate basic website functions. Examples for strictly necessary cookies are login cookies, shopping cart cookies or cookies to remember your cookie settings. Without these cookies certain basic functionalities cannot be offered. Strictly necessary cookies are always active and will be placed without your consent.</p>
        <p>To the extent that information processed in connection with strictly necessary cookies should qualify as personal data, the legal ground for that processing is T-Medley’s legitimate interest to operate the website (Art. 6 (1) lit. (f) GDPR).</p>
        <h3>Performance cookies</h3>
        <p>Performance cookies – aka analytics cookies - collect information on your usage of our websites. They identify e.g. your internet browser, operating system, visited websites, duration and number of website visits, previously visited website, most commonly visited websites and errors you experienced. The information collected is aggregated and anonymous. It does not allow a personal identification. It only serves the purpose of evaluating and enhancing the user experience of our websites.</p>
        <p>To the extent that information processed in connection with performance cookies should qualify as personal data, the legal ground for that processing is your consent (Art. 6 (1) lit. (a) GDPR). </p>
        <h3>Functional cookies</h3>
        <p>Functional cookies enable a website to store information and options you have already previously entered (e.g. username, language settings, layout settings, contact preferences or your location) in order to offer you improved personalized functions. They are also used to enable requested functions, like playing videos</p>
        <p>To the extent that information processed in connection with functional cookies should qualify as personal data, the legal ground for that processing is your consent (Art. 6 (1) lit. (a) GDPR). </p>
        <h3>Targeting cookies</h3>
        <p>Targeting cookies – aka cookies for marketing purposes - are used to offer more relevant and interest-specific content to you, to limit the display frequency of ads and to measure the efficiency of an advertising campaign. They register if you have visited a promoted website or not, and which content you used. Such information may be shared with third parties, e.g. advertisers.</p>
        <p>Legal basis for the processing of personal data in connection with targeting cookies (if any) is your consent (Art. 6 (1) lit. (a) GDPR).</p>
        <h3>Cookies we use on our website</h3>
        <p>You may find further detailed information on cookies utilized by us in our Privacy Preference Center. Here, you can also provide or revoke your consent and/or change your cookie settings at any time.</p>
        <p>Updates<br>This Cookie Policy is updated from time to time.</p>
        <p>October 2021</p>
      </div>
      
    </div>
  </div>
@endsection
