

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