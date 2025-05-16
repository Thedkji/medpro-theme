document.addEventListener('DOMContentLoaded', function () {
    let input = document.querySelector('#home>.bannerHome .search input');
    let text = 'Tìm kiếm cơ sở y tế';
    let index = 0;
    let isDeleting = false;

    function typePlaceholder() {
        if (isDeleting) {
            index--;
        } else {
            index++;
        }

        input.setAttribute('placeholder', text.substring(0, index));

        if (!isDeleting && index === text.length) {
            // Dừng lại 1s sau khi gõ xong rồi bắt đầu xóa
            setTimeout(() => {
                isDeleting = true;
                typePlaceholder();
            }, 1000);
            return;
        }

        if (isDeleting && index === 0) {
            isDeleting = false;
        }

        setTimeout(typePlaceholder, 100);
    }

    typePlaceholder();
});
