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
        <p><a href="{{ route('terms') }}">Terms & Conditions</a></p>
        <p><a href="{{ route('contact.us') }}">Contact Us</a></p>
      </div>
      <div class="col-12 col-md-8 line mb-5 justify">
        <h1 class="text-center">TERMS & CONDITIONS</h1>
        <p>Please read our terms and conditions of use as described below before using the website. Should you have any questions about any of the details in here, please do not hesitate to reach out to us.</p>
        <p>The terms “Agreement”, “Terms of Service”, “Service” or “Terms of Use” refer to these Terms of Service as laid out on this page, and similar such other Terms of Service as made available on the Site.<br/>The terms “Trademark”, “Logos”, “Service Marks”, refer to registered and unregistered trademarks that belong to ROVADAR ENTERPRISES Pvt. Ltd., such as T-MEDLEY.</p>
        <h3>1. BINDING AGREEMENT</h3>
        <p>The Terms of Service laid out in this agreement constitutes a Binding Agreement. By using this Site, or any service connected with this site, you agree to abide by this binding agreement and by the terms of service laid out therein. These terms might be amended by T-MEDLEY or its legal representatives at any time in its sole discretion. T-MEDLEY hereby acknowledges its responsibility to post an update on Site whenever any such significant changes are made to the Binding Agreement, for a reasonable amount of time, as governed by T-MEDLEY, but not needing to stretch beyond 3 days. It is solely your responsibility to review these Terms of Service periodically, and if at any time you do not agree with the terms laid out herein, you must immediately leave the site and stop all use of the Site and services until such a time when the terms are acceptable to you.</p>
        <h3>2. WEBSITE USE</h3>
        <p>By using this website, you represent, and agree that you are legally entitled to do so, and are of the legal age in your country to use this website, and legally enter into this agreement.</p>
        <h3>3. TRADEMARKS</h3>
        <p>Nothing that is contained in this website shall be construed to mean the right to use any licenses or trademarks displayed on the site without our express written permission.</p>
        <h3>4. USER CONTENT</h3>
        <p>You grant T-MEDLEY, its subsidiaries, affiliates, employees, suppliers and representatives a license to use any content deemed as User Content, that has been generated, posted or provided by you. Using the content refers to, but is not limited to, reproducing, modifying, editing, reformatting, printing, saving, copying and distributing the User Content, along with disclosure of the name of the content provider, unless mutually agreed otherwise in writing before the content becoming User Content. By providing any such User Content, you represent and warrant that you have the sole right to the User Content, either through ownership or through explicit legal authorization.</p>
        <h3>5. PROHIBITED CONTENT</h3>
        <p>The onus lies on the user to not provide, or make available any of the content listed below and termed ad “Prohibited Content” – whether through uploading, commenting, displaying, transmitting, distributing, hacking, creating using Site software, sharing or posting.<br/>Prohibited Content is content that:</p>
        <div class="pl-5">
          <p>a) Infringes upon someone else’s right to privacy;</p>
          <p>b) Is plagiarised, or belongs to someone else and is used without the consent of the owner;</p>
          <p>c) Can be termed pornographic, or contains explicit nudity, or a similar such offensive subject matter, or contains a link to such an adult website or promotes such a business;</p>
          <p>d) Contains excessive violence;</p>
          <p>e) Incites, causes or promotes religious hatred, religious offence or is deemed religiously sensitive;</p>
          <p>f) Is defamatory, abusive, threatening, vulgar or libellous;</p>
          <p>g) Encourages, incites, causes or promotes thought or behaviour that could constitute a criminal offense or violate any applicable state, national, or foreign law;</p>
          <p>h) Encourages, incited, causes or promotes racism, casteism, bigotry, hatred or harm against any individual or group;</p>
          <p>i) Can be construed to be politically offensive;</p>
          <p>j) Contains any information that is deemed sensitive to any other person and can be construed to pose a security or a privacy risk to that person;</p>
          <p>k) Solicits, or is designed to solicit passwords or personal identifying information from other Users or people;</p>
          <p>l) Promotes propagates, or involves any other activity that can be considered as a commercial activity or sale, without the permission of T-Medley;</p>
          <p>m) Contains photographs, video or audio of a person that has been used without that person’s knowledge and consent;</p>
          <p>n) Is in violation of any right to privacy, security, intellectual property rights or any other rights of any other person.</p>
        </div>
        <p>T-Medley reserves the right to delete any such material from its servers and website, and to provide any such information and material to law and enforcement agencies in the investigation of any violation of these Terms of Use or of any applicable laws, or for any other purpose when the information and material have been requested by law and enforcement agencies.</p>
        <h3>6. PROHIBITED CONDUCT</h3>
        <p>The User and any other person is also prohibited from engaging in, assisting others engaging in, or providing any information that might help anyone from engaging in the following activities pertaining to the Site and any of T-Medley’s services:</p>
        <p>Hacking into the site, or to any of our servers, or attempting to hack, probe, scan and check for vulnerabilities in the Site, Server, Software or any associated system or network, including circumventing or modifying, attempting to circumvent or modify, or encouraging or assisting any other person in circumventing or modifying any security technology or software that is part of the Site or Service, unless specifically instructed by T-Medley to do so for prevention purposes;</p>
        <div class="pl-5">
          <p>a) Stealing any user content of confidential information stored on the site, servers or in any other place, or stealing any of the copyright information and intellectual property on the site, such as images, text, videos, audio, photos or trademarks</p>
          <p>b) Using the site to promote racism, casteism, bigotry, hatred or any other form of discrimination;</p>
          <p>c) Using the site to incite violence, or any other act that can be termed to be against any applicable laws and rules of the governing State and Country; Threatening, stalking, harassing, defrauding, stealing or advocating any of these activities against any person or User;</p>
          <p>d) Using the site to either conduct, promote, advertise, or solicit any commercial business not affiliated with T-Medley without the explicit written permission of T-Medley;</p>
          <p>e) Accessing content or data not intended for you, or logging into a server or account that you are not authorised to access;</p>
          <p>f) Uploading a virus onto the site, or using worms, Trojan horses, bots or any other codes, files or programs that cause interference with the service of the site in any manner, including spamming the site, mail bombing, flooding or otherwise causing it to crash;</p>
          <p>g) Attempting to modify, copy, distribute, download, transmit, reverse-engineer, decompile, disassemble, or otherwise reduce or attempt to reduce to a human-perceivable form any of the source code used by T-Medley in providing the Site, or any;</p>
          <p>h) Content from the Site other than the User Content that has been contributed by you;</p>
          <p>i) Recording, processing, or mining information about other users;
          Impersonating or attempting to impersonate T-Medley or a T-Medley employee, administrator or moderator, another User, or person or entity (including, without limitation, the use of e-mail addresses associated with or of any of the foregoing);</p>
          <p>j) Using the Site in a manner inconsistent with any and all applicable laws and regulations.</p>
        </div>
        <h3>7. VIOLATIONS OR ALLEGED VIOLATIONS IN THE TERMS OF SERVICE</h3>
        <p>In the case of any violation, or alleged violation of the Terms of Service, T-Medley reserves all right to terminate all your interactions with the site, including removal of any of your information on its servers, with or without any notification to you and refusing any future access to you to the site. In order to provide a fair response to any allegation of such violation, you agree that T-Medley or its employees or representatives might access your accounts and your User Content if needed. T-Medley is not required to disclose such internal investigation unless required by law.</p>
        <p>T-Medley retains the right to monitor the website for prohibited conduct or content but does not in any way assume the responsibility to do so. Should it choose to do so, it would be in its sole discretion, and it would not be required to make such monitoring public. If you are aware of such violation of the terms of service, please reach out to us through the Contact Us details provided on the website.</p>
        <h3>8. REFUSAL OF ORDERS</h3>
        <p>T-Medley reserves the right to refuse or cancel any order, at any time, without any reason. Potentially, this could be caused due, but is not limited to, lack of inventory, error in inventory management systems, force majeure, shipping issues, quality control, violation of prohibited content, error in pricing or information on website, fraud or payment issues. Should your order be refused or cancelled, we will inform you as soon as possible, and if payment has already been accepted for it, it will be credited back to you, or an alternative to purchase something else of similar value will be given.</p>
        <h3>9. QUANTITY LIMITATIONS</h3>
        <p>T-Medley reserves all rights to limit the quantity that can be purchased per order or per person. In case of such limitations being placed, we will inform you as soon as possible. If you’re interested in ordering in bulk, please contact us through the “Contact Us” link on the website, and we will be able to process your order and provide you with a custom rate depending on the type and bulk of the order.</p>
        <h3>10. WARRANTY OF SITE</h3>
        <p>T-Medley makes no warranties, guarantees, representations or statements regarding the website – whether express or implied in law. There is no guarantee or warranty of uptime, performance, accuracy, speed of the site and of any software on the site, nor is there any warranty for the site meeting any particular user requirements. Any and all such warranties are expressly disclaimed by T-Medley.</p>
        <h3>11. LIABILITY DISCLAIMER</h3>
        <p>T-Medley disclaims all liability for loss, expense or damage, whether direct, indirect, consequential or foreseeable suffered by the user or any third party arising out of, or caused in connection to the use or access of the site, the information or materials contained in the site or the services provided by the site. Neither T-Medley nor any third party will be liable for any data loss, theft, cyber theft, a decline of transaction or any such event. Under no circumstances will we be liable for any loss or damage caused by the use or misuse of our products, or your reliance on the information in any content on our websites. YOU AGREE THAT YOUR SOLE AND EXCLUSIVE REMEDY ARISING FROM OR RELATING IN ANY WAY TO ANY PRODUCT SHALL BE A CREDIT OR REFUND, PROVIDED AT OUR DISCRETION.</p>
        <h3>12. INDEMNIFICATION</h3>
        <p>The user agrees to indemnify T-Medley, people associated with T-Medley, its representatives and its affiliates from all claims, losses, damages, lawsuits and liabilities arising from the user’s access of the site or its services, and from the user’s violation of the terms of service as laid out herein.</p>
        <h3>13. APPLICABLE LAW</h3>
        <p>These terms of service and the use of the website shall be construed in accordance and governed by the in all respects by the laws of the State of KARNATAKA and the Government of India. You hereby irrevocably consent that exclusive jurisdiction to any legal disputes arising through these Terms of Service and through the use or access of the site shall lie with the courts in Bangalore, in the State of Karnataka, in India.</p>
        <p class="text-center">End of Terms and Conditions.</p>
      </div>
      
    </div>
  </div>
@endsection
