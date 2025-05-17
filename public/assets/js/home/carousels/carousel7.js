document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper(".carousel7 .swiper", {
        direction: "horizontal", // Hướng chuyển động ngang
        loop: false, // Cho phép lặp lại vòng quay slider

        navigation: {
            prevEl: ".carousel7 .swiper-button-prev", // Nút quay lại
            nextEl: ".carousel7 .swiper-button-next", // Nút tiến lên
        },

        effect: "slide", // Hiệu ứng chuyển động giữa các slide

        // min-width
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
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
})

