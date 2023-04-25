

(function()
{

    jQuery("#BackTop").click(function () {
        jQuery("body,html").animate({
            scrollTop: 0
        }, 600);
    });

})();



(function()
{
	window.addEventListener('scroll', function()
	{
	    var Yop = window.pageYOffset;

	    if(Yop > 100)
	    {
	        document.body.classList.add('Bactop_active');
	    }
	    else
	    {
	        document.body.classList.remove('Bactop_active');
	    }
	});
})();