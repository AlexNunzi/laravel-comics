<footer>

    <div id="footer-top">
        <div class="container h-100 d-flex justify-content-between">
            <ul id="footer-links-container" class="list-style-none">
                @foreach($footerLinks as $list)
                    <ul class="links-list list-style-none">
                        <li>
                            <h3 class="links-head text-white">{{ strtoupper($list['heading']) }}</h3>
                        </li>
                        @foreach($list['links'] as $link)
                            <li>
                                <a class="text-decoration-none terthiary-text-color fs-075" href="#">{{ $link['text'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </ul>

            <div class="transparent-logo h-100"></div>
        </div>
    </div>

    <div id="footer-bottom">
        <div class="container h-100 d-flex justify-content-between align-center">
            <a id="signUpBtn" class="text-white text-decoration-none" href="#SignUp">SIGN-UP NOW!</a>
            <ul class="d-flex align-center list-style-none">
                <li class="m-3">
                    <h3 class="secondary-text-color">FOLLOW US</h3>
                </li>
                @foreach($footerBottomLinks as $link)
                <li v-for="(link, i) in footerBottomLinks" class="m-2">
                    <a :href="link.href">
                        <img src="{{Vite::asset('resources/img/' . $link['icon'])}}" alt="{{ $link['text'] }}" />
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
        
        
    </div>
</footer>