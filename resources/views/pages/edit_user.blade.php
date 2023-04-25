@extends('layouts/master', ['titre' => 'Modifier compte'])

@push('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/edit_user.css') }}">
@endpush

@section('Body_Page')
    <section>
        <div id="Titre">
            <h3>Modifier mon compte</h3>
        </div>
            
        <div id="Article" class="col-xs-12">
          <div id="Corps">
            <div class="container-fluid">
              <div class="row">
                <div class="Block col-xs-12 col-sm-12 col-md12">
                  <form action="{{ route('edit.update') }}" method="POST" class="block_photo" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    
                    <div class="change_photo">
                      <div class="photo" style="background-image: url({{ asset(Auth::user()->avatar) }});">
                        
                      </div>

                      <div class="button">  
                        <div class="file">
                          <input type="file" name="avatar"  hidden="hidden" id="real_file" required>

                          <button type="button" id="custom_file">
                            @lang('modifier.btn_file')
                          </button>

                          <span id="custom_text">Aucune photo Choisi</span>
                        </div>
                        
                        @error('avatar')
                            <span class="error">{{ $message }}</span>
                        @enderror


                        <button type="submit" style="margin-top: 20px;">
                          <span>
                            @lang('modifier.btn_enregistrer')
                          </span>
                        </button>
                      </div>
                    </div>
                  </form>

                  <form action="{{ route('edit.modifier') }}" method="POST" class="block_int">
                    @csrf

                    <div class="change_info">
                      <div class="general_info">
                        <h3>@lang('modifier.info_General')</h3>
                        <div class="label_input_1 label_input">

                          <div class="int">
                            <label for="Nom">@lang('modifier.nom')</label>
                            <input type="text" name="nom" id="Nom" placeholder="@lang('modifier.placeholder_Nom')" value="{{ $errors->first('nom') ? old('nom') : Auth::user()->nom }}" class="@error('nom') errors @enderror" required>

                            @error('nom')
                                <span class="error">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="int">
                            <label for="Prénom">@lang('modifier.prenom')</label>
                            <input type="text" name="prenom" id="Prénom" placeholder="@lang('modifier.placeholder_Prenom')" value="{{ $errors->first('prenom') ? old('prenom') : Auth::user()->prenom }}" class="@error('prenom') errors @enderror" required>

                            @error('prenom')
                                <span class="error">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="info_compte">
                        <h3>@lang('modifier.info_Compte')</h3>
                        <div class="label_input"> 

                          <div class="int">
                            <label for="TEL">@lang('modifier.tel')</label>
                            <input type="text" name="tel" id="TEL" placeholder="@lang('modifier.placeholder_tel')" value="{{ $errors->first('tel') ? old('tel') : Auth::user()->tel }}" class="@error('tel') errors @enderror" required>

                            @error('tel')
                                <span class="error">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="int">
                            <label for="id">@lang('modifier.identifiant')</label>
                            <input type="text" name="identifiant" id="id" placeholder="@lang('modifier.placeholder_id')" value="{{ $errors->first('identifiant') ? old('identifiant') : Auth::user()->identifiant }}" class="@error('identifiant') errors @enderror" required>

                            @error('identifiant')
                                <span class="error">{{ $message }}</span>
                            @enderror
                          </div>
                        </div>
                      </div>

                      <div class="change_pass">
                        <h3>@lang('modifier.change_passe')</h3>

                        <div class="label_input">
                          <div class="int">
                            <label for="actuel_pass">@lang('modifier.pass_actuel')</label>
                            <input type="password" name="ancien_pass" id="actuel_pass" placeholder="@lang('modifier.placeholder_pass')" required>

                            @if (session('passeword_error'))
                                <div class="error">
                                    {{ session('passeword_error') }}
                                </div>
                            @endif
                          </div>

                          <div class="int">
                            <label for="change_pass">@lang('modifier.pass_new')</label>
                            <input type="password" name="password" id="change_pass" placeholder="@lang('modifier.placeholder_pass')" class="@error('password') errors @enderror" required>

                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                          </div>

                          <div class="int">
                            <label style="visibility: hidden;">confirmation</label>
                            <input type="password" name="password_confirmation" id="confirm_pass" placeholder="@lang('modifier.confirm_pass')" required>
                          </div>
                      </div>
                    </div>

                    <div class="Save_btn">
                      <button type="submit">
                        <span>@lang('modifier.btn_enregistrer')</span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
@endsection


@push('script')
    <script type="module" src="{{ asset('js/custom_file_btn.js') }}"></script>
@endpush





        