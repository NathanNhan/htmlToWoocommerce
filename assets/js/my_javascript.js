//Checkbox event in checkout page


jQuery('#check_box').change(function () {
    if (this.checked) {
        //Remove required for email and password login form
        jQuery('#username').removeAttr('required');
        jQuery('#password').removeAttr('required');
        //Define data 
        var object_data = {
            action: "createGuest",
            title: "New Email From Customer",
            content: jQuery("#guest_name").val(),
            status: "publish"
        }
        console.log(object_data);

        jQuery.post(ajaxurl.baseURL, object_data, function (res) {
            var result = jQuery.parseJSON(res);
            if (result.status == "200") {
                // Ẩn thông báo sau 3s
                alert(result.message);
            }
        });




    }

});

// login_form.click();

//Code javascript for login/register page
function show_register(e) {
    // console.log(e.currentTarget.getAttribute('href'));
    let lg1 = document.getElementById('lg1');
    let lg2 = document.getElementById('lg2');
    if (e.currentTarget.getAttribute('href') == '#lg2' && lg1.style.display == 'block') {
        lg1.style.display = 'none';
        lg2.style.display = 'block';

    }
}

function show_login(e) {
    let lg1 = document.getElementById('lg1');
    let lg2 = document.getElementById('lg2');
    if (e.currentTarget.getAttribute('href') == '#lg1') {
        lg1.style.display = 'block';
        lg2.style.display = 'none';
    }
}

//xử lý modal cho phần quickview
jQuery(document).ready(function ($) {
    var myModal; // Biến để lưu instance modal

    $(document).on('click', '.quickview', function (e) {
        e.preventDefault();

        var product_id = $(this).data('product-id');
        var modalElement = document.getElementById('exampleModal');

        // Khởi tạo instance nếu chưa có
        if (!myModal) {
            myModal = new bootstrap.Modal(modalElement);
        }

        $('#quickview-content-target').html('<div class="text-center p-5">Loading...</div>');
        myModal.show();

        $.ajax({
            url: ajaxurl.quickview,
            type: 'POST',
            data: {
                action: 'load_quickview_product',
                product_id: product_id
            },
            success: function (response) {
                $('#quickview-content-target').html(response);

                // Sau khi load AJAX xong, nếu có các thư viện như Slick slider 
                // hay các hàm khởi tạo lại số lượng, hãy gọi ở đây.
            },
            error: function () {
                $('#quickview-content-target').html('Đã có lỗi xảy ra.');
            }
        });
    });

    $(document).on('click', '[data-bs-dismiss="modal"]', function () {
        if (myModal) {
            myModal.hide();
        }
    });

    // Sự kiện khi modal đã đóng hoàn toàn (reset lại nội dung để tránh "rác" dữ liệu)
    $('#exampleModal').on('hidden.bs.modal', function () {
        $('#quickview-content-target').html('');
    });



    // 1. Khi chọn thuộc tính
    $(document).on('click', '.attribute-option', function (e) {
        e.preventDefault();
        var $group = $(this).closest('.attribute-group');
        $group.find('.attribute-option').removeClass('active border-dark');
        $(this).addClass('active border-dark');

        checkVariations();
    });

    function checkVariations() {
        var variations = JSON.parse($('#product-variations-data').val() || '[]');
        var selectedAttributes = {};
        var allSelected = true;

        // Lấy tất cả các thuộc tính đã chọn
        $('.attribute-group').each(function () {
            var name = $(this).data('attribute-name'); // pa_color, pa_size, pa_brand
            var value = $(this).find('.attribute-option.active').data('value'); // red
            if (!value) {
                allSelected = false;
            } else {
                selectedAttributes[name] = value;
                // {
                //     "pa_color" = "gray",
                //     "pa_size"  = "large"
                // }
                // ["pa_color","pa_size"]
            }
        });

        if (allSelected && variations.length > 0) {
            // console.log(variations);

            // Tìm biến thể khớp với các thuộc tính đã chọn
            var match = variations.find(function (variation) {
                return Object.keys(selectedAttributes).every(function (key) {
                    return variation.attributes[key] === "" || variation.attributes[key] === selectedAttributes[key];
                });
            });



            if (match) {
                $('#selected-variation-id').val(match.variation_id);
                $('#qv-price-display').html(match.price_html);
                if (match.image.src) $('#qv-main-img').attr('src', match.image.src);
                $('.add-to-cart-qv').prop('disabled', false).text('THÊM VÀO GIỎ');
            } else {
                $('.add-to-cart-qv').prop('disabled', true).text('HẾT HÀNG');
            }
        }
    }

    // 2. Gửi AJAX thêm vào giỏ
    $(document).on('click', '.add-to-cart-qv', function (e) {
        var product_id = $('#quickview-product-container').data('product-id');
        var variation_id = $('#selected-variation-id').val();
        var qty = $('.cart-plus-minus-box').val();

        var $btn = $(this);
        $btn.text('Đang xử lý...');

        $.ajax({
            url: ajaxurl.quickview,
            type: 'POST',
            data: {
                action: 'ajax_add_to_cart_quickview',
                product_id: product_id,
                variation_id: variation_id,
                quantity: qty
            },
            success: function (response) {
                $btn.text('ĐÃ THÊM!').addClass('btn-success');
                if (response.fragments) {
                    // CẬP NHẬT TỰ ĐỘNG: Duyệt qua các fragments và thay thế HTML cũ
                    $.each(response.fragments, function (key, value) {
                        $(key).replaceWith(value);
                    });

                    // Kích hoạt sự kiện để các script khác (như mở Side Cart) biết
                    $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $('.sidebar-cart-active')]);


                }
            }
        });
    });




    //tự động load side cart khi bấm nút add to cart default
    jQuery(document).ready(function ($) {
        // Sự kiện này chạy ngay sau khi AJAX của WooCommerce thêm hàng thành công
        $(document.body).on('added_to_cart', function () {
            // 1. Thêm class để trượt Side Cart ra
            // Bạn hãy kiểm tra CSS của mình dùng class nào (ở đây tôi dùng 'inside' theo mẫu phổ biến)
            $('.sidebar-cart-active').addClass('inside');
        });

        // Nút đóng Side Cart
        $(document).on('click', '.cart-close', function (e) {
            e.preventDefault();
            $('.sidebar-cart-active').removeClass('inside');

        });
    });


    //khi bấm vào biểu tượng cart để show mini cart
    jQuery(document).ready(function ($) {
        // Sự kiện này chạy ngay sau khi AJAX của WooCommerce thêm hàng thành công
        $(document.body).on('click', '.icofont-shopping-cart', function () {
            // 1. Thêm class để trượt Side Cart ra
            // Bạn hãy kiểm tra CSS của mình dùng class nào (ở đây tôi dùng 'inside' theo mẫu phổ biến)
            $('.sidebar-cart-active').addClass('inside');
            $('.main-wrapper').removeClass('overlay-active');
        });

        // Nút đóng Side Cart
        $(document).on('click', '.cart-close', function (e) {
            e.preventDefault();
            $('.sidebar-cart-active').removeClass('inside');
            // $('.main-wrapper').removeClass('overlay-active');

        });
    });
});