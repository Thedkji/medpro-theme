document.addEventListener('DOMContentLoaded', function () {
    const banners = document.querySelectorAll('.carousel2');

    banners.forEach(banner => {
        const swiperEl = banner.querySelector('.swiper');
        const paginationEl = banner.querySelector('.swiper-pagination');

        new Swiper(swiperEl, {
            direction: "horizontal",
            loop: false,
            effect: "slide",
            breakpoints: {
                640: { slidesPerView: 1, spaceBetween: 20 },
                768: { slidesPerView: 1, spaceBetween: 20 },
                1024: { slidesPerView: 1, spaceBetween: 20 },
            },
            pagination: {
                el: paginationEl,
                clickable: true,
            },
        });
    });
});
