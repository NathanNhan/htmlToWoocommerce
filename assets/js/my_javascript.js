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

login_form.click();

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




