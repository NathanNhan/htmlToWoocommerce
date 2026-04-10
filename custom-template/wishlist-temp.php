<?php
 /* Template Name: Wishlist */
get_header();
?>
<div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Wishlist</h2>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><span> > </span></li>
                <li><a href="<?php echo get_post_type_archive_link('product'); ?>">Product</a></li>
                <li><span> > </span></li>
                <li class="active"> Wishlist </li>
            </ul>
        </div>
    </div>
</div>

<div class="cart-area bg-gray pt-160 pb-160">
    <div class="container">
        <div id="wishlist-empty-message" style="display:none; text-align:center;">
            <h3>Danh sách yêu thích của bạn đang trống.</h3>
            <a href="<?php echo get_post_type_archive_link('product'); ?>" class="btn btn-primary">Tiếp tục mua sắm</a>
        </div>

        <div id="wishlist-content" class="cart-table-content wishlist-wrap">
            <div class="table-content table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th class="th-text-center">Price</th>
                            <th class="th-text-center">Stock Status</th>
                            <th class="th-text-center">Add To Cart</th>
                            <th class="th-text-center">Remove</th>
                        </tr>
                    </thead>
                    <tbody id="wishlist-table-body">
                        <tr class="loading-placeholder">
                            <td colspan="5" style="text-align:center; padding: 50px;">
                                <div class="spinner"></div> Đang tải danh sách yêu thích...
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    const STORAGE_KEY = 'whc_liked_products';
    const likedIds = JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];

    if (likedIds.length === 0) {
        $('#wishlist-content').hide();
        $('#wishlist-empty-message').show();
        return;
    }

    // Gửi AJAX để lấy thông tin sản phẩm dựa trên ID từ Local Storage
    $.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>',
        type: 'POST',
        data: {
            action: 'get_wishlist_products',
            ids: likedIds
        },
        success: function(response) {
            if (response.success) {
                $('#wishlist-table-body').html(response.data);
            }
        }
    });

    // Xử lý xóa sản phẩm khỏi Wishlist ngay tại trang này
    $(document).on('click', '.remove-wishlist', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        let currentIds = JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
        currentIds = currentIds.filter(item => item !== id);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(currentIds));
        $(this).closest('tr').fadeOut(300, function() {
            if (currentIds.length === 0) location.reload();
        });
    });
});
</script>

<?php get_footer(); ?>