@extends('layouts.layout')

@section('stylesheets')
<link rel="stylesheet" href="{{asset('css/styleFAQ.css')}}">
<link rel="stylesheet" href="{{asset('css/styleEvento.css')}}">
<link rel="stylesheet" href="{{asset('css/styleCatalogo.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
@endsection

@section('navbar')
    <div class="topnav">
            <a href="{{ route('FullCatalog') }}">Catalogo</a>
            <a href="#faq">FAQ</a>
            <div class="topnav-right">
                <a href="#search">Login</a>
                <a href="#about">Registrati</a>
            </div>
	</div>
@endsection

@section('content')
        <script>

	function showAnswer(id)
	{
		if(document.getElementById(id).style.display == 'none')
		{
			document.getElementById(id).style.display = '';
		}
		else
		{
			document.getElementById(id).style.display = 'none';
		}
	}
	</script>

	<body>
		<div class="colonna l8  ">
                    @isset($faq)
                    @foreach($faq as $domanda)
			<div class="w3-card">
				<div class="w3-container">
					<a href = "javascript:showAnswer({{$domanda->id}})" class = "domanda" > <h3>{{$domanda->domanda}}</h3></a>
					<div id = "{{$domanda->id}}" class = "risposta" style="display:none" >
						<p>{{$domanda->risposta}}</p>
					</div>
				</div>
			</div>
		</div>
                @endforeach
                @endisset
        </body>        
            
@endsection

