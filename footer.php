    <div class="modal theme-modal" id="theme-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 bg-transparent">
                <div class="modal-header border-0 bg-theme text-white">
                    <h5 class="modal-title w-100 text-center">Change Color Theme</h5>
                    <button type="button" class="close focus-0 position-absolute text-white" data-dismiss="modal"
                        aria-label="Close" style="right: 6px;top: 0px;">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a class="btn btn-theme-mode focus-0 <?php echo $class ?>">
                        <?php echo $buttonText ?>
                    </a>
                </div>
                <!-- <div class="modal-footer border-0 text-center justify-content-center bg-transparent">
                <button type="button" class="btn btn-theme px-5" data-dismiss="modal">Close</button>
            </div> -->
            </div>
        </div>
    </div>
    <footer>
        <section class="footer_main pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-center text-md-left">
                        <a href="">
                            <img class="footer_main_logo img-fluid" title="UrFon IFix" alt="UrFon IFix"
                                src="assets/img/logo-main-white.png">
                        </a>
                    </div>
                    <!-- <div class="col-md-2 mt-4 mt-md-0 pl-lg-0 pl-lg-4 px-md-1 text-center text-md-left">
                        <ul class="list-unstyled footer_quick_links mb-0">
                            <li><a href="repair.php" class="text-uppercase">Start Your Repair</a></li>
                            <li><a href="repair.php">Cell Phones Repair</a></li>
                            <li><a href="repair.php">Tablet Repair</a></li>
                            <li><a href="repair.php">IPod Repair</a></li>
                            <li><a href="#" class="text-uppercase">Start Your Repair</a></li>
                            <li><a href="#">Cell Phones Repair</a></li>
                            <li><a href="#">Tablet Repair</a></li>
                            <li><a href="#">IPod Repair</a></li>
                        </ul>
                    </div> -->
                    <div class="col-md-3 offset-xl-1 mb-4 mb-md-0 mt-4 mt-md-0 px-md-1 text-center text-md-left">
                        <ul class="list-unstyled footer_quick_links mb-0">
                            <li><a href="about.php" class="text-uppercase">About UrFon IFix</a></li>
                            <li><a href="./">Home</a></li>
                            <li><a href="view-location.php">Stores</a></li>
                            <li><a href="contact-us.php">Contact</a></li>
                            <li><a href="admin-login.php">Login</a></li>
                            <li><a href="" data-toggle="modal" data-target="#theme-modal">Light/Dark Mode</a></li>
                        </ul>
                    </div>
                    <div class="border-dark border-left col-xl-5 col-md-6 px-lg-3 px-md-2">
                        <ul class="list-unstyled footer_subscription_area mb-0">
                            <li>
                                <p class="mb-0 text-white">GET THE NEWSLETTERS</p>
                            </li>
                            <li>
                                <form action="newsletter.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-inline">
                                        <input type="email" name="nl_email" id="nl_email" placeholder="Enter your Email"
                                            class="py-0 w-75 form-control">
                                        <input type="submit" name="submit"
                                            class="btn btn-theme ml-lg-3 mt-3 mt-lg-0 px-5 px-lg-3 rounded-pill">
                                    </div>
                                </form>
                            </li>
                            <li>
                                <div class="d-flex align-items-baseline ">
                                    <a href="tel:4693329662"
                                        class="btn btn-block btn-white-transparent mr-1 pl-1 pl-md-0 pr-2 pr-md-0">
                                        <i class="fa fa-phone mr-1"></i> (469) 332-9662
                                    </a>
                                    <a href="contact-us.php" class="btn btn-white-transparent ml-1 btn-block">
                                        <i class="fa fa-envelope mr-1"></i> Contact Us
                                    </a>
                                </div>

                            </li>
                            <li class="footer-social mt-2">
                                <a href="" class=""><i class="social_icons fab fa-youtube-square"></i></a>
                                <a href="https://www.facebook.com/UrFoniFix/" target="_blank" class=""><i
                                        class="social_icons fab fa-facebook-square"></i></a>
                                <a href="" class=""><i class="social_icons fab fa-twitter-square"></i></a>
                                <a href="https://www.instagram.com/urfonifix/" target="_blank" class=""><i
                                        class="social_icons fab fa-instagram"></i></a>
                            </li>
                            <li class="my-2">
                                <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppppcmcvdam.png"
                                    alt="Pay with PayPal, PayPal Credit or any major credit card" width="200" />
                            </li>
                            <li>
                                <p class="footer_description mt-2">
                                    All trademarks are properties of their respective holders. UrFon IFix does not
                                    own or make claim to those trademarks used on this website in which it is not the
                                    holder.
                                </p>
                            </li>
                            <li>
                                <img src="assets/img/usa_flag.jpg" width="160" class="img-fluid" alt="USA_Phone_Repair">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer_end">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 d-lg-flex text-center align-items-center justify-content-between">
                        <ul class="list-inline list-unstyled mb-0">
                            <!-- GTranslate: https://gtranslate.io/ -->
                            <li class="list-inline-item">
                                <a href="#" onclick="doGTranslate('en|en');return false;" title="English"
                                    class="gflag nturl" style="background-position:-0px -0px;"><img
                                        src="//gtranslate.net/flags/blank.png" height="24" width="24"
                                        alt="English" /></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" onclick="doGTranslate('en|es');return false;" title="Spanish"
                                    class="gflag nturl" style="background-position:-600px -200px;"><img
                                        src="//gtranslate.net/flags/blank.png" height="24" width="24"
                                        alt="Spanish" /></a>
                            </li>
                        </ul>
                        <ul class="list-unstyled list-inline footer_end_link mb-0">
                            <li class="list-inline-item mr-1">
                                <p class="mb-0 text-uppercase">© 2022 UrFon IFix</p>
                            </li>
                            <li class="list-inline-item text-uppercase">
                                <a href="" class="pl-2">privacy</a>
                            </li>
                            <li class="list-inline-item text-uppercase">
                                <a href="" class="pl-2">terms</a>
                            </li>
                            <li class="list-inline-item text-uppercase">
                                <a href="" class="pl-2">do not sell my personal information</a>
                            </li>
                            <li class="list-inline-item text-uppercase">
                                <a href="" class="pl-2">sitemap</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <a class="btn btn-theme-mode fixed focus-0 light-theme rounded-circle" data-toggle="tooltip"
            data-placement="left" title="<?php echo $buttonText2 ?>">
            <i class="fa fa-lightbulb fa-lg"></i>
        </a>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Core theme JS-->
    <script src="./assets/js/scripts.js"></script>
    <script src="https://js.stripe.com/v2/"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-creditcardvalidator@1.0.0/jquery.creditCardValidator.min.js">
    </script>
    <script>
