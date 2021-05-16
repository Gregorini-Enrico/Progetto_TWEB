@extends('layouts.layout')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/styleHome.css')}}">
@endsection

<!-- Inizio elenco degli eventi -->
@section('content')
<div>
	<h2 style="text-align: center">
		<b>EVENTI RECENTI</b>
	</h2>
	<br>
</div>
@isset($events)
<div class="w3-eventirecenti">
	<div class="w3-box">
		<img class="w3-image" src="{{asset('/images/'.$events[0]->immagine)}}">
		<h2>Evento: {{$events[0]->titolo}}</h2>
                <p>Data evento: <b>{{$events[0]->data}}</b></p>
	</div>
	<p>
                <a href="{{ route('FullCatalog') }}">
                    <button class="botton-home"> 
                        <b> Vai al catalogo </b>
                    </button>
                </a>
        </p> 
	<div class="w3-box">
                <img class="w3-image" src="{{asset('/images/'.$events[1]->immagine)}}">
                <h2>Evento: {{$events[1]->titolo}}</h2>
                <p>Data evento: <b>{{$events[1]->data}}</b></p>
        </div>    
</div>
@endisset
<div class="w3-chisiamo">
	<h2> CHI SIAMO </h2>
</div>
<div class="w3-cosafacciamo">
	<h3> COSA FACCIAMO </h3>
</div>
@endsection

