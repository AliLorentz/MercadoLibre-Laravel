@extends('layouts.plantilla')
@section('title','Home')
@section('content')

	<div class="row col-lg-8 mx-auto login p-5 border border-1 rounded mt-5 mb-5 bg-light">
		<img src="https://http2.mlstatic.com/D_NQ_NP_994682-MLV43715654670_102020-O.webp" alt="" class="col-lg-7">
		<div class="col-lg-5 border border-1 rounded">
			<p>Nuevo</p>
			<p class="h5">{{$product->title}}</p>
			<p class="fs-3">{{$product->price}}$</p>
			<p>2000BsF</p>
			@if($product->envio)
			<p>Envio Gratis</p>
			@endif
			
			<p>Caracas</p>
			<p>Cantidad:4</p>
			<button class="btn btn-primary mb-2 col-lg-12">Comprar ahora</button>
		</div>

		<div class="col-lg-7">
			<p class="fs-4">Descripcion</p>
			<p>{{$product->description}}</p>

			<p class="fs-4">Preguntas y Respuestas</p>

			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Pregunta al Vendedor" aria-label="Recipient's username" aria-describedby="button-addon2">
			  <button class="btn btn-primary" type="button" id="button-addon2">Preguntar</button>
			</div>

			<p>Precio</p>
			<p>400$</p>
		</div>

		<div class="col-lg-5 border border-1 rounded">
			<p>Informacion sobre el Vendedor</p>
			<p>Ubicacion</p>
			<p>Caracas</p>
			<p class="fw-bold">Este vendedor tiene X calificaciones</p>
			
		</div>
	</div>
	<div class="col-lg-8 mx-auto">
		<h5>Quienes vieron este producto tambien vieron</h5>
	</div>
@endsection