function validate_form() {
    var valid_card = 0;
    var valid = false;
    var card_cvc = $('#card_cvc').val();
    var card_expiry_month = $('#card_expiry_month').val();
    var card_expiry_year = $('#card_expiry_year').val();
    var card_holder_number = $('#card_holder_number').val();
    var email_address = $('#email_address').val();
    var customer_name = $('#customer_name').val();
    var customer_address = $('#customer_address').val();
    var customer_city = $('#customer_city').val();
    var customer_pin = $('#customer_pin').val();
    var customer_country = $('#customer_country').val();
    var name_expression = /^[a-z ,.'-]+$/i;
    var email_expression = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var month_expression = /^01|02|03|04|05|06|07|08|09|10|11|12$/;
    var year_expression = /^2017|2018|2019|2020|2021|2022|2023|2024|2025|2026|2027|2028|2029|2030|2031$/;
    var cvv_expression = /^[0-9]{3,3}$/;

    $('#card_holder_number').validateCreditCard(function(result) {
        if (result.valid) {
            $('#card_holder_number').removeClass('require');
            $('#error_card_number').text('');
            valid_card = 1;
        } else {
            $('#card_holder_number').addClass('require');
            $('#error_card_number').text('Invalid Card Number');
            valid_card = 0;
        }
    });

    if (valid_card == 1) {
        if (!month_expression.test(card_expiry_month)) {
            $('#card_expiry_month').addClass('require');
            $('#error_card_expiry_month').text('Invalid Data');
            valid = false;
        } else {
            $('#card_expiry_month').removeClass('require');
            $('#error_card_expiry_month').text('');
            valid = true;
        }

        if (!year_expression.test(card_expiry_year)) {
            $('#card_expiry_year').addClass('require');
            $('#error_card_expiry_year').error('Invalid Data');
            valid = false;
        } else {
            $('#card_expiry_year').removeClass('require');
            $('#error_card_expiry_year').text('');
            valid = true;
        }

        if (!cvv_expression.test(card_cvc)) {
            $('#card_cvc').addClass('require');
            $('#error_card_cvc').text('Invalid Data');
            valid = false;
        } else {
            $('#card_cvc').removeClass('require');
            $('#error_card_cvc').text('');
            valid = true;
        }
        if (!name_expression.test(customer_name)) {
            $('#customer_name').addClass('require');
            $('#error_customer_name').text('Invalid Name');
            valid = false;
        } else {
            $('#customer_name').removeClass('require');
            $('#error_customer_name').text('');
            valid = true;
        }

        if (!email_expression.test(email_address)) {
            $('#email_address').addClass('require');
            $('#error_email_address').text('Invalid Email Address');
            valid = false;
        } else {
            $('#email_address').removeClass('require');
            $('#error_email_address').text('');
            valid = true;
        }

        if (customer_address == '') {
            $('#customer_address').addClass('require');
            $('#error_customer_address').text('Enter Address Detail');
            valid = false;
        } else {
            $('#customer_address').removeClass('require');
            $('#error_customer_address').text('');
            valid = true;
        }

        if (customer_city == '') {
            $('#customer_city').addClass('require');
            $('#error_customer_city').text('Enter City');
            valid = false;
        } else {
            $('#customer_city').removeClass('require');
            $('#error_customer_city').text('');
            valid = true;
        }

        if (customer_pin == '') {
            $('#customer_pin').addClass('require');
            $('#error_customer_pin').text('Enter Zip code');
            valid = false;
        } else {
            $('#customer_pin').removeClass('require');
            $('#error_customer_pin').text('');
            valid = true;
        }

        if (customer_country == '') {
            $('#customer_country').addClass('require');
            $('#error_customer_country').text('Enter Country Detail');
            valid = false;
        } else {
            $('#customer_country').removeClass('require');
            $('#error_customer_country').text('');
            valid = true;
        }


    }
    return valid;
}
Stripe.setPublishableKey(
    'pk_test_51HMChzLOjCZeqCCCKDkYlR5AiRZBAozxboVV2ZqTHForCo2XmjAtJmPyZbuAwQKnQgFOTgiTbsEk1NaxI4IzZUN700tBdEWqz4');

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#button_action').attr('disabled', false);
        $('#message').html(response.error.message).show();
    } else {
        var token = response['id'];
        $('#order_process_form').append("<input type='hidden' name='token' value='" + token + "' />");

        $('#order_process_form').submit();
    }
}

