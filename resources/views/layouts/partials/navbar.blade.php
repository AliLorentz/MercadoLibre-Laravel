<link href="{{ URL::asset('css/nav.css') }}" rel="stylesheet">

	<nav class="d-flex justify-content-center  nav">
		<div class="row col-lg-9 d-flex justify-content-around mt-2 align-items-center">
			<div class="col-lg-2">
			<a href="{{route('home')}}">Logo</a>
			</div>
			<div class="col-lg-6 ">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
  					<button class="btn btn-outline-dark" type="button" id="button-addon2">Button</button>
				</div>
			</div>
			<div class="col-lg-4">
				Anuncio
			</div>
		</div>
		<div class="row col-lg-9 d-flex categorias mt-2 mb-2">
			<a href="" class="col-lg-2">Categorias</a>
			<div class="col-lg-6 opciones">
				<a href="">Historial</a>
				<a href="{{route('store.index')}}">Tienda</a>
				<a href="">Ofertas Semanalas</a>
				<a href="">Ayuda</a>
			</div>
			<div class="col-lg-4">
				@guest
				<a href="{{ route('register') }}">Crear Cuenta</a>
				<a href="{{ route('login') }}">Ingreso</a>
				@else
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                   LogOut
                  </a>
                 @endguest
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                 </form>
                
				
			</div>
		</div>
	</nav>