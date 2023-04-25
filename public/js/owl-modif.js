(function()
{
	$('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:2000,
        responsive:{
            0:{
                items:1
            },
            771:{
                items:3
            },
            991:{
                items:4
            },
            1200:{
                items:5
            }
        }
    })
})();



(function()
{
	var chevron_left  = document.querySelector('#Chevron_left');
	var chevron_right = document.querySelector('#Chevron_right');

	var owl_prev = document.querySelector('#News .owl-nav .owl-prev');
	var owl_next = document.querySelector('#News .owl-nav .owl-next');

		chevron_left.addEventListener('click', function(e)
		{
	        owl_prev.click();
		});

		chevron_right.addEventListener('click', function(e)
		{
	        owl_next.click();
		});
})();