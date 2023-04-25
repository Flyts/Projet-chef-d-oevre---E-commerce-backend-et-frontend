(function()
{
	var active_secondaire = document.querySelector('#Active_Secondaire');
	var close_search  = document.querySelector('#Close_search');
	var search_black  = document.querySelector('#Search_black'); 

	active_secondaire.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        document.body.classList.toggle('Active_Secondaire');


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