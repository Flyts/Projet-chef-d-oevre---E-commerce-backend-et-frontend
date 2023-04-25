
/*AVATAR ACTIVE*/

(function()
{
	var avatar_btn = document.querySelector('#Avatar_btn');
	var close      = document.querySelector('#Avatar_black');


	avatar_btn.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        document.body.classList.toggle('Avatar_active');
	});

	close.addEventListener('click', function(e)
	{	
        e.stopPropagation();
        e.preventDefault();

        document.body.classList.remove('Avatar_active');
	});
})();


