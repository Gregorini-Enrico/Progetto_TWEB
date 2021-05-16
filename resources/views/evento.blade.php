@extends('layouts.layout')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/styleEvento.css')}}">
@endsection

@section('content')<!-- sezione con i dettagli dell'evento da aggiungere a layout -->
<!--Contenuto-->
@isset($event)
        <div class="w3-main-content">
            <div class="w3-events-img">
                <img class="w3-img-event" alt="" src="{{asset('/images/'.$event->immagine)}}">
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="w3-events-div">
                <h2> {{$event->titolo}} </h2>
                <h6> Data: <b>{{$event->data}}</b> &nbsp;&nbsp;&nbsp;&nbsp; Luogo: <b>{{$event->luogo}}</b> </h6>
                <br>
            </div>
            
            <div class="w3-events-descr">
                <p>   <b> Descrizione evento </b>  
                    {{$event->descrizione}}
                </p>
            </div>
            
            <div class="w3-map">
                <iframe class="w3-iframe" src="{{$event->iframe}}" >
                </iframe>         
            </div>
            
            <div class="w3-info">
                <p> Biglietti disponibili: {{$event->num_biglietti}} <br><br>
                    Partecipanti: x <br><br>
                    Prezzo biglietto: {{$event->costo_biglietto}}&euro; <br>
                </p>
                <br>
                <p>
                    <button class="w3-button-evento"> 
                        <b> ACQUISTA </b>
                    </button>
                </p>    
            </div>
        </div>
@endisset
@endsection