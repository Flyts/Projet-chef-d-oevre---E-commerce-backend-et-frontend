
/*CONNEXION USER ACTIVE*/

(function()
{
	var active_connexion = document.querySelector('#Active_Connexion');
	var close      = document.querySelector('#Avatar_black');


	active_connexion.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        document.body.classList.toggle('active_connexion_user');
	});

	close.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        document.body.classList.remove('active_connexion_user');
	});
})();


