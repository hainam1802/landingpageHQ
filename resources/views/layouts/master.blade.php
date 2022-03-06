<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HQ Group</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <!--    bootstrap-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/frontend/lib/bootstrap/bootstrap.min.css">

    <!--    css của mình-->
    <link rel="stylesheet" href="./assets/frontend/css/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!--    swiper-->
    <link rel="shortcut icon" href="./assets/frontend/img/logo.png">
    <link rel="stylesheet" href="./assets/frontend/lib/swiper/swiper.min.css">
</head>
<body>
<div class="scroll_top">
    <img src="./assets/frontend/img/scroll.png" alt="">
</div>
<header>
    <!--logo và search box-->
    <div class="heading">
        <div class="container">
            <div class="logo">
                <a href="https://hqgroups.vn/" target="_blank">
                    <img src="./assets/frontend/img/logo.png" alt="">
                </a>

            </div>
            <div style="">
                <ul class="nav nav_destop">
                    <li><a href="#traocohoi">Về chúng tôi</a></li>
                    <li><a href="#tamnhin">Tầm nhìn</a></li>
                    <li><a href="#sumenh">Sứ mệnh</a></li>
                    <li><a href="#company">Các thành viên</a></li>

                </ul>
                <label for="nav_bar_mobile" class="nav_mobile">
                    <img src="./assets/frontend/img/nav_bar.png" alt="">

                </label>
                <input type="checkbox" hidden class="nav_bar_mobile" id="nav_bar_mobile" >
                <label for="nav_bar_mobile" class="nav_bar_mobile_overlay"></label>
                <div class="nav_bar_form_mobile">
                    <div class="nav_bar_form_mobile_detail">
                        <a href="#traocohoi">
                            Về chúng tôi
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail">
                        <a href="#tamnhin">
                            Tầm nhìn
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail">
                        <a href="#sumenh">
                            Sứ mệnh
                        </a>
                    </div>
                    <!--                    <div class="nav_bar_form_mobile_detail">-->
                    <!--                        <a href="">-->
                    <!--                           Hoạt động gắn kết nội bộ-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <!--                    <div class="nav_bar_form_mobile_detail">-->
                    <!--                        <a href="">-->
                    <!--                            Văn hóa doanh nghiệp-->
                    <!--                        </a>-->
                    <!--                    </div>-->
                    <div class="nav_bar_form_mobile_detail">
                        <a href="#company">
                            Các công ty thành viên
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#ikonic">
                            <img src="./assets/frontend/img/mobile_company1.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#hubjs">
                            <img src="./assets/frontend/img/mobile_company2.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#hqpay">
                            <img src="./assets/frontend/img/mobile_company3.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#hqplay">
                            <img src="./assets/frontend/img/mobile_company4.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#globalent">
                            <img src="./assets/frontend/img/mobile_company5.png" alt="">
                        </a>
                    </div>
                    <div class="nav_bar_form_mobile_detail company_mobile">
                        <a href="#xcrcorp">
                            <img src="./assets/frontend/img/mobile_company6.png" alt="">
                        </a>
                    </div>
                </div>


            </div>
            <div class="nav_destop_hire">
                <a href="https://tuyendung.hqgroups.vn/" target="_blank">Xem vị trí tuyển dụng</a>
            </div>
        </div>
    </div>
    <!--    nav-->
</header>
<div class="company_category">
    <div class="container">
        <div class="company_category_in">
            <div class="company_category_img">
                <a  href="#ikonic"  class="company_ikonic" >
                    <img src="./assets/frontend/img/company1.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#hubjs" class="company_hubjs">
                    <img src="./assets/frontend/img/company2.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#hqpay" class="company_hqpay">
                    <img src="./assets/frontend/img/company3.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#hqplay" class="company_hqplay">
                    <img src="./assets/frontend/img/company4.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#globalent" class="company_globalent">
                    <img src="./assets/frontend/img/company5.png" alt="">
                </a>

            </div>
            <div class="company_category_img">
                <a href="#xcrcorp" class="company_xcrcorp">
                    <img src="./assets/frontend/img/company6.png" alt="">
                </a>

            </div>

        </div>
    </div>

</div>
@include('layouts.includes.header')
@yield('content')
@include('layouts.includes.footer')

<!--footer-->

