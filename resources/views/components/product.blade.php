<style>
	.product:hover{
		box-shadow: 0px 6px 28px 5px rgba(0,0,0,0.4);
	}
</style>

<div  class="card p-2 product mb-3" style="width: 16rem;">
	<a href="{{route('store.show',$id)}}">
		 <img src="https://http2.mlstatic.com/D_NQ_NP_865683-MLV45741021815_042021-W.webp" class="card-img-top" alt="...">
		<div class="card-body pt-1">
	    	<h5 class="card-title">U$S {{$price}}</h5>
	    	<p class="card-text lh-1" style="font-size: 12px;">{{$title}}</p>
  		</div>
	</a>
</div>