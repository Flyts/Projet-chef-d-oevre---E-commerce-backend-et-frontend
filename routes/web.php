<?php



Auth::routes();




/*=====================================
	WHEN YOUR ARE NOT CONNECT
=====================================*/
/*--- HOME ---*/
Route::get('/',  'My_controller\HomeController@index')->name('home');
Route::post('/', 'My_controller\HomeController@store')->name('home.store');


/*--- Boutique ---*/
Route::get('/boutique/{slug}', 'My_controller\ProductController@index')->name('product.index');


/*--- Recherche ---*/
Route::get('/recherche', 'My_controller\ProductController@search')->name('product.search');


/*--- Categorie ---*/
Route::get('categorie/{slug}', 'My_controller\CategorieController@index')->name('categorie.index');


/*--- Sous Categorie ---*/
Route::get('/othercategory/{slug}/{otherSlug}', 'My_controller\SousCategorieController@index')->name('othercategory');
Route::post('/othercategory', 'My_controller\SousCategorieController@store')->name('othercategory.store');

/*--- Contact ---*/
Route::get('/contact',  'My_controller\ContactController@index')->name('contact');
Route::post('/contact',  'My_controller\ContactController@store')->name('contact');


/*--- A Propos de Nous ---*/
Route::get('/a-propos-de-nous',  'My_controller\AproposDeNousController@index')->name('a-propos-de-nous');

/*=====================================
	#FIN WHEN YOUR ARE NOT CONNECT
=====================================*/



/*============================
	WHEN YOUR ARE CONNECT
============================*/
Route::group(['middleware' => ['auth']], function()
{
	/*--- Edit compte ---*/
	Route::get('/modifier_compte',   'My_controller\EditController@index')->name('edit.index');
	Route::patch('/modifier-compte', 'My_controller\EditController@update')->name('edit.update');
	Route::post('/modifier-compte',  'My_controller\EditController@modifier')->name('edit.modifier');


	/*--- Historique ---*/
	Route::get('/historique', 'My_controller\HistoriqueController@index')->name('historique');


	/*--- Favori ---*/
	Route::get('/favori',       'My_controller\FavoriController@index')->name('favori.index');
	Route::post('/favori',      'My_controller\FavoriController@store')->name('favori.store');
	Route::post('/favori/{id}', 'My_controller\FavoriController@destroy')->name('favori.destroy');
	Route::get('/favori/{all}', 'My_controller\FavoriController@alldestroy')->name('favori.alldestroy');

	Route::post('/favari-navigation', 'My_controller\AjaxFavoriController@navigation')->name('favori.navigation');


	/*--- Panier ---*/
	Route::get('/panier', 'My_controller\CartController@index')->name('cart.index');
	Route::post('/panier/ajouter', 'My_controller\CartController@store')->name('cart.store');

	Route::post('/modif/{rowId}', 'My_controller\CartController@update')->name('cart.update');


	/*--- Panier destroy ---*/
	Route::get('/panier/vider', 'My_controller\CartController@alldestroy')->name('cart.alldestroy');
	Route::post('/panier/{rowId}/{qty}', 'My_controller\CartController@destroy')->name('cart.destroy');


	/*--- Payement ---*/
	Route::get('/payement',   'My_controller\PayementController@index')->name('payement.index');
	Route::post('/payement',  'My_controller\PayementController@payewenzemoney')->name('payement');
	Route::patch('/payement', 'My_controller\PayementController@payeautre')->name('payement');


	/*--- Merci ---*/
	Route::get('/merci', 'My_controller\PayementController@merci')->name('merci');


	/*--- Banque ---*/
	Route::get('/banque',  'My_controller\BankController@index')->name('banque');
	Route::post('/banque', 'My_controller\BankController@update')->name('banque');
});
/*=================================
	#FIN WHEN YOUR ARE CONNECT
=================================*/
