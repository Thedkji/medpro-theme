document.addEventListener('DOMContentLoaded', () => {
    function btnNavigation() {
        let activeBtn = document.querySelectorAll('.btn-navigation>button');
        let container = document.querySelectorAll('.list-navigation');

        // Xóa event listener cũ (nếu có) bằng cách clone nút
        activeBtn.forEach(btn => {
            const newBtn = btn.cloneNode(true);
            btn.parentNode.replaceChild(newBtn, btn);
        });

        // Cập nhật lại danh sách nút sau khi clone
        activeBtn = document.querySelectorAll('.btn-navigation>button');

        activeBtn.forEach(function (btn) {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                let key = e.target.dataset.list;
                console.log(key);
                activeBtn.forEach(btn => btn.classList.remove('active'));
                btn.classList.add('active');

                toggleNavigation(key)

                function toggleNavigation(targetClass) {
                    container.forEach(c => {
                        // Kiểm tra nếu phần tử có class list-navigation
                        if (c.classList.contains('list-navigation')) {
                            // Nếu phần tử có class targetClass (ví dụ: suckhoe), remove class none
                            if (c.classList.contains(targetClass)) {
                                c.classList.remove('none');
                            } else {
                                // Các phần tử khác thêm class none
                                c.classList.add('none');
                            }
                        }
                    });
                }
            });
        });
    }

    btnNavigation();
});