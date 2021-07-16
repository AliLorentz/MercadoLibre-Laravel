@extends('layouts.plantilla')
@section('title','Home')
@section('content')
<style>
	.categories{
		font-size: 12px;
		color: #666;
		margin-bottom: 15px;
	}
	.categories p{
		margin-bottom: 10px;
	}
</style>

	<div class="container mt-5 row col-lg-9 mx-auto">
		<div class="sidebar col-lg-2 lh-1">
			<div class="categories">
				<p>Tienda/Laptops</p>
			</div>
			<h3>Laptops</h3>
			<p class="categories">x resultados</p>

			<p class="fw-bold">Condicion</p>
			<div class="categories">
				<p>Nuevo</p>
				<p>Usado</p>
			</div>

			<p class="fw-bold">Ubicacion</p>
			<div class="categories">
				<p>Capital (x)</p>
				<p>Merida (x)</p>
				<p>Tachira (x)</p>
				<p>Trujillo (x)</p>
				<p>Valencia (x)</p>
			</div>

			<p class="mb-1 fw-bold">Precio</p>
			
			<div class="col-lg-6 input-group-sm p-1">
				<input type="text" placeholder="minimo" class="form-control">
			</div>
			<div class="col-lg-6 input-group-sm p-1">
				<input type="text" placeholder="maximo" class="form-control">
			</div>
		</div>

		<div class="col-lg-10 row">
		   	   
		   @foreach($products as $product)
			<div class="col-lg-4">
		     <x-product 
		     	:title="$product->title"
		     	:price="$product->price"
		     	:id="$product->id"
		      />
		   </div>
			@endforeach
		</div>
	</div>
	<div class="p-2 mb-4"></div>
@endsection 