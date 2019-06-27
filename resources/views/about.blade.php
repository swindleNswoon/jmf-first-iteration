@extends('layouts.app')
@section('content')
    <div class="container">
        <h5><span>About</span></h5>
    </div>
<div class="container">
    <h3>About Jack and his Army:</h3>
    <div class="row">
    <div class="col-md-6">
    <p>Jack, born in the Bronx and raised in Glen Rock, NJ, was a 19 year old college student who had just
        finished his freshman year when he was diagnosed with Osteosarcoma, an aggressive and rare bone cancer.
        Jack passed away October 2017 after a 16 month battle, one month short of his 21st birthday.</p>
        <p>When Jack was diagnosed, the Oncologists told him he would was going to endure the fight of his life.
        With a large support group of family, friends, and community, Jack took the fight to cancer with the help
        from his army of supporters.</p>
        <p>Despite treatment after treatment failing, losing his hair, appetite, and weight, never ending blood
        transfusions, multiple surgeries, having to learn to walk again and countless days spent in hospitals, he never
        felt sorry for himself, always continuing to fight and believing the next treatment would work.</p>
        <p>The night before he died, as he struggled to breathe, he said “Dad, what’s on the agenda for tomorrow?”</p>
        <p>He was a joy to be around right to the end.</p>
        <p>His army of supporters was an important part of Jack’s motivation and commitment to make the most of
        every day right to the end. He is still an inspiration to us all.</p>
        <h3>About Osteosarcoma:</h3>
        <p>Osteosarcoma is a rare form of bone cancer that mostly affects children, adolescents, and young adults.
            While any of the body’s 206 bones can be affected, 50 percent of young patients have tumors near the
            knee. Patients usually have pain and swelling in the affected area. It’s common for active children and
            teenagers to experience limb pain as they grow, but a doctor should check out any pain that does not go
            away within a few weeks.</p>
        <p>In general, sarcomas are cancers in bones, muscles, and connective tissue throughout the body. They can
            affect children, adolescents, and young adults.</p>
        <p>Osteosarcoma usually develops in patients after age ten and before age 30. It most commonly develops
            during the growth spurt of the teen years. Around 400 children, adolescents, and young adults in the United States are diagnosed with
            osteosarcoma each year.</p>
        <p><strong>The standard treatment of care is decades old. New modern methods are
                needed and continue to be investigated in clinical trials.</strong></p>
    </div>
    <div class="col-md-6">
        <img class="img-margin img-fluid" src="{{asset('img/jackSurgery.jpg')}}">
        <img class="img-margin img-fluid" src="{{asset('img/jackAtCollege.jpg')}}">
    </div>
    </div>
</div>
<div class="container osteo-container">

</div>
@endsection
