@extends('admin.templates.base')

@section('mainContent')

<div id="blueBar">
    <div id="cardSingle">
        <img id="imgCard" src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        <a class="aCard" id="comicCard" href="#">COMIC BOOK</a>
        <a class="aCard" id="viewCard" href="#">VIEW GALLERY</a>
    </div>
</div>
<main id="cardPage">

    <section id="sectionPresentation">
        <div id="text">
            <h1>{{$comic['title']}}</h1>
            <div id="greenbar">
                <div class="green" id="green1">
                    <div>
                        <span class="greenlight">U.S. Price: </span>
                        <span>{{$comic['price']}}</span>
                    </div>
                    <span class="greenlight">AVAILABLE</span>
                </div>
                <span class="green" id="green2">Check Availability</span>
            </div>
            <p>{{$comic['description']}}</p>
        </div>

    </section>
    <section id="sectionData">
        <div id="sectionDatabox">

            <div class="data">
                <h2>Specs</h2>
                <div class="boxSingledate">
                    <h4>Series:</h4>
                    <span class="lightblue">{{$comic['series']}}</span>
                </div>
                <div class="boxSingledate">
                    <h4>U.S. Price:</h4>
                    <span class="green">{{$comic['price']}}</span>
                </div>
                <div class="boxSingledate">
                    <h4>On Sale Date:</h4>
                    <span class="green">{{$comic['sale_date']}}</span>
                </div>
            </div>
        </div>
    </section>
</main>
{{-- <section id="icon">
    <div id="containerBuys">
        <div>
            <a href="#">
                <span>DIGITAL COMICS</span>
                <img src="{{asset('images/cta-icons.png')}}" alt="DC MERCHANDISE">
            </a>
        </div>
        <div>
            <a href="#">
                <span>SHOP DC</span>
                <img src="{{asset('images/cta-icons.png')}}" alt="DC MERCHANDISE">
            </a>
        </div>
        <div>
            <a href="#">
                <span>COMIC SHOP LOCATOR</span>
                <img src="{{asset('images/cta-icons.png')}}" alt="COMIC SHOP LOCATOR">
            </a>
        </div>
        <div>
            <a href="#">
                <span>SUBSCRIPTION</span>
                <img src="{{asset('images/cta-icons.png')}}" alt="SUBSCRIPTION">
            </a>
        </div> --}}

    {{-- </div>
</section> --}}

@endsection
