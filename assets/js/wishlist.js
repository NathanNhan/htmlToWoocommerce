jQuery(document).ready(function ($) {
    const STORAGE_KEY = 'whc_liked_products';

    // Hàm lấy danh sách ID đã thích từ Local Storage
    function getLikedProducts() {
        const data = localStorage.getItem(STORAGE_KEY);
        return data ? JSON.parse(data) : [];
    }

    // Hàm cập nhật trạng thái icon khi load trang
    function updateIconsOnLoad() {
        const likedIds = getLikedProducts();
        $('.like-btn').each(function () {
            const id = $(this).data('id');
            const icon = $(this).find('i');
            if (likedIds.includes(id)) {
                icon.removeClass('icon-heart-empty').addClass('icon-heart');
            } else {
                icon.removeClass('icon-heart').addClass('icon-heart-empty');
            }
        });
    }

    // Chạy kiểm tra ngay khi trang web tải xong
    updateIconsOnLoad();

    // Xử lý sự kiện Click
    $(document).on('click', '.like-btn', function (e) {
        e.preventDefault();

        const _this = $(this);
        const icon = _this.find('i');
        const productId = _this.data('id');

        let likedIds = getLikedProducts();
        const index = likedIds.indexOf(productId);

        if (index > -1) {
            // Nếu đã có trong danh sách -> Xóa đi (Unlike)
            likedIds.splice(index, 1);
            icon.removeClass('icon-heart').addClass('icon-heart-empty');
        } else {
            // Nếu chưa có -> Thêm vào (Like)
            likedIds.push(productId);
            icon.removeClass('icon-heart-empty').addClass('icon-heart');
        }

        // Lưu mảng mới vào Local Storage
        localStorage.setItem(STORAGE_KEY, JSON.stringify(likedIds));
    });
});