(function() 
{
    
    var afficherOnglet = function(a)
    {
        var li  = a.parentNode
        var div = a.parentNode.parentNode.parentNode

        if(li.classList.contains('active')) 
        {
            return false
        }


        div.querySelector('.tabs .active').classList.remove('active')
        li.classList.add('active')

        div.querySelector('.tabs-content .active').classList.remove('active')
        div.querySelector('#'+a.getAttribute('class')).classList.add('active')

        /*console.log(div.querySelector('#'+a.getAttribute('class')).getAttribute('id'))*/
    }


    var tabs = document.querySelectorAll('.tabs #titre')
    for (var i = 0; i < tabs.length; i++) 
    {
        tabs[i].addEventListener('click', function(e)
        {
            afficherOnglet(this)
        })
    }

})();



(function()
{	
	var other   = document.querySelectorAll('#Other');
	var photo_change = document.querySelector('#Photo_change');


	Array.from(other).forEach((element) => {
		element.addEventListener('click', function(e)
		{	
	        e.stopPropagation();
	        e.preventDefault();

	        Array.from(other).forEach((element) => {
				element.parentNode.setAttribute('id', '');
			});

	        var image = this.getAttribute('style');

	        this.parentNode.setAttribute('id', 'photo');
	        photo_change.setAttribute('style', image);
		});
	});
})();