<footer>
    <div class="end">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="end_logo">
                        <a href="https://hqgroups.vn/" target="_blank">
                            <img src="./assets/frontend/img/footer_logo.png" alt="">
                        </a>

                    </div>
                    <div class="end_name">
                        Công ty Cổ phần Tập đoàn HQ
                    </div>
                    <div class="end_social">
                        <a href="https://www.facebook.com/HQGROUPS" target="_blank">
                            <img src="./assets/frontend/img/footer_fb.png" alt="">
                        </a>
                        <a href="mailto:tuyendung@hqgroups.vn" target="_blank">
                            <img src="./assets/frontend/img/footer_gg.png" alt="">
                        </a>


                    </div>
                </div>

                <div class="end_line col-12">
                    <div class="end_line_in"></div>
                </div>
                <div class="col-6 col-md-4 end_about">
                    <p>Về chúng tôi</p>
                    <ul>
                        <li><a href="https://hqgroups.vn/gioi-thieu" target="_blank">Giới thiệu</a></li>
                        <li><a href="https://tuyendung.hqgroups.vn/" target="_blank">Tuyển dụng</a></li>
                        <li><a href="https://www.facebook.com/HQGroupLife" target="_blank">HQ Group - Life</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 end_about">
                    <p>Liên hệ</p>
                    <ul>
                        <li><img src="./assets/frontend/img/end_home.png" alt=""><a href="https://hqgroups.vn/" target="_blank">http://hqgroups.vn/</a></li>
                        <li><img src="./assets/frontend/img/end_mail.png" alt=""><a href="mailto:tuyendung@hqgroups.vn">tuyendung@hqgroups.vn</a></li>
                        <li><img src="./assets/frontend/img/end_phone.png" alt=""><a href="tel:(+84) 24 2246 2020">(+84) 24 2246 2020</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>

<script src="./assets/frontend/lib/jquery.min.js"></script>
<script src="./assets/frontend/lib/bootstrap/bootstrap.min.js"></script>
<script src="./assets/frontend/js/action.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./assets/frontend/lib/swiper/swiper.min.js"></script>

