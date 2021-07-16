@extends('layouts.plantilla')
@section('title','Home')

@section('content')
    
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://http2.mlstatic.com/D_NQ_923660-MLA46587288627_072021-OO.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://http2.mlstatic.com/D_NQ_866536-MLA46599359511_072021-OO.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://http2.mlstatic.com/D_NQ_931635-MLA46571643853_062021-OO.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 <div class="row col-lg-8 mx-auto mt-5  ">
    <h5>Ver mas productos como este</h5>
   <div class="col-lg-4">
     <x-product title="Title" />
   </div>
   <div class="col-lg-4">
     <x-product title="Title" />
   </div>
   <div class="col-lg-4">
     <x-product title="Title" />
   </div>
 </div>

  <div class="row col-lg-8 mx-auto mt-5">
    <h5>Ver mas productos como este</h5>
   <div class="col-lg-4">
     <x-product title="Title" />
   </div>
   <div class="col-lg-4">
     <x-product title="Title" />
   </div>
   <div class="col-lg-4">
     <x-product title="Title" />
   </div>
 </div>

<div class="row col-lg-9 mx-auto mt-5 d-flex justify-content-around mb-4">
  <div class="row col-lg-5 rounded bg-light shadow-sm border p-4">
   <div class="col-lg-8">
     <h5>LAS MEJORES TIENDAS OFICIALES</h5>
     <button class="btn btn-primary">Ver mas</button>
   </div>
   <div class="col-lg-4">
     <img class="col-lg-12" src="https://http2.mlstatic.com/D_NQ_793572-MLA45981270409_052021-C.webp" alt="">
   </div>
  </div>

  <div class="row col-lg-5 rounded bg-light shadow-sm border p-4">
   <div class="col-lg-8">
     <h5>PRIMERA VEZ COMPRANDO</h5>
     <button class="btn btn-primary">Ver mas</button>
   </div>
   <div class="col-lg-4">
     <img class="col-lg-12" src="https://http2.mlstatic.com/D_NQ_904832-MLA46520436475_062021-C.webp" alt="">
   </div>
  </div>
</div>
<div class="p-2 mb-4"></div>
@endsection