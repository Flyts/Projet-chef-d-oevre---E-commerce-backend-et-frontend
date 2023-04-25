/*Submit Hidden Panier form*/

(function()
{
	var cart_plus = document.querySelectorAll('#Cart_plus');

	Array.from(cart_plus).forEach((element) => {
		element.addEventListener('click', function(e)
		{	
	        e.stopPropagation();
	        e.preventDefault();

	        var form_hidden = this.lastElementChild;

	        form_hidden.submit();
		});
	});
})();



/*Submit Hidden Favori form*/

(function()
{
	var favori_plus = document.querySelectorAll('#Favori_plus');

	Array.from(favori_plus).forEach((element) => {
		element.addEventListener('click', function(e)
		{	
	        e.stopPropagation();
	        e.preventDefault();

	        var form_hidden = this.lastElementChild;

	        form_hidden.submit();
		});
	});
})();



(function()
{
	var token        = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
	var image_change = document.querySelector('#Image');



	setInterval(function()
    {
        var xhr = new XMLHttpRequest();

		xhr.open('POST', 'http://localhost:8000/', true);
		
		xhr.setRequestHeader('Accept', 'application/json, text-plain, */*');
		xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		xhr.setRequestHeader('X-CSRF-TOKEN', token);

		var form = new FormData();
			form.append('change', 'true');

		xhr.addEventListener('readystatechange', function()
		{

			var results = JSON.parse(xhr.responseText);
			var image   = results['response'][0]['image'];

			image_change.setAttribute('style', 'background-image: url('+image+')');
		});
		xhr.send(form);
    }, 10000);
})();



(function()
{

	//* BAS
    var bas        = document.querySelector('#News');
    var bas_offset = bas.offsetTop-75;

    jQuery("#Down").click(function () {
        jQuery("body,html").animate({
            scrollTop: bas_offset
        }, 600);
    });

})();