<script src="/assets/frontend/js/swiper.js"></script>
<script>
    $( document ).ready(function() {
        var swiper2 = new Swiper('.ikonix_kol_content_slide_detail', {
            pagination: {
                el: '.ikonix_kol_content_slide .swiper-pagination1',
                clickable: true,
                type: 'bullets',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                autoplaySpeed: 5000,

            },
            autoplay: true,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,
            lazy: {
                loadPrevNext: true,
            },
            loop: false,
            centeredSlides: false,
            slidesPerView: 6,
            speed: 200,
            spaceBetween: 14,


            // autoplay: false,
            parallax: true,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            slideToClickedSlide: true,

            observer: true,
            observeParents: true,
            breakpoints: {
                // 1460: {
                //     coverflowEffect: {
                //         rotate: 0   ,
                //         stretch: 476,
                //         depth: 300,
                //         modifier: 1, // 2,3
                //         slideShadows : false,
                //     },
                // },
                // 1220: {
                //     coverflowEffect: {
                //         rotate: 0   ,
                //         stretch: 180,
                //         depth: 300,
                //         modifier: 1, // 2,3
                //         slideShadows : false,
                //
                //     },
                // },
                992: {
                    slidesPerView: 3,
                },


                480: {
                    slidesPerView: 2,

                }
            }
        });

        var swiper3 = new Swiper('.ikonix_partner_content_slide_detail', {

            //
            // navigation: {
            //     nextEl: '.item_play_dif_slide .swiper-button-next',
            //     prevEl: '.item_play_dif_slide .swiper-button-prev',
            // },
            pagination: {
                el: '.ikonix_partner_content_slide .swiper-pagination2',
                clickable: true,
                type: 'bullets',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                autoplaySpeed: 5000,

            },
            autoplay: true,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,
            lazy: {
                loadPrevNext: true,
            },
            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 200,
            spaceBetween: 14,


            // autoplay: false,
            parallax: true,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            slideToClickedSlide: true,

            observer: true,
            observeParents: true,
            breakpoints: {
                992: {
                    slidesPerView: 3,
                },


                480: {
                    slidesPerView: 2,

                }
            }
        });
        var swiperhubjs = new Swiper('.hub-js_partner_content_slide_detail', {

            //
            // navigation: {
            //     nextEl: '.item_play_dif_slide .swiper-button-next',
            //     prevEl: '.item_play_dif_slide .swiper-button-prev',
            // },
            pagination: {
                el: '.swiper-paginationhubjs',
                clickable: true,
                type: 'bullets',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                autoplaySpeed: 5000,

            },
            autoplay: true,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,
            lazy: {
                loadPrevNext: true,
            },
            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 200,
            spaceBetween: 14,


            // autoplay: false,
            parallax: true,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            slideToClickedSlide: true,

            observer: true,
            observeParents: true,
            breakpoints: {
                // 1460: {
                //     coverflowEffect: {
                //         rotate: 0   ,
                //         stretch: 476,
                //         depth: 300,
                //         modifier: 1, // 2,3
                //         slideShadows : false,
                //     },
                // },
                // 1220: {
                //     coverflowEffect: {
                //         rotate: 0   ,
                //         stretch: 180,
                //         depth: 300,
                //         modifier: 1, // 2,3
                //         slideShadows : false,
                //
                //     },
                // },
                992: {
                    slidesPerView: 3,
                },


                480: {
                    slidesPerView: 2,

                }
            }
        });
        var swiperhubjscustom = new Swiper('.hub-js_custom_content_slide_detail', {

            //
            // navigation: {
            //     nextEl: '.item_play_dif_slide .swiper-button-next',
            //     prevEl: '.item_play_dif_slide .swiper-button-prev',
            // },
            pagination: {
                el: '.swiper-paginationhubjscustom',
                clickable: true,
                type: 'bullets',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                autoplaySpeed: 5000,

            },
            autoplay: true,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,
            lazy: {
                loadPrevNext: true,
            },
            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 200,
            spaceBetween: 14,


            // autoplay: false,
            parallax: true,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            slideToClickedSlide: true,

            observer: true,
            observeParents: true,
            breakpoints: {
                // 1460: {
                //     coverflowEffect: {
                //         rotate: 0   ,
                //         stretch: 476,
                //         depth: 300,
                //         modifier: 1, // 2,3
                //         slideShadows : false,
                //     },
                // },
                // 1220: {
                //     coverflowEffect: {
                //         rotate: 0   ,
                //         stretch: 180,
                //         depth: 300,
                //         modifier: 1, // 2,3
                //         slideShadows : false,
                //
                //     },
                // },
                992: {
                    slidesPerView: 3,
                },


                480: {
                    slidesPerView: 2,

                }
            }
        });
        var swiperhqpay = new Swiper('.hqpay_partner_content_slide_detail', {

            //
            // navigation: {
            //     nextEl: '.item_play_dif_slide .swiper-button-next',
            //     prevEl: '.item_play_dif_slide .swiper-button-prev',
            // },
            pagination: {
                el: '.hqpay_partner_content_slide .swiper-paginationhqpay',
                clickable: true,
                type: 'bullets',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                autoplaySpeed: 5000,

            },
            autoplay: true,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,
            lazy: {
                loadPrevNext: true,
            },
            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 200,
            spaceBetween: 14,


            // autoplay: false,
            parallax: true,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            slideToClickedSlide: true,

            observer: true,
            observeParents: true,
            breakpoints: {
                // 1460: {
                //     coverflowEffect: {
                //         rotate: 0   ,
                //         stretch: 476,
                //         depth: 300,
                //         modifier: 1, // 2,3
                //         slideShadows : false,
                //     },
                // },
                // 1220: {
                //     coverflowEffect: {
                //         rotate: 0   ,
                //         stretch: 180,
                //         depth: 300,
                //         modifier: 1, // 2,3
                //         slideShadows : false,
                //
                //     },
                // },
                992: {
                    slidesPerView: 3,
                },


                480: {
                    slidesPerView: 2,

                }
            }
        });
        var swiperesport = new Swiper('.hpesport_content_slide_detail', {

            //
            // navigation: {
            //     nextEl: '.item_play_dif_slide .swiper-button-next',
            //     prevEl: '.item_play_dif_slide .swiper-button-prev',
            // },
            pagination: {
                el: '.swiper-paginationesport',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                autoplaySpeed: 5000,

            },
            autoplay: true,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,
            lazy: {
                loadPrevNext: true,
            },
            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 200,
            spaceBetween: 24,


            // autoplay: false,
            // parallax: true,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            slideToClickedSlide: true,

            observer: true,
            observeParents: true,
            breakpoints: {

                992: {
                    slidesPerView: 3,
                },


                480: {
                    slidesPerView: 2,

                }
            }
        });
        var swiperegrcorp = new Swiper('.xcr_content_slide_detail', {

            //
            // navigation: {
            //     nextEl: '.item_play_dif_slide .swiper-button-next',
            //     prevEl: '.item_play_dif_slide .swiper-button-prev',
            // },
            pagination: {
                el: '.swiper-paginationxcrcorp',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                autoplaySpeed: 5000,

            },
            autoplay: true,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,
            lazy: {
                loadPrevNext: true,
            },
            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 200,
            spaceBetween: 24,


            // autoplay: false,
            // parallax: true,
            touchMove: true,
            freeModeSticky:true,
            grabCursor: true,
            slideToClickedSlide: true,

            observer: true,
            observeParents: true,
            breakpoints: {

                992: {
                    slidesPerView: 3,
                },


                480: {
                    slidesPerView: 2,

                }
            }
        });

    });




    $(document).on('scroll',function(){
        if($(window).width() > 1024){
            if ($(this).scrollTop() > 100) {
                $(".heading").css("box-shadow","0px 1px 4px rgb(0 0 0 / 20%)");
            } else {

                $(".heading").css("box-shadow","none");
            }
        }

    });
    $(document).on('scroll',function(){
        if ($(this).scrollTop() > 300) {
            $('.scroll_top').fadeIn();
        } else {
            $('.scroll_top').fadeOut();
        }

    });
    $('.scroll_top').click(function(){
        $('html, body').animate({scrollTop : 0},500);
    });
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 100, // offset (in px) from the original trigger point
        delay: 300, // values from 0 to 3000, with step 50ms
        duration: 1500, // values from 0 to 3000, with step 50ms
        easing: 'ease-out-back', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-center', // defines which position of the element regarding to window should trigger the animation

    });


    ///for counter
    var a = 0;
    $(window).scroll(function() {

        var oTop = $('#statistic').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },
                    {
                        duration: 2500,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            a = 1;
        }

    });


    $('.company_category_img a').click(function(e){
        e.preventDefault();
        var target = $($(this).attr('href'));
        $('.company_category_img a').removeClass('active');
        $(this).addClass('active');
        if(target.length){
            var scrollTo = target.offset().top;
            $('body, html').animate({scrollTop: scrollTo-150 +'px' }, 800);
        }
    });

    $('.nav_destop a').click(function(e){
        e.preventDefault();
        var target = $($(this).attr('href'));
        // $('.nav_bar_form_mobile_detail a').removeClass('active');
        // $(this).addClass('active');
        if(target.length){
            var scrollTo = target.offset().top;
            $('body, html').animate({scrollTop: scrollTo-90 +'px' }, 800);
        }
    });
    $('.nav_bar_form_mobile_detail a').click(function(e){
        e.preventDefault();
        var target = $($(this).attr('href'));
        // $('.nav_bar_form_mobile_detail a').removeClass('active');
        // $(this).addClass('active');
        if(target.length){
            var scrollTo = target.offset().top;
            $('body, html').animate({scrollTop: scrollTo-60 +'px' }, 800);
        }
    });

    $(document).on('scroll',function(){
        if ($(this).scrollTop() >= $('#ikonic').offset().top-180 && $(this).scrollTop() <= $('#hubjs').offset().top-180 ) {
            $('.company_category_img a').removeClass('active');
            $('.company_ikonic').addClass('active');
        } else if ($(this).scrollTop() >= $('#hubjs').offset().top-180 && $(this).scrollTop() <= $('#hqpay').offset().top-180){
            $('.company_category_img a').removeClass('active');
            $('.company_hubjs').addClass('active');
        }else if ($(this).scrollTop() >= $('#hqpay').offset().top-300 && $(this).scrollTop() <= $('#hqplay').offset().top-180){
            $('.company_category_img a').removeClass('active');
            $('.company_hqpay').addClass('active');
        }else if ($(this).scrollTop() >= $('#hqplay').offset().top-180 && $(this).scrollTop() <= $('#globalent').offset().top-180){
            $('.company_category_img a').removeClass('active');
            $('.company_hqplay').addClass('active');
        }else if ($(this).scrollTop() >= $('#globalent').offset().top-180 && $(this).scrollTop() <= $('#xcrcorp').offset().top-180){
            $('.company_category_img a').removeClass('active');
            $('.company_globalent').addClass('active');
        }else if ($(this).scrollTop() >= $('#xcrcorp').offset().top-180){
            $('.company_category_img a').removeClass('active');
            $('.company_xcrcorp').addClass('active');
        }else {
            $('.company_category_img a').removeClass('active');
        }



        if ($(this).scrollTop() >= $('#company').offset().top-180  ) {
            $('.company_category').css('display','block')
        }else {
            $('.company_category').css('display','none')
        }
    });



</script>
</body>
</html>
