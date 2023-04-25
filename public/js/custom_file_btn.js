var btn        = document.querySelector('#custom_file');
var span       = document.querySelector('#custom_text');
var input_file = document.querySelector('#real_file');

	btn.addEventListener('click', function(e)
	{
        input_file.click();
	});

	input_file.addEventListener('change', function(e)
	{
        if(input_file.value) 
        {
        	span.innerHTML = input_file.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
        }
	});