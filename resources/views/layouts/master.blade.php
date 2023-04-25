{{-- HEAD --}}
    @include('layouts/partials/_head')
{{-- #Fin HEAD --}}

{{-- Loader --}}
	<!-- include('layouts/partials/_loader') -->
{{-- #Fin Loader --}}


{{-- Header --}}
	@include('layouts/partials/_header')
{{-- #Fin Header --}}


    @yield('Body_Page')


{{-- Footer --}}
	@include('layouts/partials/_footer')
{{-- #Fin Footer --}}

{{-- FOOT --}}
	@include('layouts/partials/_foot')
{{-- #Fin FOOT --}}