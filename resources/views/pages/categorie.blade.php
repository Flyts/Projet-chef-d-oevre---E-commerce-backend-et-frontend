@extends('layouts/master', ['titre' => 'Categorie '.$nom_categorie])

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    @if(getSousCategoryExist($categorie->id) > 0)
    	<link rel="stylesheet" href="{{ asset('css/categorys.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/owl/owl.carousel.min.css') }}">
	    <link rel="stylesheet" href="{{ asset('css/owl/owl.theme.default.min.css') }}">
    @endif
@endpush

@section('Body_Page')
    <section class="sam">
	    @if(getSousCategoryExist($categorie->id) > 0)
	    	<div id="Nav_category" style="background-color: @if($slug === 'hommes') var(--bluegrey) @elseif($slug === 'femmes') #ec407a @endif;">
				<ul>
		    		@foreach(getSousCategory($categorie->id) as $SousCategory)
						<li id="li">
							<span>{{ $SousCategory->name }}</span>

							<div class="Affiche">
								<div class="par_produit">
									<h5>Voir Par Produit</h5>

									<div class="contents">	
										<nav>
											@foreach(getOtherSousCategory_1($SousCategory->id) as $OtherSousCategory)
												<a href="{{ route('othercategory', [$categorie->slug, $OtherSousCategory->slug]) }}">{{ $OtherSousCategory->name }}</a>
											@endforeach
										</nav>
										<nav>
											@foreach(getOtherSousCategory_2($SousCategory->id) as $OtherSousCategory)
												<a href="{{ route('othercategory', [$categorie->slug, $OtherSousCategory->slug]) }}">{{ $OtherSousCategory->name }}</a>
											@endforeach
										</nav>
									</div>
								</div>

								<div class="my_images">
									<div class="contents">	
		    							@foreach(getImages($categorie->id, $SousCategory->id) as $SousCategoryImage)
		    								<a href="{{ route('product.index', $SousCategoryImage->slug) }}">
		    									<div class="imgs">
		    										<div class="int" style="background-image: url({{ asset($SousCategoryImage->image) }});"></div>
		    									</div>
		    								</a>
		    							@endforeach
									</div>
								</div>
							</div>
						</li>
		    		@endforeach
				</ul>
	    	</div>
	    @endif

    	<div id="Banner">
    		<div class="Image" style="{{ getImageBanner($slug) }}">
    			@if($slug === 'hommes' || $slug === 'femmes')
    				<h4 style="text-align: center;">vêtements Pour {{ $slug }} en solde</h4>
    			@endif
		    	<div class="owl-carousel owl-theme">
	    			@foreach($banners as $banner)
						<div class="Part">
							<div class="imgs" style="background-image: url({{ asset($banner->image) }});"></div>
							<a href="{{ route('product.index', $banner->slug) }}" class="titre" style="color: var(--bluegrey_f); text-decoration: none;">
								<span>{{ $banner->titre }}</span>
							</a>
						</div>
	    			@endforeach
    			</div>
    		</div>
    	</div>

    	<div id="Presentation">
    		<div class="First">
    			@foreach($categories as $categorie)
	    			<div class="part col-xs-12 col-sm-6 col-md-4 col-lg-3">
	    				<a href="{{ route('product.index', $categorie->slug) }}" class="img">	
	    					<div class="int" style="background-image: url({{ asset($categorie->image) }});">
	    					</div>
	    					
    						<div class="text">
    							<span>{{ $categorie->titre }}</span>
		    					<span>
		    						@if($categorie->solde != null)
		    							<i>{{ getPrice($categorie->price) }}</i>
		    							<strong>{{ getMySolde($categorie->price, $categorie->solde) }}</strong>
		    						@else
		    							{{ getPrice($categorie->price) }}
		    							<strong style="visibility: hidden;">{{ getMySolde($categorie->price, $categorie->solde) }}</strong>
		    						@endif
		    					</span>
    						</div>
	    				</a>
	    			</div>
    			@endforeach
    		</div>
    	</div>
    </section>
@endsection


@push('script')
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/down.js') }}"></script>
    <script src="{{ asset('js/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/owl-modif.js') }}"></script>
    <script src="{{ asset('js/secondaire_menu.js') }}"></script>
@endpush