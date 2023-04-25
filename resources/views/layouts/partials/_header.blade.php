
  {{-- ********** HEADER ********** --}}
    <header>
		<div id="Nav">
			<div class="Logo_Menu">	
				<a href="{{ route('home') }}"><div class="logo"></div></a>

				<div class="menu">
					<ul>
					
						@foreach(App\Models\menus::all() as $menu)
							<li><a href="{{ route($menu->lien) }}" class="{{ active_page($menu->lien) }}">{{ $menu->name }}</a></li>
						@endforeach
					</ul>

					<div class="Bars">
						<button id="Bars">
							<span class="fa fa-bars"></span>
						</button>
					</div>
				</div>
			</div>

			<div class="Options">
				
				<button id="Active_Secondaire">
					<span class="fa fa-ellipsis-v"></span>
				</button>

				<a href="{{ route('cart.index') }}" class="{{ active_page('cart.index') }}">
					<span class="fa fa-shopping-bag"></span>
					<sup class="Badge badge badge-pill badge-dark">{{ Cart::count() }}</sup>
				</a>
				<button id="Active_search">
					<span class="fa fa-search"></span>
				</button>

				@guest
					<a href="" title="Connection & Enregistrement" id="Active_Connexion" style="font-size: 20px;">
						<span class="fa fa-user"></span>
					</a>

					<div class="connexion_user" id="Connexion_user">
						<a href="{{ route('login') }}">
							<span class="fa fa-sign-in"></span>Connection
						</a>
						<a href="{{ route('register') }}">
							<span class="fa fa-sign-out"></span>Enregistrement
						</a>
					</div>
				@else
					<div class="Photo" style="background-image: url({{ asset(Auth::user()->avatar) }});" id="Avatar_btn">
					</div>

					<div id="Avatar">
						<div class="Name">
							<span>{{ Auth::user()->nom }}</span>
							<span>{{ Auth::user()->prenom }}</span>
						</div>
						<ul class="ul">
							<div class="part">
								<li>
									<a href="{{ route('edit.index') }}" class="{{ active_page('edit.index') }}">
										<div><span class="fa fa-edit"></span>Modifier mon compte</div>
									</a>
								</li>
								<li>
									<a href="{{ route('historique') }}" class="{{ active_page('historique') }}">
										<div><span class="fa fa-history"></span>Historique</div>
										<strong class="avatar_Badge badge badge-pill badge-dark">{{ getHistory() }}</strong>
									</a>
								</li>
								<li>
									<a href="{{ route('favori.index') }}" class="{{ active_page('favori.index') }}">
										<div><span class="fa fa-heart"></span>Favori</div>
										<strong class="avatar_Badge badge badge-pill badge-dark">{{ getFovor() }}</strong>
									</a>
								</li>
								<li>
									<a href="{{ route('banque') }}" class="{{ active_page('banque') }}">
										<div><span class="fa fa-money"></span>Wenze Money</div>
										<strong class="avatar_Badge badge badge-pill badge-dark">{{ getPriceSansTaxe(getSolde()) }}</strong>
									</a>
								</li>
							</div>
							<div class="other">	
								<li>
									<a href="{{ route('logout') }}"
					                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										<div><span class="fa fa-sign-out"></span>Déconnexion</div>
									</a>

					                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					                    @csrf
					                </form>
								</li>
							</div>
						</ul>
					</div>
				@endguest
			</div>
		</div>

		<div id="Welcome">
			<article class="col-xs-12 col-md-5 col-lg-4">
				<div class="Categories">
					<div class="titre">
						<span>Categories</span>
					</div>

{{-- INCLUDE MENU DES CATEGORIES --}}
					@include('layouts/partials/_nav-menu')

{{-- #FIN INCLUDE MENU DES CATEGORIES --}}

				</div>
				
				<div class="Btns">
					@guest
						<a href="{{ route('register') }}">
							<span>Créer compte</span>
						</a>

						<a href="{{ route('login') }}">
							<span>Connexion</span>
						</a>
					@else
						<a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
							<span>Déconnexion</span>
						</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
					@endguest
				</div>
			</article>

			<aside class="col-xs-12 col-md-7 col-lg-8">
				<div class="image">
					@if(!empty($product))
						<div class="int" style="background-image: url({{ $product->image }});" id="Image"></div>
					@elseif(!empty($sam))
						<div class="int" style="background-image: url({{ $sam->image }});"></div>
					@else
					@endif
				</div>
			</aside>
		</div>

		<div id="Down">
			<button>
				<span class="fa fa-chevron-down"></span>
			</button>
		</div>
    </header>

						
	<div id="Black"></div>

	<div id="Search_bar">
		<form action="{{ route('product.search') }}" method="get">
			<button type="button" id="Close_search">
				<span class="fa fa-close"></span>
			</button>

			<div class="Part">
				<input type="text" name="search" placeholder="Recherche..." required autofocus>
				<select name="categorie" id="">
					<option value="0" selected>Tout</option>
					@foreach(App\Models\Categorys::all() as $categorie)
						<option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
					@endforeach
				</select>
			</div>

			<button type="submit">
				<span class="fa fa-search"></span>
			</button>
		</form>
	</div>

	<div id="Search_black"></div>
	<div id="Avatar_black"></div>
  {{-- ********** #FIN HEADER ********** --}}


