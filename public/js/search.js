(function()
{
	var active_search = document.querySelector('#Active_search');
	var close_search  = document.querySelector('#Close_search');
	var search_black  = document.querySelector('#Search_black'); 

	active_search.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        document.body.classList.toggle('Searche_active');


	});

	close_search.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        document.body.classList.remove('Searche_active');
	});

	search_black.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        document.body.classList.remove('Searche_active');
	});
})();