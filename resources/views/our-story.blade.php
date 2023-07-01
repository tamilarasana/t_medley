@extends('layout.main')

@section('content')
@push('styles')
<style type="text/css">
  .story{
    background-image: url('images/our-story/our-story.jpg');
    /*background-position: center center;*/
    background-size: cover;
    background-repeat: no-repeat;
    height: 35rem;
  }
</style>
@endpush
<div class="container ">
  <div class="row">
    <div class="col-12 story d-flex justify-content-center align-items-center">
      <div class="">
      <h1 style="font-weight: bold; font-size: 4rem;">Our Story</h1>        
      </div>
    </div>
  </div>
  <div class="row mt-5 text-center">
    <h3 class="" style="font-family: 'Bunch Blossoms Personal Use', sans-serif;">Started by a Wanderer and a Nerd to slow down the overpriced and outdated tea flavors, T-Medley sets us apart by bringing you peculiarity and worth for every cup you sip.</h3>
    <p>Blending tea is fun, imagine depending on the good side of a seed to create a new flavor, now think about strawberry tea. This definitely isn’t something we’d pay mind to while sipping our cup of tea every morning.</p>
    <p>We certainly hadn’t thought about it until we studied and acquired knowledge of the wonderful ingredients tea would react to, in the best of ways. On an everyday basis, each individual tea leaf is processed carefully, dried and loaded onto a truck bound for further drying, oxidation, production or distribution. Well, we nurtured nature and took it to school.</p>
    <p>Let us back up a bit. One day, when we were enjoying a cup of tea, a random thought pushed us to blend the tea with different ingredients. This light of curiosity became a passion and gave us a green on establishing a company that would specialize in teas and tisanes. This is how we found ourselves exploring a tea garden to learn the best techniques for making exotic cuppas; The beginning of T-Medley. </p>
    <p>We were on a sprint to create wonders in a cup, as we leaped to discover the best methods in transforming a green leaf into a beautifully oxidized, ready to drink, hot or cold beverage.</p>

    <h1 class="mt-3 text-center w-100 text-bold"  style = "font-family: 'Fleur De Leah', cursive;"><span>Journey from Plant to your cup</span></h1>

    <p>The journey of a tea leaf is similar to a coffee bean making in many ways. If one was to spend a day or two, in any coffee growing regions around the world, they would have quite a view, as these regions are beautiful landscapes. They’d come across processes such as milling, roasting, brewing and breathing in fresh country air. Tea is coffee’s mate in a hat, there are different conditions from soil to weather, sprouting to blooming, withering to grading that ends up as a final season’s growth that is selflessly unique. No two sets of final yield are the same. Every batch has its own emotions behind it that make your morning cup of tea, truly one of a kind.</p>
    <p>We procure teas from different tea gardens that are ready to be inspected, graded and blended. This is a process we take great pride in and we are humbled to see the work roll out from our artisans every day. We make great tea. The final specialties that reach a customer’s cup are carefully packed in an environmentally friendly pouch that doesn’t add much of a character to it, but occasionally we meet people who have tasted different teas and tisanes from around the globe. They agree with us on one factor, tea is amazing! This sets us an imagination and makes us think on what can be improved or why not try something that would make you feel unique.</p>
    <h3 class="mb-5" style="font-family: 'Bunch Blossoms Personal Use', sans-serif;">Every aspect of our company touches the spirit of adventure and quality to make an impact. We are super cool, We are eco- friendly, and We are into fair trade.</h3>
  </div>
</div>

 
@endsection