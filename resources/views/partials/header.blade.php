<header>
    <div id="head" class="container d-flex justify-content-between align-center h-100">
        <img id="logo" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC logo">
        <nav class="h-100">
            <ul class="list-style-none h-100 d-flex align-center">
                @foreach($navLinks as $link)
                    <li class="navLinkContainer mes-3">
                        <a class="ptb-05 text-decoration-none primary-text-color" href="{{ $link['href'] }}">{{ strtoupper($link['text']) }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>