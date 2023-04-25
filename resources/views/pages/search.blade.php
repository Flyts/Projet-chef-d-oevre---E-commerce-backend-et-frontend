@extends('layouts/master', ['titre' => 'Recherche'])

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
@endpush

@section('Body_Page')
    <section>
    	<div id="News">
    		<h3>Recherche</h3>

    		<h5><span>{{ getResultat($counts->where('stock', '>', 0)->count()) }}</span> pour la recherche "<strong>{{ request()->input('search') }}</strong>".</h5>

    		@if($products->total() > 0)
    			@foreach($products as $product)
		    		@if($product->stock > 0)
			    		<div class="Product col-xs-12 col-sm-4 col-md-3 col-lg-2">
			    			<article>
			    				<div class="options">
		    						@guest()
		    							<a href="#" id="Favori_plus" title="Ajouter au favori">
			    							<span class="fa fa-heart-o"></span>
			    							
						                    <form action="{{ route('favori.store') }}" method="post" style="display: none;" id="Form_Favori">
						                        @csrf
						                        <input type="hidden" name="favori_id" value="{{ $product->id }}">
						                    </form>
			    						</a>
		    						@else
		    							<a href="#" id="Favori_plus" title="Ajouter au favori">
			    							<span class="{{ getLike($product->id) }}"></span>
			    							
						                    <form action="{{ route('favori.store') }}" method="post" style="display: none;" id="Form_Favori">
						                        @csrf
						                        <input type="hidden" name="favori_id" value="{{ $product->id }}">
						                    </form>
			    						</a>
		    						@endguest

		    						<a href="#" id="Cart_plus">
		    							<span class="fa fa-cart-plus"></span>
		    							
					                    <form action="{{ route('cart.store') }}" method="post" style="display: none;" id="Form_hidden">
					                        @csrf
					                        <input type="hidden" name="product_id" value="{{ $product->id }}">
					                    </form>
		    						</a>
			    				</div>

			    				<div class="image_article">
			    					<div class="int" style="background-image: url({{ asset($product->image) }});"></div>
			    				</div>

			    				<div class="describe">
			    					<span>{{ $product->titre }}</span>
			    					<span>
			    						@if($product->solde != null)
			    							<i>{{ getPrice($product->price) }}</i>
			    							<strong>{{ getMySolde($product->price, $product->solde) }}</strong>
			    						@else
			    							{{ getPrice($product->price) }}
			    							<strong style="visibility: hidden;">{{ getMySolde($product->price, $product->solde) }}</strong>
			    						@endif
			    					</span>
			    				</div>

			    				<div class="show">
			    					<a href="{{ route('product.index', $product->slug) }}">Show</a>
			    				</div>
			    			</article>
			    		</div>
		    		@endif
	    		@endforeach
    		@else
    			<div class="Product col-xs-12">
	    			<article style="display: flex; justify-content: center; align-items: center; box-shadow: none; padding: 20px;">
	    				<div class="in" style="background-image: url({{ asset('img/Nada.png') }}); background-size: contain; height: 250px; width: 250px;">
	    					
	    				</div>
	    			</article>
	    		</div>
    		@endif
    	</div>

		<div id="Pagination">
			{{ $products->appends(request()->input())->links() }}
		</div>
    </section>
@endsection

@push('script')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush