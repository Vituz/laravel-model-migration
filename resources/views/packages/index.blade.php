@extends('layout.app')

@section('title', 'Tour Packages')


@section('content')

<h1>Packages</h1>

@foreach($packs as $pack)

<div class="card">
    <h2>{{$pack->name}}</h2>
</div>

@endforeach

@endsection