function stripePay(event) {
    event.preventDefault();

    if (validate_form() == true) {
        $('#button_action').attr('disabled', 'disabled');
        $('#button_action').val('Payment Processing...');
        Stripe.createToken({
            number: $('#card_holder_number').val(),
            cvc: $('#card_cvc').val(),
            exp_month: $('#card_expiry_month').val(),
            exp_year: $('#card_expiry_year').val()
        }, stripeResponseHandler);
        return false;
    }
}

function only_number(event) {
    var charCode = (event.which) ? event.which : event.keyCode;
    if (charCode != 32 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
    </script>

    <script>
const btn = document.querySelector(".btn-theme-mode");
btn.addEventListener("click", function() {
    document.body.classList.toggle("dark-theme");
    console.log("done");
    let theme = "light";
    if (document.body.classList.contains("dark-theme")) {
        theme = "dark";
    }
    document.cookie = "theme=" + theme;
    location.reload();
});
const btn2 = document.querySelector(".btn-theme-mode.fixed");
btn2.addEventListener("click", function() {
    console.log("done");
    document.body.classList.toggle("dark-theme");
    let theme = "light";
    if (document.body.classList.contains("dark-theme")) {
        theme = "dark";
    }
    document.cookie = "theme=" + theme;

    location.reload();
});
    </script>

    <script type="text/javascript">
var Tawk_API = Tawk_API || {},
    Tawk_LoadStart = new Date();
(function() {
    var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/5efdd1139e5f69442291bb55/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
    </script>
    <style type="text/css">
a.gflag {
    vertical-align: middle;
    font-size: 17px;
    padding: 1px 0;
    background-repeat: no-repeat;
    /* background-image: url(//gtranslate.net/flags/24.png); */
}

a.gflag img {
    border: 0;
}

a.gflag:hover {
    /* background-image: url(//gtranslate.net/flags/24a.png); */
}

#goog-gt-tt {
    display: none !important;
}

.goog-te-banner-frame {
    display: none !important;
}

.goog-te-menu-value:hover {
    text-decoration: none !important;
}

body {
    top: 0 !important;
}

#google_translate_element2 {
    display: none !important;
}
    </style>

    <div id="google_translate_element2"></div>
    <script type="text/javascript">
function googleTranslateElementInit2() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        autoDisplay: false
    }, 'google_translate_element2');
}
    </script>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

    <script type="text/javascript">
/* <![CDATA[ */
eval(function(p, a, c, k, e, r) {
    e = function(c) {
        return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c
            .toString(36))
    };
    if (!''.replace(/^/, String)) {
        while (c--) r[e(c)] = k[c] || e(c);
        k = [function(e) {
            return r[e]
        }];
        e = function() {
            return '\\w+'
        };
        c = 1
    };
    while (c--)
        if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
    return p
}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',
    43, 43,
    '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'
    .split('|'), 0, {}))
/* ]]> */
    </script>

    </body>

    </html>