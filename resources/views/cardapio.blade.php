@extends ('Layouts.app')

@section('title', 'Cardápio')
<style>
    body  {
      background-image: url("/SistemaLanchonete0.1/images/CardapioBackground.jpg");
      	
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: #cccccc;
    }
    .card{
      width: 30%
      margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
    }
    
    #item{
      opacity:75%; 
      font-weight: bold;
    }
    
    </style>
@section('content')

<div class="container-fluid">

  <!-- Navbar (sit on top) -->
  <div class="w3-top w3-hide-small">
    <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="/SistemaLanchonete0.1/public" class="w3-bar-item w3-button">INICIO</a>
    <a href="{{ URL::previous() }}" class="w3-bar-item w3-button">VOLTAR</a>
      </div>
  </div>
  
  <div class="card text-center" id="title">
    <h1>Cardápio</h1>
  </div>
  <br>
  
@if ($errors->any())
<ul>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
</ul>
@endif
<br>
<br>

<div class="card" id="item">
  <div class="card-body">
<!--  Comida  -->
<h3>Comidas: </h3>
@foreach($Comida as $item)
<li>ID {{$item->id}} | {{$item->name}} | R$ {{$item->price}}</li>
@endforeach
</div>
</div>
<!--  Bebidas  -->
<div class="card" id="item">
  <div class="card-body">
<h3>Bebidas: </h3>
@foreach($Bebida as $item)
<li>ID {{$item->id}} | {{$item->name}} | R$ {{$item->price}}</li>
@endforeach
</div>
</div>

<!--  Sobremesa  -->
<div class="card" id="item">
  <div class="card-body">
<h3>Sobremesas: </h3>
@foreach($Sobremesa as $item)
<li>ID {{$item->id}} | {{$item->name}} | R$ {{$item->price}}</li>
@endforeach
</div>
</div>
@endsection

