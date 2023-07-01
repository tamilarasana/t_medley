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
        <h1 class="text-center">PRIVACY POLICY</h1>
        <p><b>“T-Medley”, A brand of Rovadar Enterprises Pvt. Ltd. </b><br/>Effective Date: September 20, 2021<br/>Last Updated Date: October 13, 2021</p>
        <p>PLEASE READ THIS TERMS OF USE AGREEMENT (THE <b>“TERMS”</b>) CAREFULLY. BY ACCESSING, BROWSING OR USING THE T-MEDLEY WEBSITE AVAILABLE AT WWW.TMEDLEY.COM OR ANY WEBSITE WITH LINKS TO THIS AGREEMENT (THE <b>“WEBSITE”</b>) IN ANY WAY OR CLICKING AN “I ACCEPT” OR SIMILAR BUTTON, YOU REPRESENT THAT (1) YOU HAVE READ, UNDERSTAND, AND AGREE TO BE BOUND BY THE TERMS, (2) YOU ARE OF LEGAL AGE TO FORM A BINDING CONTRACT WITH T-MEDLEY, AND (3) YOU HAVE THE AUTHORITY TO ENTER INTO THE TERMS ON BEHALF OF YOURSELF OR THE COMPANY YOU WORK FOR, AND TO BIND THAT COMPANY TO THESE TERMS. <b>IF YOU DO NOT AGREE TO BE BOUND BY THE TERMS, YOU MAY NOT ACCESS OR USE THIS WEBSITE.</b></p>
        <p><b>THESE TERMS INCLUDE A CLASS ACTION WAIVER AND A WAIVER OF JURY TRIALS, AND REQUIRE BINDING ARBITRATION ON AN INDIVIDUAL BASIS TO RESOLVE MOST DISPUTES.<br/>THESE TERMS LIMIT THE REMEDIES THAT MAY BE AVAILABLE TO YOU IN THE EVENT OF A DISPUTE.</b></p>
        <p>PLEASE NOTE THAT The Terms are subject to change by T-MEDLEY in its sole discretion at any time. When changes are made, T-MEDLEY will make a new copy of the Terms available at the Website. We will also update the “Last Updated” date at the top of the Terms. If we make any material changes, and you have provided us with your e-mail address, we will also send an e-mail to you at the last e-mail address you provided to us. Any changes to the Terms will be effective immediately for new users of the Website and will be effective for existing users upon the earlier of thirty (30) days after posting of notice of such changes on the Website or thirty (30) days after dispatch of an e-mail notice of such changes. T-MEDLEY may require you to provide consent to the updated Terms in a specified manner before further use of the Website is permitted. If you do not agree to any change(s) after receiving a notice of such change(s), you shall stop using the Website. Otherwise, your continued use of the Website constitutes your acceptance of such change(s). PLEASE REGULARLY CHECK THE WEBSITE TO VIEW THE THEN-CURRENT TERMS.</p>
        <h3>SECTION 1 - WHAT DO WE DO WITH YOUR INFORMATION?</h3>
        <p>When you purchase something from our Online Store, as part of the buying and selling process, we collect the personal information you give us such as your name, address and email address.<br/> 
        When you browse our store, we also automatically receive your computer’s internet protocol (IP) address in order to provide us with information that helps us learn about your browser and operating system.<br/>Email marketing (if applicable): With your permission, we may send you emails about our online store, new products and other updates.</p>
        <h3>SECTION 2 – CONSENT</h3>
        <p><b>How do you get my consent?</b><br/>When you provide us with personal information to complete a transaction, verify your credit card, place an order, arrange for a delivery or return a purchase, we imply that you consent to our collecting it and using it for that specific reason only.If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no. </p>
        <p><b>How do I withdraw my consent?</b><br/>If after you opt-in and you changed your mind, you may withdraw your consent from us to contact you, for the continued collection, use or disclosure of your information, at anytime, by contacting us at support@tmedley.com.</p>
        <h3>SECTION 3 – DISCLOSURE</h3>
        <p>We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service. </p>
        <h3>SECTION 4 – E-COMMERCE PLATFORM</h3>
        <p>Our store is hosted on E-Commerce Platforms. They provide us with the online e-commerce platform that allows us to sell our products and services to you. Your data is stored through the concerned e-commerce data storage, databases and the general e-commerce application. They store your data on a secure server behind a firewall.<br/><b>Payment:</b><br/> If you choose a direct payment gateway to complete your purchase, then e-commerce websites store your credit card data. It is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS). Your purchase transaction data is stored only as long as is necessary to complete your purchase transaction. After that is complete, your purchase transaction information is deleted<br/>All direct payment gateways adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover.<br/>PCI-DSS requirements help ensure the secure handling of credit card information by our store and its service providers.<br/>For more insight, you may also want to read the concerned e-commerce store’s Terms of Service or Privacy Statement.</p>
        <h3>SECTION 5 - THIRD-PARTY SERVICES</h3>
        <p>In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.<br/> However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.<br/>For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers.<br/>In particular, remember that certain providers may be located in or have facilities that are located a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.<br/>As an example, if you are located in Canada and your transaction is processed by a payment gateway located in the United States, then your personal information used in completing that transaction may be subject to disclosure under United States legislation, including the Patriot Act.<br/>Once you leave our store’s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service.<br/><b>Links</b><br/>When you click on links on our store, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements<br/><b>Google Analytics:</b><br/>Our store may use Google Analytics to help us learn about who visits our site and what pages are being looked at.</p>
        <h3>SECTION 6 – SECURITY</h3>
        <p>To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.<br/>If you provide us with your credit card information, the information is encrypted using secure socket layer technology (SSL) and stored with an AES-256 encryption. Although no method of transmission over the Internet or electronic storage is 100% secure, we follow all PCI-DSS requirements and implement additional generally accepted industry standards</p>
        <h3>SECTION 7 – COOKIES</h3>
        <p>Here is a list of cookies that we use. We’ve listed them here so you that you can choose if you want to opt-out of cookies or not.</p>
        <div class="pl-5">
          <p>1. Session_id, unique token, sessional:  Allows e-commerce websites to store information about your session (referrer, landing page, etc).</p>
          <p>2. E-commerce websites_visit, no data held, Persistent for 30 minutes from the last visit, Used by our website provider’s internal stats tracker to record the number of visits.</p>
          <p>3. E-commerce websites_uniq, no data held, expires midnight (relative to the visitor) of the next day, Counts the number of visits to a store by a single customer.</p>
          <p>4. Cart, unique token: persistent for 2 weeks, Stores information about the contents of your cart.</p>
          <p>5. Secure_session_id, unique token: sessional.</p>
          <p>6. Storefront_digest, unique token, indefinite if the shop has a password; this is used to determine if the current visitor has access.</p>
        </div>
        <p><b>Google Analytics:</b><br/>PREF, persistent for a very short period, set by Google and tracks who visits the store and from where.</p>
        <h3>SECTION 8 - AGE OF CONSENT</h3>
        <p>By using this site, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.</p>
        <h3>SECTION 9 - CHANGES TO THIS PRIVACY POLICY</h3>
        <p>We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.<br/>If our online store is acquired or merged with another company, your information may be transferred to the new owners so that we may continue to sell products to you.<br/>QUESTIONS AND CONTACT INFORMATION<br/>If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer at support@tmedley.com </p>
        <p><b>Entire Agreement</b>The Terms are the final, complete and exclusive agreement of the parties with respect to the subject matter hereof and supersedes and merges all prior discussions between the parties with respect to such subject matter.</p>
        <p class="text-center"><b>End of Terms</b></p>
      </div>
      
    </div>
  </div>
@endsection
