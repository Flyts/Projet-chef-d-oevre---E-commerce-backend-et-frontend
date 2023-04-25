
(function()
{	
	var my_form  = document.querySelector('#Titre #Form');
	var input = document.querySelector('#Titre #Form #Input');

	var token    = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	var url      = my_form.action;

	input.addEventListener('keyup', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        
		var xhr = new XMLHttpRequest();

		xhr.open('POST', url, true);
		
		xhr.setRequestHeader('Accept', 'application/json, text-plain, */*');
		xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		xhr.setRequestHeader('X-CSRF-TOKEN', token);

		var form = new FormData(my_form);
			form.append('ajax', true);

		xhr.addEventListener('readystatechange', function()
		{
			if(xhr.readyState === XMLHttpRequest.DONE && (xhr.status === 200 || xhr.status === 0)) 
			{
				var contents    = document.querySelector('section #Content');
				var articles    = document.querySelectorAll('section #Content #Article');
				var form_tokken = document.querySelector('section #Content .Utilities').querySelector('input').getAttribute('value');

				var results = JSON.parse(xhr.responseText);



				for (var i = 0; i < articles.length; i++) 
				{
					articles[i].parentNode.removeChild(articles[i]);
				}


				for(var i = 0; i < results['count']; i++) 
				{
					var article = document.createElement('div');
						article.setAttribute('class', 'col-xs-12');
						article.setAttribute('id',    'Article');

						var content = document.createElement('div');
							content.setAttribute('class', 'Content');
							article.appendChild(content);

							var aside = document.createElement('div');
								aside.setAttribute('class', 'aside');
								content.appendChild(aside);

								var photo = document.createElement('div');
									photo.setAttribute('class', 'photo');
									photo.setAttribute('style', 'background-image: url('+ results[i][5] +');');
									aside.appendChild(photo);

								var text = document.createElement('div');
									text.setAttribute('class', 'text');
									aside.appendChild(text);

									var titre = document.createElement('span');
										titre.innerHTML = results[i][1];
										text.appendChild(titre);

									var subtitle = document.createElement('span');
										subtitle.innerHTML = results[i][3];
										text.appendChild(subtitle);

									var voir = document.createElement('div');
										voir.setAttribute('class', 'voir');
										text.appendChild(voir);

										var a_voir = document.createElement('a');
											a_voir.setAttribute('class', 'a');
											a_voir.setAttribute('href', 'http://localhost:8000/boutique/'+ results[i][2]);
											a_voir.innerHTML = 'Voir plus';
											voir.appendChild(a_voir);


						var other = document.createElement('div');
							other.setAttribute('class', 'Other');
							article.appendChild(other);

							var price = document.createElement('span');
								price.innerHTML = results[i][4];
								other.appendChild(price);

							var cart = document.createElement('a');
								cart.setAttribute('href',  '#');
								cart.setAttribute('id',    'Cart_plus');
								cart.setAttribute('class', 'Cart_plus_favori');
								cart.setAttribute('title', 'Ajouter au panier');
								cart.setAttribute('onclick', "event.stopPropagation(); event.preventDefault(); this.querySelector('#Form_hidden').submit();");
								other.appendChild(cart);

								var span_cart = document.createElement('span');
									span_cart.setAttribute('class', 'fa fa-cart-plus');
									cart.appendChild(span_cart);

								var form_cart = document.createElement('form');
									form_cart.setAttribute('action', 'http://localhost:8000/panier/ajouter');
									form_cart.setAttribute('method', 'POST');
									form_cart.setAttribute('style',  'display: none;');
									form_cart.setAttribute('id',     'Form_hidden');
									cart.appendChild(form_cart);

									var token_form = document.createElement('input');
										token_form.setAttribute('type',  'hidden');
										token_form.setAttribute('name',  '_token');
										token_form.setAttribute('value', form_tokken);
										form_cart.appendChild(token_form);

									var input_form = document.createElement('input');
										input_form.setAttribute('type',  'hidden');
										input_form.setAttribute('name',  'product_id');
										input_form.setAttribute('value', results[i][0]);
										form_cart.appendChild(input_form);


							var destroy = document.createElement('form');
								destroy.setAttribute('action', 'http://localhost:8000/favori/' + results[i][0]);
								destroy.setAttribute('method', 'POST');
								other.appendChild(destroy);

								var token_destroy = document.createElement('input');
									token_destroy.setAttribute('type',  'hidden');
									token_destroy.setAttribute('name',  '_token');
									token_destroy.setAttribute('value', form_tokken);
									destroy.appendChild(token_destroy);

								var button_destroy = document.createElement('button');
									button_destroy.setAttribute('type',  'submit');
									button_destroy.setAttribute('title',  'Supprimer de vos favoris');
									destroy.appendChild(button_destroy);

									var span_button = document.createElement('span');
										span_button.setAttribute('class',  'fa fa-times-circle');
										button_destroy.appendChild(span_button);

						


					contents.appendChild(article);
				}

			}
		});
		xhr.send(form);
	});
})();