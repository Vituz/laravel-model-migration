@extends('layout.app')

@section('title', 'Pack')


@section('content')

<div class="container just_center">

    <div class="pack_card">
        <img src="{{$pack->poster}}" alt="Image {{$pack->name}}">

        <div class="pack_content">
            <section class="left">
                <h2>{{$pack->name}}</h2>
                <h3>Città: {{$pack->city}}</h3>
                <h3>{{$pack->days}} giorni</h3>
                <h3>Partenza il {{$pack->departure}}</h3>
            </section>

            <section class="right">
                <h3>{{$pack->title}}</h3>
                <p>{{$pack->description}}</p>
                <h4>A partire da <span>€{{$pack->price}}</span> a notte</h4>
            </section>

        </div>

    </div>

</div>


@endsection