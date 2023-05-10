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

@endsection