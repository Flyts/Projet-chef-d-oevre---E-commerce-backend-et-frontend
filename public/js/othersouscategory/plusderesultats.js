(function()
{
	var token    = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	var my_form  = document.querySelector('#News .Trier #Form');
	var url      = my_form.action;
	var plus     = document.querySelector('#Hide_results #afficher_plus');

	var trier_combien      = document.querySelector('#News .Trier #combien');
	var add_result_combien = document.querySelector('#Hide_results form input');

	var result_count = document.querySelector('#Hide_results .Result_count .nombre_a_voir');

	var loader = document.querySelector('#Ajax_Loader');

	

	plus.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();
       
        if(parseInt(result_count.innerHTML) > parseInt(trier_combien.value)) 
        {
        	trier_combien.value = parseInt(trier_combien.value) + parseInt(add_result_combien.value);

			loader.style.display = 'flex';
	 

	    	var xhr = new XMLHttpRequest();
				xhr.open('POST', url, true);
				
				xhr.setRequestHeader('Accept', 'application/json, text-plain, */*');
				xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
				xhr.setRequestHeader('X-CSRF-TOKEN', token);

			var form = new FormData(my_form);

			xhr.addEventListener('readystatechange', function()
			{
				if(xhr.readyState === XMLHttpRequest.DONE && (xhr.status === 200 || xhr.status === 0)) 
				{
					var results = JSON.parse(xhr.responseText);
					var news = document.querySelector('#News');
					var produit = news.querySelectorAll('.Product');

					var route_favori   = news.querySelector('.route_favori').getAttribute('id');
					var route_addCart  = news.querySelector('.route_addCart').getAttribute('id');
					var route_viewMore = news.querySelector('.route_viewMore').getAttribute('id');
					var form_tokken    = document.querySelector('#News .Utilities').querySelector('input').getAttribute('value');

					var nombre_a_voir = document.querySelector('#Hide_results .Result_count .nombre_a_voir');
						nombre_a_voir.innerHTML = results['count'];

					var nombre_deja_vu = document.querySelector('#Hide_results .Result_count .nombre_deja_vu');
						nombre_deja_vu.innerHTML = results['search_count'];

					var chargement = document.querySelector('#Hide_results .Chargement .int');
						chargement.style.width = ((parseInt(trier_combien.value) * 100) / results['count']) + '%';


					if(parseInt(result_count.innerHTML) <= parseInt(trier_combien.value)) 
					{
						plus.style.display = 'none';
					}

					for (var i = 0; i < produit.length; i++) 
					{
						produit[i].parentNode.removeChild(produit[i]);
					}
					
					loader.style.display = 'none';


					for(var i = 0; i < results['count']; i++) 
					{
						var product = document.createElement('div');
							product.setAttribute('class', 'Product col-xs-6 col-sm-4 col-md-3 col-lg-2');

							var article = document.createElement('article');
								product.appendChild(article);


								var options = document.createElement('div');
									options.setAttribute('class', 'options');
									options.setAttribute('id', 'Sam'+[i]);
									article.appendChild(options);

									var favori = document.createElement('div');
										favori.setAttribute('class', 'icons');
										favori.setAttribute('title', 'Ajouter au favori');
										favori.setAttribute('onclick', "event.stopPropagation(); event.preventDefault(); this.querySelector('#Form_Favori').submit();");
										options.appendChild(favori);

										var span_favori = document.createElement('span');
											span_favori.setAttribute('class', results[i][6]);
											span_favori.setAttribute('id', 'Favori_plus');
											favori.appendChild(span_favori);

										var form_favori = document.createElement('form');
											form_favori.setAttribute('action', route_favori);
											form_favori.setAttribute('method', 'post');
											form_favori.setAttribute('style',  'display: none;');
											form_favori.setAttribute('id',     'Form_Favori');
											favori.appendChild(form_favori);

											var token_form = document.createElement('input');
												token_form.setAttribute('type',  'hidden');
												token_form.setAttribute('name',  '_token');
												token_form.setAttribute('value', form_tokken);
												form_favori.appendChild(token_form);

											var input_form = document.createElement('input');
												input_form.setAttribute('type',   'hidden');
												input_form.setAttribute('name',   'favori_id');
												input_form.setAttribute('value',   results[i][0]);
												form_favori.appendChild(input_form);


									var cart = document.createElement('div');
										cart.setAttribute('class', 'icons');
										cart.setAttribute('title', 'Ajouter au panier');
										cart.setAttribute('onclick', "event.stopPropagation(); event.preventDefault(); this.querySelector('#Form_hidden').submit();");
										options.appendChild(cart);

										var span_cart = document.createElement('span');
											span_cart.setAttribute('class', 'fa fa-cart-plus');
											span_cart.setAttribute('id', 'Cart_plus');
											cart.appendChild(span_cart);

										var form_cart = document.createElement('form');
											form_cart.setAttribute('action', route_addCart);
											form_cart.setAttribute('method', 'post');
											form_cart.setAttribute('style',  'display: none;');
											form_cart.setAttribute('id',     'Form_hidden');
											cart.appendChild(form_cart);

											var token_cart = document.createElement('input');
												token_cart.setAttribute('type',  'hidden');
												token_cart.setAttribute('name',  '_token');
												token_cart.setAttribute('value', form_tokken);
												form_cart.appendChild(token_cart);

											var input_cart = document.createElement('input');
												input_cart.setAttribute('type',   'hidden');
												input_cart.setAttribute('name',   'product_id');
												input_cart.setAttribute('value',   results[i][0]);
												form_cart.appendChild(input_cart);


								var image = document.createElement('div');
									image.setAttribute('class', 'image_article');
									article.appendChild(image);

									var int = document.createElement('div');
										int.setAttribute('class', 'int');
										int.setAttribute('style', 'background-image: url(../'+ results[i][5] +');');
										image.appendChild(int);

								var describe = document.createElement('div');
									describe.setAttribute('class', 'describe');
									article.appendChild(describe);

									var titre = document.createElement('span');
										titre.innerHTML = results[i][1];
										describe.appendChild(titre);

											var prix = document.createElement('span');
												describe.appendChild(prix);

												if(results[i][3] === results[i][4]) 
												{
													var div = document.createElement('div');
														div.innerHTML = results[i][3];
														prix.appendChild(div);

													var strong = document.createElement('strong');
														strong.setAttribute('style', 'visibility: hidden;');
														strong.innerHTML = results[i][4];
														prix.appendChild(strong);
												}
												else
												{
													var italic = document.createElement('i');
														italic.innerHTML = results[i][3];
														prix.appendChild(italic);

													var strong = document.createElement('strong');
														strong.innerHTML = results[i][4];
														prix.appendChild(strong);
												}

								var show = document.createElement('div');
									show.setAttribute('class', 'show');
									article.appendChild(show);

									var a = document.createElement('a');
										a.setAttribute('href', 'http://localhost:8000/boutique/'+ results[i][2]);
										a.innerHTML = 'Voir plus';
										show.appendChild(a);


						news.appendChild(product);
					}

				}
			});
			xhr.send(form);
        }
	});
})();