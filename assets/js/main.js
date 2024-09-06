

(function (jQuery) {
    "use strict";

    /*--
    Menu Stick
    -----------------------------------*/
    var header = jQuery('.sticky-bar');
    var win = jQuery(window);
    win.on('scroll', function () {
        var scroll = win.scrollTop();
        if (scroll < 200) {
            header.removeClass('stick');
        } else {
            header.addClass('stick');
        }
    });

    /*--------------------------------
        Slider active 1
    -----------------------------------*/
    jQuery('.slider-active-1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-icon slider-icon-prev"><i class="icofont-simple-left"></i></span>',
        nextArrow: '<span class="slider-icon slider-icon-next"><i class="icofont-simple-right"></i></span>',
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });

    /*--------------------------------
        Slider active 2
    -----------------------------------*/
    jQuery('.slider-active-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        dots: true,
        arrows: false,
        prevArrow: '<span class="slider-icon slider-icon-prev"><i class="icofont-simple-left"></i></span>',
        nextArrow: '<span class="slider-icon slider-icon-next"><i class="icofont-simple-right"></i></span>',
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });

    /*--
        Slider active 3
    -----------------------------------*/
    jQuery('.slider-active-3').slick({
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        dots: true,
        fade: true,
        autoplay: false,
        autoplaySpeed: 5000,
        customPaging: function (slider, i) {
            var thumb = jQuery(slider.jQueryslides[i]).data('thumb');
            return '<button class="overlay"><img src="' + thumb + '"></button>';
        },
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    dots: true,
                    autoplay: false,
                    autoplaySpeed: 5000,
                }
            }
        ]
    });


    /*--------------------------------
        slider active 4
    -----------------------------------*/
    jQuery('.slider-active-4').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        dots: true,
        arrows: false,
        prevArrow: '<span class="slider-icon slider-icon-prev"><i class="icofont-simple-left"></i></span>',
        nextArrow: '<span class="slider-icon slider-icon-next"><i class="icofont-simple-right"></i></span>',
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });

    /*--------------------------------
        Slider active 5
    -----------------------------------*/
    jQuery('.slider-active-5').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        dots: true,
        arrows: false,
        prevArrow: '<span class="slider-icon slider-icon-prev"><i class="icofont-simple-left"></i></span>',
        nextArrow: '<span class="slider-icon slider-icon-next"><i class="icofont-simple-right"></i></span>',
    });


    /*--------------------------------
        Product slider active 1
    -----------------------------------*/
    jQuery('.product-slider-active-1').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });


    /*--------------------------------
        Product slider active 2
    -----------------------------------*/
    jQuery('.product-slider-active-2').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });


    /*--------------------------------
        Product slider active 3
    -----------------------------------*/
    jQuery('.product-slider-active-3').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });

    /*--------------------------------
        Product slider active 4
    -----------------------------------*/
    jQuery('.product-slider-active-4').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });


    /*--------------------------------
        Brand logo active
    -----------------------------------*/
    jQuery('.brand-logo-active , .brand-logo-active-2').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                autoplay: false,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }
        ]
    });

    /*--------------------------------
        Brand logo active 3
    -----------------------------------*/
    jQuery('.brand-logo-active-3').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        loop: true,
        dots: true,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                autoplay: false,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }
        ]
    });

    /*---------------------
        Countdown 1
      --------------------- */
    jQuery('.timer-1 [data-countdown]').each(function () {
        var jQuerythis = jQuery(this),
            finalDate = jQuery(this).data('countdown');
        jQuerythis.countdown(finalDate, function (event) {
            jQuerythis.html(event.strftime('<span class="cdown day"> <span>%-D </span><p>Days</p></span> <span class="cdown hour"> <span> %-H</span> <p>Hours</p></span> <span class="cdown minutes"><span>%M</span> <p>Minutes</p> </span>'));
        });
    });

    jQuery('.timer-2 [data-countdown]').each(function () {
        var jQuerythis = jQuery(this),
            finalDate = jQuery(this).data('countdown');
        jQuerythis.countdown(finalDate, function (event) {
            jQuerythis.html(event.strftime('<span class="cdown day"> <span>%-D </span><p>Day</p></span> <span class="cdown hour"> <span> %-H</span> <p>Hour</p></span> <span class="cdown minutes"><span>%M</span> <p>Minute</p> </span> <span class="cdown second"><span>%S</span> <p>Second</p> </span>'));
        });
    });

    jQuery('.timer-3 [data-countdown]').each(function () {
        var jQuerythis = jQuery(this),
            finalDate = jQuery(this).data('countdown');
        jQuerythis.countdown(finalDate, function (event) {
            jQuerythis.html(event.strftime('<span class="cdown hour"> <span> %-H</span> <p>Hour</p></span> <span class="cdown minutes"><span>%M</span> <p>Minute</p> </span> <span class="cdown second"><span>%S</span> <p>Second</p> </span>'));
        });
    });

    /*---------------------
        svg img color
    --------------------- */
    // Elements to inject
    var mySVGsToInject = document.querySelectorAll('img.inject-me');
    // Do the injection
    SVGInjector(mySVGsToInject);


    /*------ Wow Active ----*/
    new WOW().init();


    /*------------
        ScrollUp
    ------------------ */
    jQuery.scrollUp({
        scrollText: '<i class="icofont-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*----------------------------
        Cart Plus Minus Button
    ------------------------------ */
    var CartPlusMinus = jQuery('.cart-plus-minus');
    CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
    CartPlusMinus.append('<div class="inc qtybutton">+</div>');
    jQuery(".qtybutton").on("click", function () {
        var jQuerybutton = jQuery(this);
        var oldValue = jQuerybutton.parent().find("input").val();
        if (jQuerybutton.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        jQuerybutton.parent().find("input").val(newVal);
    });


    /*------- Color active -----*/
    // jQuery('.pro-details-color-content').on('click', 'a', function(e){
    //     //e.preventDefault();
    //     //jQuery(this).addClass('active').parent().siblings().children('a').removeClass('active');
    // });


    /*--------------------------------
        Cart active
    -----------------------------------*/
    if (jQuery('.pro-details-action').length) {
        var jQuerybody = jQuery('body'),
            jQuerycartWrap = jQuery('.pro-details-action'),
            jQuerycartContent = jQuerycartWrap.find('.product-dec-social');
        jQuerycartWrap.on('click', '.social', function (e) {
            e.preventDefault();
            var jQuerythis = jQuery(this);
            if (!jQuerythis.parent().hasClass('show')) {
                jQuerythis.siblings('.product-dec-social').addClass('show').parent().addClass('show');
            } else {
                jQuerythis.siblings('.product-dec-social').removeClass('show').parent().removeClass('show');
            }
        });
        /*Close When Click Outside*/
        jQuerybody.on('click', function (e) {
            var jQuerytarget = e.target;
            if (!jQuery(jQuerytarget).is('.pro-details-action') && !jQuery(jQuerytarget).parents().is('.pro-details-action') && jQuerycartWrap.hasClass('show')) {
                jQuerycartWrap.removeClass('show');
                jQuerycartContent.removeClass('show');
            }
        });
    }

    /* Language-dropdown */
    jQuery(".language-dropdown-active").on("click", function (e) {
        e.preventDefault();
        jQuery(this).parent().find('.language-dropdown').slideToggle('medium');
    })

    /* NiceSelect */
    jQuery('.nice-select').niceSelect();


    /*--------------------------------
        Testimonial active
    -----------------------------------*/
    jQuery('.testimonial-active , .testimonial-active-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        loop: true,
        dots: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                autoplay: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });




    /*====== SidebarCart ======*/
    function miniCart() {
        var navbarTrigger = jQuery('.cart-active'),
            endTrigger = jQuery('.cart-close'),
            container = jQuery('.sidebar-cart-active'),
            wrapper2 = jQuery('.main-wrapper');

        wrapper2.prepend('<div class="body-overlay"></div>');

        navbarTrigger.on('click', function (e) {
            e.preventDefault();
            container.addClass('inside');
            wrapper2.addClass('overlay-active');
        });

        endTrigger.on('click', function () {
            container.removeClass('inside');
            wrapper2.removeClass('overlay-active');
        });

        jQuery('.body-overlay').on('click', function () {
            container.removeClass('inside');
            wrapper2.removeClass('overlay-active');
        });
    };
    miniCart();

    /*-------------------------------
       Header Search Toggle
    -----------------------------------*/
    var searchToggle = jQuery('.search-toggle');
    searchToggle.on('click', function (e) {
        e.preventDefault();
        if (jQuery(this).hasClass('open')) {
            jQuery(this).removeClass('open');
            jQuery(this).siblings('.search-wrap-3').removeClass('open');
        } else {
            jQuery(this).addClass('open');
            jQuery(this).siblings('.search-wrap-3').addClass('open');
        }
    })


    /*====== Sidebar Active ======*/
    function sidebarActive() {
        var navbarTrigger = jQuery('.sidebar-active'),
            endTrigger = jQuery('.sidebar-close'),
            container = jQuery('.clickalbe-sidebar-wrapper-active'),
            wrapper3 = jQuery('.main-wrapper-2');

        wrapper3.prepend('<div class="body-overlay-2"></div>');

        navbarTrigger.on('click', function (e) {
            e.preventDefault();
            container.addClass('sidebar-visible');
            wrapper3.addClass('overlay-active-2');
        });

        endTrigger.on('click', function () {
            container.removeClass('sidebar-visible');
            wrapper3.removeClass('overlay-active-2');
        });

        jQuery('.body-overlay-2').on('click', function () {
            container.removeClass('sidebar-visible');
            wrapper3.removeClass('overlay-active-2');
        });
    };
    sidebarActive();

    /*====== clickable Main Menu active ======*/
    var jQueryclickableMainMenu = jQuery('.clickable-mainmenu-wrap'),
        jQueryclickableSubMenu = jQueryclickableMainMenu.find('.sub-menu-2');
    /*Add Toggle Button in Off Canvas Sub Menu*/
    jQueryclickableSubMenu.siblings('a').append('<span class="menu-expand"><i class="icofont-plus"></i></span>');
    /*Close Off Canvas Sub Menu*/
    jQueryclickableSubMenu.slideUp();
    /*Category Sub Menu Toggle*/
    jQueryclickableMainMenu.on('click', 'li a, li .menu-expand', function (e) {
        var jQuerythis = jQuery(this);
        if (jQuerythis.parent('li').hasClass('has-sub-menu') || (jQuerythis.attr('href') === '#' || jQuerythis.hasClass('menu-expand'))) {
            e.preventDefault();
            if (jQuerythis.siblings('ul:visible').length) {
                jQuerythis.parent('li').removeClass('active').children('ul').slideUp().siblings('a').find('.menu-expand i').removeClass('icofont-minus').addClass('icofont-plus');
                jQuerythis.parent('li').siblings('li').removeClass('active').find('ul:visible').slideUp().siblings('a').find('.menu-expand i').removeClass('icofont-minus').addClass(' icofont-plus ');
            } else {
                jQuerythis.parent('li').addClass('active').children('ul').slideDown().siblings('a').find('.menu-expand i').removeClass(' icofont-plus ').addClass('icofont-minus');
                jQuerythis.parent('li').siblings('li').removeClass('active').find('ul:visible').slideUp().siblings('a').find('.menu-expand i').removeClass('icofont-minus').addClass(' icofont-plus ');
            }
        }
    });


    /*====== Sidebar menu Active ======*/
    function mobileMenuActive() {
        var navbarTrigger = jQuery('.mobile-menu-button-active'),
            endTrigger = jQuery('.sidebar-close'),
            container = jQuery('.mobile-menu-active'),
            wrapper4 = jQuery('.main-wrapper-3');

        wrapper4.prepend('<div class="body-overlay-3"></div>');

        navbarTrigger.on('click', function (e) {
            e.preventDefault();
            container.addClass('sidebar-visible');
            wrapper4.addClass('overlay-active-3');
        });

        endTrigger.on('click', function () {
            container.removeClass('sidebar-visible');
            wrapper4.removeClass('overlay-active-3');
        });

        jQuery('.body-overlay-3').on('click', function () {
            container.removeClass('sidebar-visible');
            wrapper4.removeClass('overlay-active-3');
        });
    };
    mobileMenuActive();

    /*--- Language currency active ----*/
    jQuery('.mobile-language-active').on('click', function (e) {
        e.preventDefault();
        jQuery('.lang-dropdown-active').slideToggle(900);
    });


    /*------------------------------------
        Testimonial img slider active
    -----------------------------------*/
    jQuery('.testimonial-img-slider-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: false,
        asNavFor: '.testimonial-active-3',
    });

    /*--------------------------------
       Testimonial active 3
    -----------------------------------*/
    jQuery('.testimonial-active-3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.testimonial-img-slider-active , .testimonial-img-slider-active-3',
        dots: true,
        focusOnSelect: true,
        fade: true,
        arrows: false
    });

    /*----------------------------------------------------------
        Testimonial img slider active 3 ( home mega fashion )
    --------------------------------------------------------------*/
    jQuery('.testimonial-img-slider-active-3').on('init afterChange', function () {
        const titleImg = document.querySelector('.testimonial-next-img img');
        const activeSlide = document.querySelector('.testimonial-img-slider.slick-current');
        titleImg.src = activeSlide.nextSibling.querySelector('img').src;
    });
    jQuery('.testimonial-img-slider-active-3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: false,
        asNavFor: '.testimonial-active-3'
    });




    // Isotope active
    jQuery('.grid').imagesLoaded(function () {
        // init Isotope
        var jQuerygrid = jQuery('.grid').isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-item',
            }
        });
    });

    /*--------------------------
        Isotope active
    ---------------------------- */

    jQuery('.grid-2').imagesLoaded(function () {
        // init Isotope
        jQuery('.grid-2').isotope({
            itemSelector: '.grid-item-2',
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: '.grid-sizer',
            }
        });
    });
    /*--------------------------
        Isotope active
    ---------------------------- */

    jQuery('.grid-3').imagesLoaded(function () {
        // init Isotope
        jQuery('.grid-3').isotope({
            itemSelector: '.grid-item-3',
            percentPosition: true,
            layoutMode: 'masonry',
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1,
            }
        });
    });

    /*------------------------------------
        testimonial img slider active 2
    --------------------------------------*/
    jQuery('.testimonial-img-slider-active-2').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        focusOnSelect: true,
        draggable: false,
        fade: false,
        asNavFor: '.testimonial-active-4',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    /*--------------------------------
        Testimonial active 4
    -----------------------------------*/
    jQuery('.testimonial-active-4').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.testimonial-img-slider-active-2',
        dots: false,
        focusOnSelect: true,
        fade: true,
        arrows: false
    });

    /*--------------------------------
        Testimonial active 5
    -----------------------------------*/
    jQuery('.testimonial-active-5').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });

    /*--------------------------------
        Categori slider active
    -----------------------------------*/
    jQuery('.categori-slider-active').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 6,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 575,
            settings: {
                autoplay: true,
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }
        ]
    });


    /*--------------------------------
        Testimonial active 6
    -----------------------------------*/
    jQuery('.testimonial-active-6').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        fade: false,
        arrows: false,
        responsive: [{
            breakpoint: 1500,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 767,
            settings: {
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
        ]
    });

    /*--------------------------------
        Product img slider active
    -----------------------------------*/
    jQuery('.product-img-slider-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        fade: false,
        arrows: false,
    });

    /*--------------------------------
        Testimonial active 7
    -----------------------------------*/
    jQuery('.testimonial-active-7').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        fade: false,
        arrows: false,
    });

    /*--------------------------------
        Product details 3 img slider
    -----------------------------------*/
    jQuery('.product-details-3-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        loop: true,
        fade: false,
        arrows: false,
    });
    /*--------------------------------
        Product details 3 img slider 2
    -----------------------------------*/
    jQuery('.product-details-3-img-slider-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        loop: true,
        fade: false,
        arrows: false,
    });


    /*====== SidebarSearch ======*/
    function sidebarSearch() {
        var searchTrigger = jQuery('.search-active'),
            endTriggersearch = jQuery('.megashop-search-close'),
            container = jQuery('.main-search-active');

        searchTrigger.on('click', function (e) {
            e.preventDefault();
            container.addClass('search-visible');
        });

        endTriggersearch.on('click', function () {
            container.removeClass('search-visible');
        });

    };
    sidebarSearch();

    /*---------------------
        Price range
    --------------------- */
    var sliderrange = jQuery('#slider-range');
    var amountprice = jQuery('#amount');
    jQuery(function () {
        sliderrange.slider({
            range: true,
            min: 5,
            max: 45,
            values: [0, 45],
            slide: function (event, ui) {
                amountprice.val("$" + ui.values[0] + " -$ " + ui.values[1]);
                let timing;
                let htmlPagination = '';
                //Call Ajax jquery
                timing = setTimeout(() => {
                    clearTimeout(timing);
                    $.ajax({
                        url: ajaxurl.baseURL,
                        data: {
                            'action': 'filterPriceSlider',
                            'min_price': ui.values[0],
                            'max_price': ui.values[1]
                        },
                        success: function (data) {
                            let results = [];
                            
                            // This outputs the result of the ajax request
                            let objectJSON = JSON.parse(data);
                            
                            let html = '';
                            //ẩn phân trang
                            $(".pro-pagination-style > ul").hide();
                            //Parse data thành mảng đối tượng trả về từ server 
                            
                            results = objectJSON;
                            
                            //console.log(results);
                            results.forEach((item) => (
                                html += `
                                <li class="product-wrap product type-product post-${item.ID} status-publish instock product_cat-music has-post-thumbnail downloadable virtual purchasable product-type-simple">
                                    <a href="${item.link}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">${item.image}<h2 class="woocommerce-loop-product__title">${item.name}</h2>
                                    <span class="price">${item.price}</span>
                                    </a>
                                    <div class="product-action-position-1 text-center">
                                        <div class="product-content">
                                            <h4><a href="${item.link}">${item.name}</a></h4>
                                            <div class="product-price">
                                                <span>${item.regular_price}</span>
                                                <span class="old-price">${item.sale_price}</span>
                                            </div>
                                    </div>
                                    <div class="product-action-wrap">
                                        <div class="product-action-cart">
                                            <a href="?add-to-cart=${item.ID}" aria-describedby="woocommerce_loop_add_to_cart_link_describedby_${item.ID}" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="${item.ID}" data-product_sku="woo-album" aria-label="Thêm vào giỏ hàng: “${item.name}”" rel="nofollow" data-product_name="${item.name}" data-price="${item.sale_price ? item.sale_price : item.regular_price}">Thêm vào giỏ hàng</a>
                                        </div>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-zoom"></i></button>
                                        <button title="Add to Compare"><i class="icon-compare"></i></button>
                                        <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                    </div>
                                    </div><span id="woocommerce_loop_add_to_cart_link_describedby_${item.ID}" class="screen-reader-text">
                                    </span>
                                </li>
                                `
                            ));
                            $(".columns-3").html(html);
                            
                        },
                        error: function (errorThrown) {
                            console.log(errorThrown);
                        }
                    });

                }, 500)


            }
        });
        amountprice.val("$" + sliderrange.slider("values", 0) +
            "-$" + sliderrange.slider("values", 1));

    });


    /*---------------------
        Video popup
    --------------------- */
    jQuery('.video-popup').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        zoom: {
            enabled: true,
        }
    });


    /*-------------------------------------
        checkout one click toggle function
    ---------------------------------------*/
    var checked = jQuery('.sin-payment input:checked')
    if (checked) {
        jQuery(checked).siblings('.payment-box').slideDown(900);
    };
    jQuery('.sin-payment input').on('change', function () {
        jQuery('.payment-box').slideUp(900);
        jQuery(this).siblings('.payment-box').slideToggle(900);
    });


    /*-----------------------
        Shop filter active 
    ------------------------- */
    jQuery('.shop-filter-active').on('click', function (e) {
        e.preventDefault();
        jQuery('.product-filter-wrapper').slideToggle();
    })
    var shopFiltericon = jQuery('.shop-filter-active');
    shopFiltericon.on('click', function () {
        jQuery('.shop-filter-active').toggleClass('active');
    })




    /*--
        Product details slider 2
    -----------------------------------*/
    jQuery('.pro-dec-big-img-slider-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: false,
        asNavFor: '.product-dec-slider-2',
    });

    /*--
        Product details 2 slick carousel as Nav
    --------------------------------------------*/
    jQuery('.product-dec-slider-2').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        vertical: true,
        asNavFor: '.pro-dec-big-img-slider-2',
        dots: false,
        focusOnSelect: true,
        fade: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 7,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    autoplay: true,
                    slidesToShow: 3,
                }
            }
        ]
    });


    // Instantiate EasyZoom instances
    var jQueryeasyzoom = jQuery('.easyzoom').easyZoom();


    /*--------------------------------
        Product details slider 5 active
    -----------------------------------*/
    jQuery('.product-details-slider-5-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        loop: true,
        fade: false,
        arrows: false,
    });

    /*--------------------------------
        Product details tab small
    -----------------------------------*/
    jQuery('.product-details-tab-small').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        loop: true,
        fade: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }
        ]
    });



    jQuery('.product-details-tab-small').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        loop: true,
        fade: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            }
        ]
    });

    /*--------------------------
        Tab active
    ---------------------------- */
    var ProductDetailsSmall = jQuery('.product-details-tab-small a');
    ProductDetailsSmall.on('click', function (e) {
        e.preventDefault();
        var jQueryhref = jQuery(this).attr('href');
        ProductDetailsSmall.removeClass('active');
        jQuery(this).addClass('active');
        jQuery('.product-details-tab-large .tab-pane').removeClass('active');
        jQuery('.product-details-tab-large ' + jQueryhref).addClass('active');
    })




    //AJAX shop page list 





})(jQuery);

