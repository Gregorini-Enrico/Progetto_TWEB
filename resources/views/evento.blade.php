@extends('layouts.layout')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/styleEvento.css')}}">
@endsection

@section('content')<!-- sezione con i dettagli dell'evento da aggiungere a layout -->
<!--Contenuto-->
        <div class="w3-main-content">
            <div class="w3-events-img">
                <img class="w3-img-event" alt="" src="{{asset('/images/rkomi.png')}}">
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="w3-events-div">
                <h2> EVENTO X </h2>
                <h6> Data: <b>21/08/2021</b> &nbsp;&nbsp;&nbsp;&nbsp; Luogo: <b>Ancona</b> </h6>
                <br>
            </div>
            
            <div class="w3-events-descr">
                <p>   <b> Descrizione evento </b>  
                    <br> La visualizzazione di un documento HTML da parte del browser avviene associando a ciascun elemento del documento un'area(box) e collocando le aree all'interno della finetra di visualizzazione (viewport). 
                    <br> Esistono due tipologie di box: inline-box e block-box
                    <br> Ad ogni elemento HTML è associato per default un tipo di box, che può essere cambiato usando la proprietà display
                    <br> Valori più comni della proprietà: block, inline, none.
                </p>
            </div>
            
            <div class="w3-map">
                <iframe class="w3-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2889.939933218729!2d13.515312415631946!3d43.58696746472868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d802321a175a5%3A0x3e1261137bd6ae51!2sVia+Brecce+Bianche%2C+12%2C+60131+Ancona%2C+Italy!5e0!3m2!1sen!2sus!4v1454947673841" >
                </iframe>         
            </div>
            
            <div class="w3-info">
                <p> Biglietti disponibili: x <br><br>
                    Partecipanti: x <br><br>
                    Prezzo biglietto: 50&euro; <br>
                </p>
                <br>
                <p>
                    <button class="w3-button-evento"> 
                        <b> ACQUISTA </b>
                    </button>
                </p>    
            </div>
        </div>
@endsection