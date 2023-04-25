(function()
{

	var bars  = document.querySelector('#Bars');
	var close = document.querySelector('#Black');

	    bars.addEventListener('click', function(e)
        {
            e.stopPropagation();
            e.preventDefault();
            document.body.classList.toggle('Nav_appear');
        });

	    close.addEventListener('click', function(e)
        {
            e.stopPropagation();
            e.preventDefault();
            document.body.classList.remove('Nav_appear');
        });
	
})();

