jQuery(document).ready(function ($) {
    const STORAGE_KEY = 'whc_compared_products';

    // Hàm lấy danh sách ID đã thích từ Local Storage
    function getComparedProducts() {
        const data = localStorage.getItem(STORAGE_KEY);
        return data ? JSON.parse(data) : [];
    }



    // Xử lý sự kiện Click
    $(document).on('click', '.compare-btn', function (e) {
        e.preventDefault();

        const _this = $(this);

        const productId = _this.data('id');

        let ComparedIds = getComparedProducts();

        const index = ComparedIds.indexOf(productId);

        if (index > -1) {
            // Nếu đã có trong danh sách -> Xóa đi (Compared)
            ComparedIds.splice(index, 1);
        } else {
            // Nếu chưa có -> Thêm vào (Compared)
            ComparedIds.push(productId);
        }

        // Lưu mảng mới vào Local Storage
        localStorage.setItem(STORAGE_KEY, JSON.stringify(ComparedIds));
    });
});