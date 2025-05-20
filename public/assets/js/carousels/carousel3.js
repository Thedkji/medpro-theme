document.addEventListener('DOMContentLoaded', function () {
    const carousels = document.querySelectorAll('.carousel3');

    carousels.forEach(carousel => {
        const swiperEl = carousel.querySelector('.swiper');
        const prevBtn = carousel.querySelector('.swiper-button-prev');
        const nextBtn = carousel.querySelector('.swiper-button-next');

        new Swiper(swiperEl, {
            direction: "horizontal", // Hướng chuyển động ngang
            loop: false, // Cho phép lặp lại vòng quay slider

            navigation: {
                prevEl: prevBtn, // Nút quay lại
                nextEl: nextBtn, // Nút tiến lên
            },

            effect: "slide", // Hiệu ứng chuyển động giữa các slide

            // min-width
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                958: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1207: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
            },

            // autoplay: {
            //     delay: 1000, // Tự động chuyển slide sau mỗi 1 giây
            //     disableOnInteraction: false, // Cho phép chuyển slide khi người dùng chạm vào
            //     pauseOnMouseEnter: true, // Dừng tự động khi hover chuột vào
            // },

            // Tắt tính năng vuốt qua
            // simulateTouch: false, // Vô hiệu hóa hành động vuốt
        });
    });
});
