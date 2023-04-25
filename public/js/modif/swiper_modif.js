var swiper = new Swiper('.swiper-container', 
{
    centeredSlides: true,
    spaceBetween: 20,
    autoplay: 
    {
        delay: 5500,
        disableOnInteraction: false,
    },
    
    effect: 'coverflow',
    grabCursor: true,
    slidesPerView: 7,
    loop: true,
    coverflowEffect: 
    {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 0,
        slideShadows : true,
    },
    
    pagination: 
    {
        el: '.swiper-pagination',
        clickable: true,
    },
});











