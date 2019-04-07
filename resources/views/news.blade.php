@extends('layouts.app')
@section('content')
<div class="container">
    <h5><span>News/Events</span></h5>
</div>
<div class="container upcoming-container">
    <h3>Upcoming Events</h3>
    <h3 class="action-h3">Our first annual Pig Roast and BBQ:</h3>
    <h4>** HOLD THE DATE **</h4>
    <p>Saturday June 15, 2019 2pm - 7pm <br> The American Legion Post <br> 33 West Passaic St, Rochelle Park, NJ 07662</p>
    <h3 class="action-h3">The only 3 letters better than B-B-Q are J-M-F, you’ll get them both</h3>
    <p>Come out and have some fun! Spend a day enjoying great food, drink, people,
        and games all while raising money for the Jack Mattsson Foundation
        This is rain or shine! In the event of any showers we’ve got that covered
        (literally), the pavilion is equipped for all sorts of weather</p>
    <h4>More details to follow</h4>
</div>

<div class="container">
    <h3>Past Events</h3>
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
            <p><strong>Bill and Sara Taylor </strong>for donating T-shirts for us to sell.</p>
            <p><strong>Kathleen Lynch </strong>for providing so much of the food and baked goods.  Nobody went home hungry.</p>
            <!--              <img src="public/img/waterDump.jpg" class="img-fluid">-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img class="img-fluid img-margin" src={{asset('img/errybody.jpg')}} >
        </div>
    </div>
</div>
@endsection
