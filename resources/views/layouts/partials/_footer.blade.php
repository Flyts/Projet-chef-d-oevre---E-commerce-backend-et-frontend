
  {{-- ********** FOOTER ********** --}}
    <footer>
		<div id="Wenze" class="col-xs-12 col-sm-12 col-md-4">
			<div class="Titre">
				<span>{{ config('app.name') }}</span>
			</div>

			<div class="Content">
				<div class="part">
                    <i class="fa fa-map-marker"></i> {{ getInfo('location') }}
				</div>
				<div class="part">
                    <i class="fa fa-phone"></i> {{ getInfo('phone') }}
				</div>
				<div class="part">
                    <i class="fa fa-envelope"></i> {{ getInfo('email') }}
				</div>
				<div class="social">
                    <a href="{{ getInfoLien('facebook') }}" _bank><i class="fa fa-facebook"></i></a>
                    <a href="{{ getInfoLien('twitter') }}"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
		</div>

		<div id="Categories"  class="col-xs-12 col-sm-6 col-md-4">
			<div class="Titre">
				<span>Categories</span>
			</div>

			<div class="Content">
				<ul>
					@foreach(getCategories() as $item)
						<li><a href="{{ route('categorie.index', $item->slug) }}">{{ $item->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>

		<div id="Infomation"  class="col-xs-12 col-sm-6 col-md-4">
			<div class="Titre">
				<span>Infomation</span>
			</div>

			<div class="Content">
				<ul>
					<li>
						<a href="{{ route('a-propos-de-nous') }}" class="{{ active_page('a-propos-de-nous') }}">A Propos de Nous</a>
					</li>
					<li>
						<a href="{{ route('contact') }}" class="{{ active_page('contact') }}">Contactez Nous</a>
					</li>
					<li>
						<a href="#">Termes & Conditions</a>
					</li>
					<li>
						<a href="#">Retours & Echanges</a>
					</li>
				</ul>
			</div>
		</div>

		<div id="Last"  class="col-xs-12">
			<div class="Copyright">
				© 2020 <a href="#">FlyTs</a> All Right Reserved.
			</div>

			<div class="Menu">
				<ul>
					@foreach(getMenus() as $item)
						<li><a href="{{ route($item->lien) }}" class="{{ active_page($item->lien) }}">{{ $item->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>



		<div id="BackTop">
			<span class="fa fa-chevron-up"></span>
		</div>
    </footer>
  {{-- ********** #FIN FOOTER ********** --}}
