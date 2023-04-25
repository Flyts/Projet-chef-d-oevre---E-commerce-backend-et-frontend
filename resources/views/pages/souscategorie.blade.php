@extends('layouts/master', ['titre' => $nom_categorie. ' '. $othersouscategorie->name])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    @if(getSousCategoryExist($categorie->id) > 0)
    	<link rel="stylesheet" href="{{ asset('css/categorys.css') }}">
    	<link rel="stylesheet" href="{{ asset('css/othersouscategorys.css') }}">
    @endif

    <link rel="stylesheet" href="{{ asset('css/partials/_AjaxLoader.css') }}">
@endpush

@section('Body_Page')
    <section>

	    @if(getOtherSousCategoryExist($souscategorie->id) > 0)
            <div id="Nav_category" style="background-color: @if($slug === 'hommes') var(--bluegrey) @elseif($slug === 'femmes') #ec407a @endif;">
				<ul>
		    		@foreach(getSousCategory($categorie->id) as $SousCategory)
						<li>
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

    	<div id="News">
    		<h3>
    			{{ $souscategorie->name. ' - ' .$othersouscategorie->name }} 
    			<span style="text-transform: lowercase;">{{ ' pour ' .$categorie->name }}</span>
    		</h3>

    		<div class="Trier">
    			<form action="{{ route('othercategory.store') }}" id="Form" method="POST">
    				<div class="input">
    					<div class="trier content" id="0">
    						<input type="hidden" name="slug" value="{{ $slug }}">
    						<input type="hidden" name="otherSlug" value="{{ $otherSlug }}">
    						<input type="number" name="combien" value="{{ getNombreArticleAfficher() }}" style="display: none;" id="combien">

    						<span>Trier <i class="fa fa-angle-down"></i></span>
    						<div class="navs">
    							<li id="nouveau">
    								Nouveau
    								<strong><i></i></strong>
    							</li>
    							<li id="dcroissant">
    								Prix décroissant
    								<strong><i></i></strong>
    							</li>
    							<li id="croissant">
    								Prix croissant
    								<strong><i></i></strong>
    							</li>
    						</div>

    						<input type="hidden" name="trier" value="0" id="input">
    					</div>


    					<div class="marque content" id="0">
    						<span>Marque <i class="fa fa-angle-down"></i></span>
    						<div class="navs">
    							<li id="0">
    								Tout
    								<strong><i></i></strong>
    							</li>

                                @foreach($marques as $marque)
                                    @if(getMarqueExist($marque->id, $otherSlug) > 0)
                                        <li id="{{ $marque->id }}">
                                            {{ $marque->name }}
                                            <strong><i></i></strong>
                                        </li>
                                    @endif
                                @endforeach
    						</div>

    						<input type="hidden" name="marque" value="0" id="input">
    					</div>


    					<div class="couleur content" id="0">
    						<span>Couleur <i class="fa fa-angle-down"></i></span>
    						<div class="navs">
    							<li id="0">
    								Tout
    								<strong><i></i></strong>
    							</li>
                                
                                @foreach($couleurs as $couleur)
                                    @if(getCouleurExist($couleur->id, $otherSlug) > 0)
                                        <li id="{{ $couleur->id }}">
                                            {{ $couleur->name }}
                                            <strong><i></i></strong>
                                        </li>
                                    @endif
                                @endforeach
    						</div>

    						<input type="hidden" name="couleur" value="0" id="input">
    					</div>


    					<div class="taille content" id="0">
    						<span>Taille <i class="fa fa-angle-down"></i></span>
    						<div class="navs">
    							<li id="0">
    								Tout
    								<strong><i></i></strong>
    							</li>
                                
                                @foreach($tailles as $taille)
                                    @if(getTailleExist($taille->id, $otherSlug) > 0)
                                        <li id="{{ $taille->id }}">
                                            {{ $taille->name }}
                                            <strong><i></i></strong>
                                        </li>
                                    @endif
                                @endforeach
    						</div>

    						<input type="hidden" name="taille" value="0" id="input">
    					</div>


    					<!-- <div class="content" id="0">
    						<span>Gamme de prix <i class="fa fa-angle-down"></i></span>
    						<div class="navs">
    							<li>
    								Tout
    								<strong><i></i></strong>
    							</li>
    							<li>
    								Nouveau
    								<strong><i></i></strong>
    							</li>
    						</div>
    					</div> -->
    				</div>

    				<div class="Utilities">
    					<span class="route_favori"   id="{{ route('favori.store') }}"></span>
    					<span class="route_addCart"  id="{{ route('cart.store') }}"></span>
    					<span class="route_viewMore" id="{{ route('product.index', $categorie->slug) }}"></span>
    					@csrf
    				</div>
    			</form>

    			<div id="Close_Trie"></div>
    		</div>

            <div class="Value_Trie">
                <div class="part">
                    <span>Trier par : </span>
                    <span class="trier_choisi">Aucun</span>
                </div>

                <div class="part">
                    <span>Marque : </span>
                    <span class="marque_choisi">Tout</span>
                </div>

                <div class="part">
                    <span>Couleur : </span>
                    <span class="couleur_choisi">Tout</span>
                </div>

                <div class="part">
                    <span>Taille : </span>
                    <span class="taille_choisi">Tout</span>
                </div>
            </div>

    		
    		@foreach($othersouscategories as $categorie)
	    		<div class="Product col-xs-6 col-sm-4 col-md-3 col-lg-2">
	    			<article>
	    				<div class="options">
    						@guest()
	    						<div class="icons" id="Favori_plus" title="Ajouter au favori">
	    							<span class="fa fa-heart-o"></span>
	    							
				                    <form action="{{ route('favori.store') }}" method="post" style="display: none;" id="Form_Favori">
				                        @csrf
				                        <input type="hidden" name="favori_id" value="{{ $categorie->id }}">
				                    </form>
	    						</div>
	    					@else
	    						<div class="icons" id="Favori_plus" title="Ajouter au favori">
	    							<span class="{{ getLike($categorie->id) }}"></span>
	    							
				                    <form action="{{ route('favori.store') }}" method="post" style="display: none;" id="Form_Favori">
				                        @csrf
				                        <input type="hidden" name="favori_id" value="{{ $categorie->id }}">
				                    </form>
	    						</div>
    						@endguest

    						<div class="icons" id="Cart_plus" title="Ajouter au panier">
    							<span class="fa fa-cart-plus"></span>
    							
			                    <form action="{{ route('cart.store') }}" method="post" style="display: none;" id="Form_hidden">
			                        @csrf
			                        <input type="hidden" name="product_id" value="{{ $categorie->id }}">
			                    </form>
    						</div>
	    				</div>

	    				<div class="image_article">
	    					<div class="int" style="background-image: url({{ asset($categorie->image) }});"></div>
	    				</div>

	    				<div class="describe">
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

	    				<div class="show">
	    					<a href="{{ route('product.index', $categorie->slug) }}">Voir plus</a>
	    				</div>
	    			</article>
	    		</div>
    		@endforeach
    	</div>

    	<div id="Hide_results">
    		<form style="display: none;">
    			<input type="number" name="combien" value="{{ getNombreArticleAfficher() }}">
    		</form>

            <div class="Result_count">
                <span>Vous avez vu</span>
                <span class="nombre_deja_vu">{{ getNombreDejaVu($counts) }}</span>
                <span>articles sur</span>
                <span class="nombre_a_voir">{{ $counts }}</span>
            </div>

            <div class="Chargement">
                <div class="int" style="width: {{ getPourcentage(getNombreDejaVu($counts), $counts) }};"></div>
            </div>

            @if($counts === getNombreDejaVu($counts))
                <button id="afficher_plus" style="display: none;">
                    <span>Afficher Plus</span>
                </button>
            @else
                <button id="afficher_plus">
                    <span>Afficher Plus</span>
                </button>
            @endif
    	</div>


    	@include('layouts/partials/_AjaxLoader')

    </section>
@endsection


@push('script')
    <script src="{{ asset('js/othersouscategory/TrieAjax.js') }}"></script>
    <script src="{{ asset('js/othersouscategory/plusderesultats.js') }}"></script>
    <script src="{{ asset('js/secondaire_menu.js') }}"></script>
@endpush