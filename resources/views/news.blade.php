@extends('layouts.app')
@section('content')
<div class="container">
    <h5><span>News/Events</span></h5>
</div>
<div class="container upcoming-container">
    <h3>Upcoming Events</h3>
    <p>Check back with us. We will be announcing our next event(s) soon.</p>
</div>

<div class="container">
    <h3>Past Events</h3>
    <div class="container">
      <h3 class="nostyle">JMF BBQ</h3>
      <p>Our first JMF BBQ was on June 15, 2019 (Father’s Day weekend).  It was a great success!
          About 180 people enjoyed food, drink, music, a photo booth, karaoke singing, dancing, and cornhole games.</p>
      <p><strong>We raised over $10,000 for our mission!</strong>  Thank you soo much!!  And, to all those who helped during the event,
          we are so grateful for your support.  It couldn’t have happened without you. You were everything.</p>
      <p>Whether you were able to make it there in person or send in your donation, we greatly appreciate your support
          and enthusiasm to be part of the foundation.  It was three years ago on Father’s Day that Jack was diagnosed
          with his cancer.  It is because of that day, we were together remembering and celebrating Jack and his wishes.</p>
      <p><strong>Special thanks to:</strong></p>
        <ul>
            <li>The <strong>American Legion Hall Post 190</strong> in Rochelle Park, NJ.  It was the perfect venue for us.</li>
            <li>The <strong>Glen Rock Inn</strong> in Glen Rock, NJ for donating the beer and wine.  Thank you Victor and Evan Quinn.</li>
        </ul>
        <div class="row">
            <div class="col-md-6">
                <img class="img-margin img-fluid" src="{{asset('img/pigShirt.jpg')}}">
                <img class="img-margin img-fluid" src="{{asset('img/bbqSunglasses.jpg')}}">
            </div>
            <div class="col-md-6">
                <img class="img-margin img-fluid" src="{{asset('img/jmfBbqTables.jpg')}}">
                <img class="img-margin img-fluid" src="{{asset('img/jmfCornhole.jpg')}}">
            </div>
        </div>
    </div>
    <div class="container">
    <h3 class="nostyle">Manhattan College Women's Soccer vs Niagra University</h3>
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid img-margin" src={{asset('img/coolAndGang.jpg')}}>
            <img  class="img-fluid img-margin" src={{asset('img/check.jpg')}}>
        </div>
        <div class="col-md-6">
            <p>We had our first fundraiser in October 2018.
                This one will always be dear to our family.
                Many people from all parts of the northeast US made it to the Bronx and were great team boosters rooting on the Manhattan College Jaspers Women’s soccer team to a 1-0 overtime victory.
                Our goal was to raise the noise levels at the game and funds for the Foundation.
                We are very excited to say we met both of those goals thanks to all our supporters!
                Over $7000 was raised from the event!!
                It is a great start for the JMF as we are on our way to begin giving to the many who need support –
                whether it is through Sarcoma research,
                supporting anti-bullying programs in our schools,
                and providing financial assistance to patients and their families. </p>
            <p><strong>A very special thank you goes to:</strong></p>
            <p><strong>Caroline Taylor, </strong>star Jaspers soccer player,
                for working with Manhattan College to get us be recognized at the event and coordinating much behind the scenes activities.</p>
            <p><strong>Manhattan College </strong>for embracing our foundation and being a wonderful and accommodating host.</p>
            <p><strong>Versabar Corporation </strong>for donating T-shirts for us to sell.</p>
            <p><strong>Kathleen Lynch </strong>for providing so much of the food and baked goods.  Nobody went home hungry.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img class="img-fluid img-margin" src={{asset('img/errybody.jpg')}} >
        </div>
    </div>
    </div>
</div>
@endsection
