@extends('layout.main')

@section('content')
@push('styles')
<style>
  .line{
    border-left: 1px solid black;
  }
  .outline-none{
    outline: none;
  }
  .acc-btn{
    border: none;
    outline: none;
    color: #000;
    background-color: #f7f7f7;
  }
  .h2, h2 {
    font-size: 1.25rem;
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
        <h1>FAQ</h1>
        <div class="accordion" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="acc-btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Can I return the teas I buy online?
                </button>
              </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Unfortunately, with a product like tea, we are unable to provide a return policy. Online orders cannot be returned. We regret the inconvenience.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  If the website is down, how can I order my teas?
                </button>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Simply call us on +91 72 04 50 29 16 / or WhatsApp to +91 81 23 60 50 77 and we’ll be happy to take your order.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  I have not received my order yet, what can I do ?
                </button>
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                95% of orders go out on the same day (except for weekends or Public holidays). If you have not received your order 5 days after placing it please Call us or Whatsapp us at +91 – 81 23 60 50 77.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  What do I do if my order arrives broken, open, or defective?
                </button>
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">
                Contact our Customer Service by e-mail or telephone, and we will replace your order.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFive">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  How can I pay for my order?
                </button>
              </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
              <div class="card-body">
                Our links contain secure payment gateways with credit or debit cards and PayPal.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingSix">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  How long can tea be kept?
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
              <div class="card-body">
                Our tea should preferably be consumed within 6 months so that you consume it at its freshest.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingSeven">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                 Can you send me a product to review for my blog/magazine?
                </button>
              </h2>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
              <div class="card-body">
                We trust that our sourcing team is working with some of the best tea makers in India and therefore we don’t send out samples or solicit reviews. If you would like to try our product and you are in India, we would love to host you here. For press inquiries, please contact us at info@rovadar.com.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingEight">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                 How can I track my order?
                </button>
              </h2>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
              <div class="card-body">
               Once your order is processed, you will receive a confirmation mail along with the tracking number. You can enter this tracking number on the website of our logistics partners (Delhivery or FedEx or India Post) and track your order easily.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingNine">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                 How can I modify or cancel my order?
                </button>
              </h2>
            </div>
            <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
              <div class="card-body">
               At T-Medley, we ship your order in 24 hours which means you will have 24 hours to modify or cancel your order. Once you receive the confirmation mail, you’ll not be able to modify or cancel your order.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTen">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                 I have entered the wrong address/details by mistake. What should I do?
                </button>
              </h2>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
              <div class="card-body">
               Do not panic! Just send us an email as soon as possible on info@rovadar.com mentioning your order ID and we will do the needful.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingEleven">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                 How long will I have to wait for my order?
                </button>
              </h2>
            </div>
            <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample">
              <div class="card-body">
               Within India: 3 – 5 working days<br/>Outside India: 7 – 10 working days.

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTweleve">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTweleve" aria-expanded="false" aria-controls="collapseTweleve">
                 I have forgotten my login ID or password. How do I get it back?
                </button>
              </h2>
            </div>
            <div id="collapseTweleve" class="collapse" aria-labelledby="headingTweleve" data-parent="#accordionExample">
              <div class="card-body">
               You can get your password easily by clicking on the ‘forgot password link. Validate your request and a new password will be sent to your registered email id. In case you have forgotten your login ID, please drop an email to support@tmedley.com and we will be more than happy to assist you.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThirteen">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                 Will you share my details with anyone else?
                </button>
              </h2>
            </div>
            <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample">
              <div class="card-body">
               Absolutely not! We follow a strong privacy promise policy.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading14">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                 How do I create my Medley Circle account?
                </button>
              </h2>
            </div>
            <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
              <div class="card-body">
              Click on the Login/ Register Icon in the top corner of the home page, enter the required details and you’ll be a Medley Circle member..
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading15">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                 What is a Tea blend?
                </button>
              </h2>
            </div>
            <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
              <div class="card-body">
              Tea blending is the blending of different teas together to produce a final product. This occurs chiefly with black tea. Tea is blended so that customers get can get the same taste every time which means the quality, character, and flavour of the tea is constant, this is despite some teas being seasonal or in short supply due to adverse weather conditions in one or other the growing regions.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading16">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                 What is blended tea?
                </button>
              </h2>
            </div>
            <div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
              <div class="card-body">
              Blended tea means, that it has more than two or three varieties of tea, these teas are blended carefully by blenders who have rich experience. Teas are selected from regions, grades, gardens so that there is consistency in the taste, colour, and quality.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading17">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                 Why is tea blended?
                </button>
              </h2>
            </div>
            <div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
              <div class="card-body">
             It takes great skill to make a blend, years of practice goes into Perfecting a blend. The one golden rule of blending is: Every blend must taste the same as the previous one, so a consumer will not be able to detect a difference in flavour from one purchase to the next.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading18">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                 What is a Signature Blend?
                </button>
              </h2>
            </div>
            <div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
              <div class="card-body">
             This is a secret blend of various types of tea made by Master Tea Blenders, the secrets of which is only known to them and is closely guarded.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading19">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                 How much tea should I use?
                </button>
              </h2>
            </div>
            <div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
              <div class="card-body">
             Our loose tea comes with suggested quantities to use. Remember if you want a stronger cup of tea you should use more tea and not - Just brew for longer!
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading20">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                 How long should I brew my tea?
                </button>
              </h2>
            </div>
            <div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
              <div class="card-body">
             All our teas come with a brewing guide to help with brewing times. The time suggested is only a guide and after a while, you can Experiment with brewing times to end up with the perfect cup of tea that suits your own taste.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading21">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                 How to Store Tea?
                </button>
              </h2>
            </div>
            <div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordionExample">
              <div class="card-body">
             Tea should always be stored in a cool dry place. The best container is airtight and dark. Avoid plastic containers as these can taint the tea and allow light in. If stored correctly, tea can maintain its quality for well over a year but it’s always best to have the freshest tea available.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading22">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                 Does the hardness of the water affect tea?
                </button>
              </h2>
            </div>
            <div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample">
              <div class="card-body">
             The hardness of the water used in brewing tea can affect the final taste and look. Soft water with a high PH affects the colour of the tea by making them look darker due to the greater ionization of the tea polyphenols. For this reason, if you live in a soft water area you may well need to reduce the time you leave the tea to brew. Soft water tends to make the best-tasting tea. If you live in a hard water area it may be better to use a water softener or a water filter for the water you use in making your tea.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading23">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                 Does the hardness of the water affect tea?
                </button>
              </h2>
            </div>
            <div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordionExample">
              <div class="card-body">
             The hardness of the water used in brewing tea can affect the final taste and look. Soft water with a high PH affects the colour of the tea by making them look darker due to the greater ionization of the tea polyphenols. For this reason, if you live in a soft water area you may well need to reduce the time you leave the tea to brew. Soft water tends to make the best-tasting tea. If you live in a hard water area it may be better to use a water softener or a water filter for the water you use in making your tea.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading24">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                 Can I use tea more than once?
                </button>
              </h2>
            </div>
            <div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordionExample">
              <div class="card-body">
             Tea especially loose leaf tea can be used more than once providing it is not allowed to dry out completely. In Japan, they will use the tea from the first pot of the day for the rest of the day and then discard it. They will also discard the very first cup of tea poured as they feel it can be a bit bitter. Some people felt that the second or third cup of tea was much better than the first one.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading25">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                 Do Black and Green teas come from different plants?
                </button>
              </h2>
            </div>
            <div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordionExample">
              <div class="card-body">
             No, they both come from the same plant known by its botanical name Camellia Sinensis.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading26">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                 Does tea contain caffeine?
                </button>
              </h2>
            </div>
            <div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordionExample">
              <div class="card-body">
            Every tea made from the Camellia sinensis plant contains caffeine, regardless of the type of tea. Herbal teas and fruit teas, which are actually infusions, do not contain caffeine.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading27">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                 How are the new mixes made? Do you create teas often?
                </button>
              </h2>
            </div>
            <div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordionExample">
              <div class="card-body">
            Our team of experts works to create unique and exclusive varieties so that customers can discover new aromas and flavours, which create unexpected and surprising nuances in taste.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading28">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                 How can I find out about a particular tea or about new items?
                </button>
              </h2>
            </div>
            <div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordionExample">
              <div class="card-body">
            To keep up-to-date on the latest news items, promotions, and special offers. We invite you to become members of our Medley Circle or follow us on our website and on social media.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="heading29">
              <h2 class="mb-0">
                <button class="acc-btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                 I have more questions...
                </button>
              </h2>
            </div>
            <div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#accordionExample">
              <div class="card-body">
            We love answering questions! Drop us an email at support@tmedley.com  and we will get back to you within 1-2 business days.
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </div>
  </div>
@endsection
