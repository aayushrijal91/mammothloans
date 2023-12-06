// ie: Engine.ui.misc();
jQuery(function ($) {
    "use strict";
    var Engine = {
        ui: {
            misc: function () {
                scrollBehaviour();

                $(window).on('scroll', () => {
                    scrollBehaviour();
                });

                function scrollBehaviour() {
                    if ($(window).scrollTop() >= 50) {
                        $('nav').addClass('scrolled');
                    } else {
                        $('nav').removeClass('scrolled');
                    }
                }

                $('.partner-slider').slick({
                    slidesToShow: 8,
                    slidesToScroll: 1,
                    arrows: false,
                    autoplay: true,
                    speed: 3000,
                    autoplaySpeed: 0,
                    cssEase: 'linear',
                    responsive: [
                        {
                            breakpoint: 1100,
                            settings: {
                                slidesToShow: 4,
                                autoplay: true,
                                centerMode: true,
                            }
                        },
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 3,
                                autoplay: true,
                                centerMode: true,
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 2,
                                autoplay: true,
                                centerMode: true,
                            }
                        }
                    ]
                });

                if ($(document).width() < 1100) {
                    $('#why_us_slider').slick({
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: false,
                        autoplay: true,
                        responsive: [
                            {
                                breakpoint: 900,
                                settings: {
                                    slidesToShow: 1,
                                    centerMode: true,
                                    centerPadding: "80px",
                                }
                            },
                            {
                                breakpoint: 540,
                                settings: {
                                    slidesToShow: 1,
                                    centerMode: true,
                                    centerPadding: "20px"
                                }
                            }
                        ]
                    });
                }

                if ($(document).width() < 540) {
                    $('#support_slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        centerMode: true,
                        autoplay: true,
                    });

                    $('#business_loan_slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        arrows: false,
                        autoplay: true,
                        centerPadding: "20px"
                    });
                }

                $('.banner-loans-slider').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    variableWidth: true,
                    infinite: false,
                    responsive: [
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 2,
                            }
                        }
                    ]
                });

                $(".loanCards_slider").slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    centerMode: true,
                    autoplay: true,
                    centerPadding: "200px",
                    responsive: [
                        {
                            breakpoint: 900,
                            settings: {
                                slidesToShow: 1,
                                autoplay: true,
                                centerPadding: "100px"
                            }
                        },
                        {
                            breakpoint: 540,
                            settings: {
                                slidesToShow: 1,
                                autoplay: true,
                                centerPadding: "50px"
                            }
                        }
                    ]
                });

                $('#showSliderMenu').on('click', function () {
                    $('.slideMenu').addClass('active');
                    $('html').addClass('nooverflow');
                })

                $('#hideSliderMenu').on('click', function () {
                    $('.slideMenu').removeClass('active');
                    $('html').removeClass('nooverflow');
                })
            }, // end misc
        }, // end ui
        //utils: {

        //}, // end utils
    };
    Engine.ui.misc();
    //Engine.utils.sliders();
});

document.addEventListener("DOMContentLoaded", function () {
    var radioLabels = document.querySelectorAll(".wpcf7-list-item-label");

    radioLabels.forEach(function (label) {
        label.addEventListener("click", function () {
            var radioInput = this.parentNode.querySelector('input[type="radio"]');
            if (radioInput) {
                radioInput.checked = true;
            }
        });
    });
});