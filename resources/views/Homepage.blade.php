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
<div class="w3-eventirecenti">
	<div class="w3-box">
		<img class="w3-image" src="{{asset('/images/rkomi.png')}}">
		<h2>Evento x</h2>
		<p>Description 1</p>
	</div>
	<p>
		<button class="botton-home"> 
			<b> Vai al catalogo </b>
		</button>
	</p> 
	<div class="w3-box">
		<img class="w3-image" src="{{asset('/images/rkomi.png')}}">
                <h2>Evento y</h2>
		<p>Description 2 <br>with special line</p>
	</div>    
</div>
<div class="w3-chisiamo">
	<h2> CHI SIAMO </h2>
</div>
<div class="w3-cosafacciamo">
	<h3> COSA FACCIAMO </h3>
</div>
@endsection

