document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper(".carousel1 .swiper", {
        direction: "horizontal", // Hướng chuyển động ngang
        loop: false, // Cho phép lặp lại vòng quay slider

        navigation: {
            prevEl: ".carousel1 .swiper-button-prev", // Nút quay lại
            nextEl: ".carousel1 .swiper-button-next", // Nút tiến lên
        },

        effect: "slide", // Hiệu ứng chuyển động giữa các slide

        // min-width
        breakpoints: {
            300: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            900: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
            1320: {
                slidesPerView: 6,
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

