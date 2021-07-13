@extends('layout.app')

@section('title', 'Tour Packages')


@section('content')

<div class="container just_center">

    @foreach($packs as $index=>$pack)

    <div class="card">
        <img src="{{$pack->poster}}" alt="Image {{$pack->name}}">
        <section class="card_content">
            <a href="{{route('pack', ['id' => $index] )}}">{{$pack->name}}</a>
            <h3>Da <span>€{{$pack->price}}</span> a persona</h3>
        </section>
    </div>

    @endforeach

</div>


@endsection