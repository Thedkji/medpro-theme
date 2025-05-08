document.addEventListener('DOMContentLoaded', function () {
    // Bắt tất cả svg trong menu, bất kể cấp nào
    let menuToggles = document.querySelectorAll('.medpro-header .menu-mobile svg');

    menuToggles.forEach((svg) => {
        svg.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation(); // Ngăn chặn nổi bọt nếu cần

            // Tìm phần tử cha gần nhất là <li>
            let li = e.target.closest('li');
            if (!li) return;

            // Tìm submenu trong li này (nếu có)
            let subMenu = li.querySelector('.submenu');
            if (!subMenu) return;

            if (subMenu.style.visibility === 'visible') {
                subMenu.style.visibility = 'hidden';
                subMenu.style.opacity = '0';
                subMenu.style.maxHeight = '0';
                svg.innerHTML = `
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M16 12l-6 6V6z"></path>
                    </g>
                </svg>
                `
            } else {
                subMenu.style.visibility = 'visible';
                subMenu.style.opacity = '1';
                subMenu.style.maxHeight = 'max-content';
                svg.innerHTML = `
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M6 9l6 6 6-6"></path> <!-- Mũi tên ngang -->
                    </g>
                </svg>

                `;
            }

        });
    });
});
