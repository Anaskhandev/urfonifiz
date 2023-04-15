$(document).ready(function() {

    // Fixed Header
    var navbarCollapse = function() {
        if ($(window).scrollTop() > 400) {
            $('.main-header').addClass('is-scrolled');
        } else {
            $('.main-header').removeClass('is-scrolled');
        }
    };
    // Collapse now if page is not at top
    navbarCollapse();
    // Collapse the navbar when page is scrolled
    $(window).scroll(navbarCollapse);

    if ($('body').hasClass('dark-theme')) {
        $('.btn_nav_search').addClass('active');
        $('.theme-modal').addClass('dark');
    };
    if (document.cookie.indexOf('modal_shown=') >= 0) {
        //do nothing if modal_shown cookie is present
    } else {
        setTimeout(function() {
            $('.theme-modal').modal('show');
        }, 3000);
        document.cookie = 'modal_shown=seen';
    };
    $('[data-toggle="tooltip"]').tooltip();

    $("div.client_review").slice(0, 2).addClass('d-flex');
    $("#loadMore").on('click', function(e) {
        e.preventDefault();
        $("div.client_review:hidden").slice(0, 2).addClass('d-flex');
        if ($("div.client_review:hidden").length == 0) {
            $("#loadMore").remove();
        } else {
            $('html,body').animate({
                scrollTop: $(".client_review").offset().top
            }, 1000);
        }
    });

    $(".service_type_buttons .service_type_label").on('click', function() {
        $(".service_type_buttons .service_type_label").removeClass("active");
        $(this).addClass('active');
    });
    $(".device_type_buttons .device_type_label").on('click', function() {
        $(".device_type_buttons .device_type_label").removeClass("active");
        $(this).addClass('active');
    });

    // $('.product-item').find('.btnAddAction').on('click', function () {
    //     $('.btn-cart-open').dropdown("show");
    // });
    if ($("ul.product-listing").has("li.product-item").length) {
        $('.btn-cart-open').dropdown("show");
    }
    if (!$("#shopping-cart").has("tr.product-item").length) {
        $('.btnPayment').attr('disabled', 'true');
    }

    $('.show-cart-dropdown').on('hide.bs.dropdown', function(e) {
        if (e.clickEvent) {
            e.preventDefault();
        }
    });

    // $(".btnAddAction").click(function () {
    //     $.ajax({
    //         url: "mobilephone.php?br_id=4&pageno=1",
    //         type: "get",
    //         data: {
    //             postId: 1
    //         },
    //         success: function (response) {

    //             console.log(response);
    //         },
    //         error: function (xhr) {

    //             console.log(error);
    //         }
    //     });
    // });

    $('.owl-header').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0: {
                items: 1,
                nav: false,
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});
// if ($(".banner-carousel").length) {
//     $(".banner-carousel").owlCarousel({
//         loop: true,
//         animateOut: "fadeOut",
//         animateIn: "fadeIn",
//         margin: 0,
//         nav: true,
//         smartSpeed: 500,
//         autoplay: 6000,
//         autoplayTimeout: 7000,
//         navText: [
//             '<span class="icon fa fa-angle-left"></span>',
//             '<span class="icon fa fa-angle-right"></span>'
//         ],
//         responsive: {
//             0: {
//                 items: 1
//             },
//             600: {
//                 items: 1
//             },
//             800: {
//                 items: 1
//             },
//             992: {
//                 items: 1
//             }
//         }
//     });
// }