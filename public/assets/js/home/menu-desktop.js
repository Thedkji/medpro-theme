document.addEventListener('DOMContentLoaded', function () {
    document.addEventListener('scroll', (e) => {
        let header = document.querySelector('.medpro-header');
        let menuRightTop = document.querySelector('.medpro-header .header-right .header');
        if (window.scrollY > 50) {
            menuRightTop.style.height = "0";
            menuRightTop.style.opacity = "0";
            menuRightTop.style.overflow = "hidden";
            menuRightTop.style.transition = "height 0.7s ease,opacity 0.5s ease";
            menuRightTop.style.padding = "0"

        }

        if (window.scrollY < 50) {
            menuRightTop.style.height = "75px";
            menuRightTop.style.opacity = "1";
            menuRightTop.style.overflow = "visible";
        }

    })
});
