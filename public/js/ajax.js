
(function()
{
	var token    = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	var my_form  = document.querySelector('#Payement_form');
	var url      = my_form.action;
	var redirect = '/merci';
	var alert    = document.querySelector('#Alert');
	var submit   = document.querySelector('#Submit');

	alert.style.display = 'none';



	my_form.addEventListener('submit', function(e)
	{
        e.stopPropagation();
        e.preventDefault();

        submit.innerHTML   = 'Chargement...';
        submit.style.color = '#e65100';


		var xhr = new XMLHttpRequest();

		xhr.open('POST', url, true);
		
		xhr.setRequestHeader('Accept', 'application/json, text-plain, */*');
		xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		xhr.setRequestHeader('X-CSRF-TOKEN', token);

		var form = new FormData(my_form);

		xhr.addEventListener('readystatechange', function()
		{
        	submit.innerHTML   = 'Procéder au paiement';
        	submit.style.color = '#9e9e9e';

			var results = JSON.parse(xhr.responseText);

			if(results['status'] == 'success') 
			{
				window.location.href = redirect;
			}
			else if(results['status'] == 'error_carte')
			{
				alert.style.display = 'block';
				alert.innerHTML = results['message'];
			}
			else if(results['status'] == 'error')
			{	alert.style.display = 'block';
				alert.innerHTML = results['message'];
			}
		});
		xhr.send(form);
	});
})();


(function()
{
	var cart  = document.querySelector('#Carte');
	var label = document.querySelector('#Label');

	cart.addEventListener('keyup', function()
	{
		if(cart.value == '4242 4242 4242 4242') 
		{
			label.setAttribute('class', 'fa fa-cc-visa');
			label.style.color = '#e65100';
		}
		else 
		{
			label.setAttribute('class', 'fa fa-credit-card');
			label.style.color = '#9e9e9e';
		}
	});
})();