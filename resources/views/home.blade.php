@extends('layouts.app')

@section('page-title', 'Laravel-Comics')

@section('content')

<div class="jumbotron"></div>

<div id="cards" class="container pt-4 pb-3">
    <div id="cards-info" class="d-inline-block text-white fw-bold fs-125 bg-tag">CURRENT SERIES</div>

    <ul class="d-flex flex-wrap list-style-none">
        @foreach($comics as $comic)
            <li class="comic-card text-white" v-for="(comic, i) in comicsList">
                <a href="#">
                    <img class="mb-2 d-block" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                </a>
                <h4 class="fs-075">{{ $comic['series'] }}</h4>
            </li>
        @endforeach
    </ul>

    <button class="load-btn text-white bg-tag d-block m-auto fw-bold">LOAD MORE</button>
</div>

<div class="navigation-container d-flex align-center">
    <div class="container pes-5">
        <ul class="list-style-none d-flex align-center justify-content-around flex-wrap">
            @foreach($navigationLinks as $link)
                <li class="navigationCard">
                    <a href="{{ $link['href'] }}" class="fs-075 text-decoration-none text-white d-flex align-center p-3">
                        <img src="{{Vite::asset('resources/img/' . $link['icon'])}}" alt="{{ $link['text'] }}" class="icon me-3" />
                        {{ strtoupper($link['text']) }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection

