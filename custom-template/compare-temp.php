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
                            <div class="compare-table table-responsive" id="compare-table-wrapper">
                                 <div class="spinner"></div> Đang tải danh sách sản phẩm so sánh...
                            </div>
                        </div>
                        <!-- Compare Page Content End -->
                    </div>
                </div>
            </div>
        </div>

<script>
jQuery(document).ready(function($) {
    const STORAGE_KEY = 'whc_compared_products';
    const comparedIds = JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
    console.log(ajax_object.ajax_url);

    if (comparedIds.length === 0) {
        $('#compare-table-wrapper').html('<p>Không có sản phẩm nào so sánh...</p>')
        return;
    }

    // Gửi AJAX để lấy thông tin sản phẩm dựa trên ID từ Local Storage
    $.ajax({
            url: ajax_object.ajax_url,
            type: 'POST',
            data: {
                action: 'get_compare_products',
                product_ids: comparedIds,
                
            },
            beforeSend: function () {
                $('#compare-table-wrapper').html('<p>Đang tải...</p>');
            },
            success: function (response) {
                if (response.success) {
                    // Inject thẳng HTML từ server vào DOM
                    $('#compare-table-wrapper').html(response.data.html);
                } else {
                    $('#compare-table-wrapper').html(response.data.html);
                }
            },
            error: function () {
                $('#compare-table-wrapper').html('<p>Lỗi kết nối. Vui lòng thử lại.</p>');
            }
    });

    // Xử lý xóa sản phẩm khỏi Compare ngay tại trang này
    $(document).on('click', '.remove-compare', function(e) {
        e.preventDefault();
        const id = $(this).data('id');
        let currentIds = JSON.parse(localStorage.getItem(STORAGE_KEY)) || [];
        currentIds = currentIds.filter(item => item !== id);
        localStorage.setItem(STORAGE_KEY, JSON.stringify(currentIds));
        location.reload();
    });
});
</script>

<?php get_footer(); ?>