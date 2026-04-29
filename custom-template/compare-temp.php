<?php
 /* Template Name: Compare */
get_header();
?>
 <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Compare</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home </a>
                        </li>
                        <li><span> > </span></li>
                        <li>
                            <a href="index.html">Product </a>
                        </li>
                        <li><span> > </span></li>
                        <li class="active">Compare</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="compare-page-wrapper bg-gray pt-160 pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Compare Page Content Start -->
                        <div class="compare-page-content-wrap">
                            <div class="compare-table table-responsive">
                                <table class="table table-bordered mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="first-column">Product</td>
                                            <td class="product-image-title">
                                                <a href="single-product.html" class="image">
                                                    <img class="img-fluid" src="assets/images/product/product-134.jpg" alt="Compare Product">
                                                </a>
                                                <a href="#" class="category">Light</a>
                                                <a href="single-product-sale.html" class="title">Modern Light</a>
                                            </td>
                                            <td class="product-image-title">
                                                <a href="single-product.html" class="image">
                                                    <img class="img-fluid" src="assets/images/product/product-137.jpg" alt="Compare Product">
                                                </a>
                                                <a href="#" class="category">Pen </a>
                                                <a href="single-product-group.html" class="title">Wood Pen & Holder</a>
                                            </td>
                                            <td class="product-image-title">
                                                <a href="single-product.html" class="image">
                                                    <img class="img-fluid" src="assets/images/product/product-136.jpg" alt="Compare Product">
                                                </a>
                                                <a href="#" class="category">Watch</a>
                                                <a href="single-product.html" class="title">Smart Watch</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Description</td>
                                            <td class="pro-desc">
                                                <p>Samsome Note Book Pro 5 is an the best Laptop on this budgeted. You can satisfied
                                                    after usign this laptop. </p>
                                            </td>
                                            <td class="pro-desc">
                                                <p>Samsome Note Book Pro 5 is an the best Laptop on this budgeted. You can satisfied
                                                    after usign this laptop. </p>
                                            </td>
                                            <td class="pro-desc">
                                                <p>Samsome Note Book Pro 5 is an the best Laptop on this budgeted. You can satisfied
                                                    after usign this laptop. </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Price</td>
                                            <td class="pro-price">$295</td>
                                            <td class="pro-price">$275</td>
                                            <td class="pro-price">$395</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Color</td>
                                            <td class="pro-color">Black</td>
                                            <td class="pro-color">Red</td>
                                            <td class="pro-color">Blue</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Stock</td>
                                            <td class="pro-stock">In Stock</td>
                                            <td class="pro-stock">Stock Out</td>
                                            <td class="pro-stock">In Stock</td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Add to cart</td>
                                            <td><a href="cart.html" class="check-btn">Add to Cart</a></td>
                                            <td><a href="cart.html" class="check-btn disabled">Add to Cart</a></td>
                                            <td><a href="cart.html" class="check-btn">Add to Cart</a></td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Rating</td>
                                            <td class="pro-ratting">
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                            </td>
                                            <td class="pro-ratting">
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                            </td>
                                            <td class="pro-ratting">
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                                <i class="icon-rating"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="first-column">Remove</td>
                                            <td class="pro-remove">
                                                <a href="#"><img class="inject-me" src="assets/images/icon-img/close.svg" alt=""></a>
                                            </td>
                                            <td class="pro-remove">
                                                <a href="#"><img class="inject-me" src="assets/images/icon-img/close.svg" alt=""></a>
                                            </td>
                                            <td class="pro-remove">
                                                <a href="#"><img class="inject-me" src="assets/images/icon-img/close.svg" alt=""></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Compare Page Content End -->
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