document.addEventListener('DOMContentLoaded', function () {
    const content = document.querySelector('.announcement-bar-content');

    // Nhân đôi nội dung để có hiệu ứng chạy lặp mượt
    content.innerHTML += content.innerHTML;

    let position = 0;
    const speed = 0.5; // px mỗi frame

    function animateAnnouncement() {
        position -= speed;
        const contentWidth = content.scrollWidth / 2;

        // Khi chạy hết nửa chiều dài, reset lại để lặp vô tận
        if (Math.abs(position) >= contentWidth) {
            position = 0;
        }

        content.style.transform = `translateX(${position}px)`;

        requestAnimationFrame(animateAnnouncement);
    }

    animateAnnouncement();
});
