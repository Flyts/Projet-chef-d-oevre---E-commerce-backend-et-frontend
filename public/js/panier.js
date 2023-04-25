
/*AJAX Panier page*/

(function()
{
	var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	var qtys  = document.querySelectorAll('#Qty');


	Array.from(qtys).forEach((element) => {
		element.addEventListener('change', function(e)
		{	
	        e.stopPropagation();
	        e.preventDefault();



	        var rowId = this.getAttribute('data-id'); 

			var xhr = new XMLHttpRequest();
			xhr.open('post', `/modif/${rowId}`, true);
			
			xhr.setRequestHeader('Accept', 'application/json, text-plain, */*');
			xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
			xhr.setRequestHeader('X-CSRF-TOKEN', token);

			var form = new FormData();
			form.append('qty', this.value);

			xhr.addEventListener('readystatechange', function()
			{
				if(xhr.readyState === XMLHttpRequest.DONE && (xhr.status === 200 || xhr.status === 0)) 
				{
					var results = JSON.parse(xhr.responseText);

					if(results['status'] == 'success') 
					{
						location.reload();
					}
					else
					{
						element.value = results['stock'];
						location.reload();
					}
					
				}
			});
			xhr.send(form);
		});
	});
})();



/*Effacer Message Id*/

(function()
{
	var message = document.querySelector('#Message');

	setInterval(function()
	{
		message.style.display = 'none';
	}, 10000);
})();
