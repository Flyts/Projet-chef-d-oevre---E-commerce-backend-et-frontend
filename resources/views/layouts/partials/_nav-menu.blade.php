
<nav>
	<ul>
		@foreach(App\Models\Categorys::all() as $category)
			<li>
				<a href="{{ route('categorie.index', $category->slug) }}" id="{{ $category->slug }}">
					<span class="fa fa-{{ $category->icon }}"></span>{{ $category->name }}
				</a>
			</li>
		@endforeach
	</ul>
</nav>
