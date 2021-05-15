@extends('layouts.layout')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/styleCatalogo.css')}}">
<link rel="stylesheet" href="{{asset('css/styleHome.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
@endsection

@section('title', 'Catalogo Eventi')

<!-- Inizio elenco degli eventi -->
@section('content')
<!--barra di ricerca -->
<div class="wrapper">
    <!--<input type="text" class="input" placeholder="GG/MM/AAAA"> &nbsp&nbsp -->
	<select class="input">
                <option value="" hidden><B>MESE</B></option>
                <option value="gen">01</option>
                <option value="feb">02</option>
                <option value="mar">03</option>
		<option value="apr">04</option>
		<option value="mag">05</option>
		<option value="giu">06</option>
		<option value="lug">07</option>
		<option value="ago">07</option>
		<option value="set">09</option>
                <option value="ott">10</option>
		<option value="nov">11</option>
		<option value="dic">12</option>
	</select> &nbsp&nbsp
	<select class="input">
		<option value="" hidden><B>ANNO</B></option>
		<option value="2021">2021</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
		<option value="2024">2024</option>
		<option value="2025">2025</option>
	</select> &nbsp&nbsp
	<input type="text" class="input" placeholder="Descrizione"> &nbsp&nbsp
	<select class="input">
                <option value="" hidden><B>REGIONE</B></option>
		<option value="Abruzzo">Abruzzo</option>
		<option value="Basilicata">Basilicata</option>
		<option value="Calabria">Calabria</option>
		<option value="ampania">Campania</option>
		<option value="Emilia-Romagna">Emilia-Romagna</option>
		<option value="Friuli Venezia Giulia">Friuli Venezia Giulia</option>
		<option value="Lazio">Lazio</option>
		<option value="Liguria">Liguria</option>
		<option value="Lombardia">Lombardia</option>
		<option value="Marche">Marche</option>
		<option value="Molise">Molise</option>
		<option value="Piemonte">Piemonte</option>
		<option value="Puglia">Puglia</option>
		<option value="Sardegna">Sardegna</option>
		<option value="Sicilia">Sicilia</option>
		<option value="Toscana">Toscana</option>
		<option value="Trentino-Alto-Adige">Trentino-Alto-Adige</option>
		<option value="Umbria">Umbria</option>
		<option value="Valle d'Aosta">Valle d'Aosta</option>
		<option value="Veneto">Veneto</option>
	</select> &nbsp&nbsp
	<select class="input">
            <option value="" hidden><B>SOCIET&Aacute</B></option>
            @isset($societies)
            @foreach($societies as $soc)
		<option value="{{$soc->organizzazione}}">{{$soc->organizzazione}}</option>
            @endforeach
            @endisset    
	</select> &nbsp&nbsp
	<div class="searchbtn"><i class="fas fa-search"></i></div>
</div>

@isset($eventi)
@foreach($eventi as $evento)
<div>
    <div class="w3-col l8 ">
	<div class="w3-card">
            <div class="w3-container">
                <div class="w3-events-img">
                    <img class="immagineEvento" alt="" src="{{asset('/images/'.$evento->immagine)}}">
                </div>
                <h3><b>{{ $evento->titolo }}</b></h3>
                 <h5>{{$evento->luogo}}, {{$evento->data}}</h5>
            </div>
            <div class="w3-container">
		<p>{{$evento->descrizione}}</p>
		<p>
                    <button class="w3-button">
                        <a href="{{ route('DettagliEvento', [$evento->codice_evento]) }}"> <b>DETTAGLI EVENTO</b>  </a>
                    </button>
                </p>
            </div>
	</div>
    </div>
</div>
@endforeach
@endisset
@endsection
