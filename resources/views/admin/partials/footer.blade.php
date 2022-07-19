<?php
 $dcComics = ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"];
             $shop = ["Shop DC", "Shop DC Collectibles"];
             $DC = ["Terms of use", "Privacy Policy(New)", "Ad Choices", "Advertising", "Jobs", "Subscription", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"];
             $sites = ["DC", "MAD Megazine", "DC Kids", "DC Universe", "DC Power Visa"];
             $footerSocial = [
                 [
                     'img' => "images/footer-facebook.png",
                     'name' => "Facebook"
                 ],
                 [
                     'img' => "images/footer-twitter.png",
                     'name' => "Twitter"
                 ],                [
                     'img' => "images/footer-youtube.png",
                     'name' => "YouTube"
                 ],
                 [
                     'img' => "images/footer-pinterest.png",
                     'name' => "Pinterest"
                 ],
                 [
                     'img' => "images/footer-periscope.png",
                     'name' => "Periscope"
                 ]
             ];
?>

<footer>
    <section id="sectionFooter">
        <div id="linkFooter">
            <section>

                <div>
                    <h3>DC COMICS</h3>
                    <ul>
                        @foreach ($dcComics as $item)
                        <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                        @endforeach
                        {{-- @foreach (config('arrFooter') as $dcComics.item)
                        <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                        @endforeach --}}
                    </ul>
                </div>

                <div>
                    <h3>SHOP</h3>
                    <ul>
                        @foreach ($shop as $item)
                        <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                            @endforeach

                    </ul>
                </div>
            </section>

            <section>
                <h3>DC</h3>
                <ul>
                    @foreach ($DC as $item)
                    <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                            @endforeach

                </ul>
            </section>

            <section>
                <h3>SITES</h3>
                <ul>
                    @foreach ($sites as $item)
                    <li>
                    <a href="#">{{ $item }}</a>
                </li>
                @endforeach

                </ul>
            </section>

            <img id="logo" src="images/dc-logo-bg.png" alt="logo DC">
        </div>
    </section>

    <nav id="navFooter">
        <div>
            <button>
                <a href="#">SIGN-UP NOW!</a>
            </button>
            <div id="social">
                <a id="follow" href="#">FOLLOW US</a>
                <div id="containersocialFooter">
                    @foreach ($footerSocial as $item)
                    <a href="#">
                        <img src="{{ $item['img'] }}" alt="{{ $item['name'] }}">
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </nav>
</footer>
