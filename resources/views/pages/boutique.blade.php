@extends('layouts/master', ['titre' => 'Boutique'])

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boutique.css') }}">
@endpush

@section('Body_Page')
    <section>
    	<div id="Article">
            <div class="All_photo col-xs-12 col-md-2">
                @if(empty($product->other_images))
                    <div class="photo" id="photo">
                        <div class="int" style="background-image: url({{ asset($product->image) }});"></div>
                    </div>
                @else
                    @foreach(unserialize($product->other_images) as $other)
                        <div class="photo" id="photo">
                            <div class="int" style="background-image: url({{ asset($product->image) }});" id="Other"></div>
                        </div>
                        <div class="photo">
                            <div class="int" style="background-image: url({{ asset($other[0]) }});"   id="Other"></div>
                        </div>
                        <div class="photo">
                            <div class="int" style="background-image: url({{ asset($other[1]) }});"   id="Other"></div>
                        </div>
                        <div class="photo">
                            <div class="int" style="background-image: url({{ asset($other[2]) }});"   id="Other"></div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="Photo col-xs-12 col-md-4">
                <div class="int" style="background-image: url({{ asset($product->image) }});"  id="Photo_change"></div>
            </div>

            <div class="Content col-xs-12 col-lg-6">
                <div class="title">
                    <span>{{ $product->titre }}</span>
                    @guest()
                        <span class="fa fa-heart-o" id="Favori_plus" title="Ajouter au favori">
                            <form action="{{ route('favori.store') }}" method="post" style="display: none;" id="Form_Favori">
                                @csrf
                                <input type="hidden" name="favori_id" value="{{ $product->id }}">
                            </form>
                        </span>
                    @else
                        <span class="{{ getLike($product->id) }}" id="Favori_plus" title="Ajouter au favori">
                            <form action="{{ route('favori.store') }}" method="post" style="display: none;" id="Form_Favori">
                                @csrf
                                <input type="hidden" name="favori_id" value="{{ $product->id }}">
                            </form>
                        </span>
                    @endguest
                </div>

                <div class="subtitle">
                    <span>{{ $product->subtitle }}</span>
                </div>

                <div class="price">
                    <span>
                        @if($product->solde != null)
                            <i>{{ getPrice($product->price) }}</i>
                            <strong>{{ getMySolde($product->price, $product->solde) }}</strong>
                        @else
                            {{ getPrice($product->price) }}
                        @endif
                    </span>
                </div>

                <div class="color">
                    @if($product->couleur_id != null)
                        <span>Couleur :</span>
                        <span>{{ getCouleur($product->couleur_id) }}</span>
                    @endif
                </div>

                <div class="color">
                    @if($product->taille_id != null)
                        <span>Taille :</span>
                        <span>{{ getTaille($product->taille_id) }}</span>
                    @endif
                </div>


                @if($product->stock <= 5)
                    <div class="stock">
                            <i class="fa fa-clock-o"></i> 
                            <span>bientôt épuisé</span>
                    </div>
                @endif

                <div class="quantity">
                    <form action="{{ route('cart.store') }}" method="post">
                        @csrf
                        
                        <div class="label_input">
                            <label for="Quantity">Quantité</label>
                            <input type="number" name="size" min="1" id="Quantity" placeholder="Enter votre quantité" class="@error('size') {{ 'errors' }} @enderror" value="{{ 1 ?? old('size') }}" required>

                            @error('size')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <button type="submit">
                            <span>Ajouter au panier</span>
                        </button>
                    </form>
                </div>

                <div class="describe"><!-- 
                    <div class="titre">Description</div>
                    <span>{{ $product->description }}</span>
                
                 -->
                    <div>
                        <ul class="tabs">
                            <li class="active">
                                <div id="titre" class="home">Description</div>
                            </li>
                            <li>
                                <div id="titre" class="mentions">Mentions</div>
                            </li>
                            <li>
                                <div id="titre" class="about">About</div>
                            </li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tab-content active" id="home">
                                {{ $product->description }}
                            </div>

                            <div class="tab-content" id="mentions"> 
                                consectetur adipisicing elit. Fuga, ullam, similique. Provident magnam deserunt error at nostrum impedit ipsa obcaecati, enim, quis sed, sequi ab dolorem reprehenderit beatae optio neque!
                            </div>

                            <div class="tab-content" id="about">
                                sit amet, consectetur adipisicing elit. Rem magni doloribus non nisi unde consectetur deleniti provident earum sed, iste autem voluptatibus eligendi soluta porro nemo incidunt! Voluptatibus, provident, est!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    	</div>
    </section>
@endsection



@push('script')
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/boutique.js') }}"></script>
@endpush