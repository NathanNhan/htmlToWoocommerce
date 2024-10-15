//Checkbox event in checkout page


jQuery('#check_box').change(function () {
    if (this.checked) {
        //Remove required for email and password login form
        jQuery('#username').removeAttr('required');
        jQuery('#password').removeAttr('required');
        //Define data 
        var object_data = {
            action : "createGuest",
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




