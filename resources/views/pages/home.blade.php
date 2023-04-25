@extends('layouts/master', ['titre' => 'Home'])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl/owl.theme.default.min.css') }}">
@endpush

@section('Body_Page')
    <section>
    	<div id="News">
    		<div class="Titre">
    			<h3>Nouveaux Produits</h3>
    			<div class="btns">
    				<span class="fa fa-chevron-left" id="Chevron_left"></span>
    				<span class="fa fa-chevron-right" id="Chevron_right"></span>
    			</div>
    		</div>

		    @if($products->count() > 0)
		    	<div class="owl-carousel owl-theme">
		    		@foreach($products as $product)
			    		<div class="Product">
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

		    						<a href="#" id="Cart_plus" title="Ajouter au panier">
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
			    					<a href="{{ route('product.index', $product->slug) }}">Voir plus</a>
			    				</div>
			    			</article>
			    		</div>
		    		@endforeach
		    	</div>
		    @endif
    	</div>



		@if($plusvendu->count() > 0)
    		<div id="News">
	    		<h3>Produits Le Plus Vendu</h3>

	    		@foreach($plusvendu as $vente)
		    		<div class="Product col-xs-6 col-sm-4 col-md-3 col-lg-2">
		    			<article>
		    				<div class="options">
	    						@guest()
	    							<a href="#" id="Favori_plus" title="Ajouter au favori">
		    							<span class="fa fa-heart-o"></span>
		    							
					                    <form action="{{ route('favori.store') }}" method="post" style="display: none;" id="Form_Favori">
					                        @csrf
					                        <input type="hidden" name="favori_id" value="{{ $vente->produt_id }}">
					                    </form>
		    						</a>
	    						@else
	    							<a href="#" id="Favori_plus" title="Ajouter au favori">
		    							<span class="{{ getLike($vente->produt_id) }}"></span>
		    							
					                    <form action="{{ route('favori.store') }}" method="post" style="display: none;" id="Form_Favori">
					                        @csrf
					                        <input type="hidden" name="favori_id" value="{{ $vente->produt_id }}">
					                    </form>
		    						</a>
	    						@endguest

	    						<a href="#" id="Cart_plus" title="Ajouter au panier">
	    							<span class="fa fa-cart-plus"></span>
	    							
				                    <form action="{{ route('cart.store') }}" method="post" style="display: none;" id="Form_hidden">
				                        @csrf
				                        <input type="hidden" name="product_id" value="{{ $vente->produt_id }}">
				                    </form>
	    						</a>
		    				</div>

		    				<div class="image_article">
		    					<div class="int" style="background-image: url({{ asset($vente->image) }});"></div>
		    				</div>

		    				<div class="describe">
		    					<span>{{ $vente->name_produt }}</span>
		    					<span>
		    						{{ getPrice($vente->price) }}
		    					</span>
		    				</div>

		    				<div class="show">
		    					<a href="{{ route('product.index', $vente->slug) }}">Voir plus</a>
		    				</div>
		    			</article>
		    		</div>
	    		@endforeach
	    	</div>
		@endif
    </section>
@endsection

@push('script')
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl-modif.js') }}"></script>
@endpush