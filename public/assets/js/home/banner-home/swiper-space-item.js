document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper("#home>.bannerHome .swiper", {
        direction: "horizontal", // Hướng chuyển động ngang
        loop: false, // Cho phép lặp lại vòng quay slider

        navigation: {
            prevEl: "#home>.bannerHome .swiper-container .swiper-button-prev", // Nút quay lại
            nextEl: "#home>.bannerHome .swiper-container .swiper-button-next", // Nút tiến lên
        },

        effect: "slide", // Hiệu ứng chuyển động giữa các slide

        // min-width
        breakpoints: {
            500: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1100: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
            1260: {
                slidesPerView: 7,
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

