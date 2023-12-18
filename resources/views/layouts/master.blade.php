<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HQ Group</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <!--    bootstrap-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/frontend/lib/bootstrap/bootstrap.min.css">

    <!--    css của mình-->
    <link rel="stylesheet" href="./assets/frontend/css/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

{{--    web--}}
    <!--    swiper-->
    <link rel="shortcut icon" href="./assets/frontend/img/logo.png">
    <link rel="stylesheet" href="./assets/frontend/lib/swiper/swiper.min.css">
</head>
<body>
<div class="scroll_top">
    <img src="./assets/frontend/img/scroll.png" alt="">
</div>

@include('layouts.includes.header')
@yield('content')

@include('layouts.includes.footer')

<script src="./assets/frontend/lib/jquery.min.js"></script>
<script src="./assets/frontend/lib/bootstrap/bootstrap.min.js"></script>
<script src="./assets/frontend/js/action.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./assets/frontend/lib/swiper/swiper.min.js"></script>

<script src="/assets/frontend/js/swiper.js"></script>
<script src="/assets/frontend/lib/axios/axios.min.js"></script>
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
            speed: 300,
            freeMode: true,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //

            loop: false,
            centeredSlides: false,
            slidesPerView: 6,

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
                    freeMode: true,
                },


                480: {
                    freeMode: true,
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
            slidesPerGroup: 3,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,

            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 300,
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
                    freeMode: true,
                    slidesPerView: 3,
                },


                480: {
                    freeMode: true,
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

            slidesPerGroup: 3,
            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,

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
                    freeMode: true,
                    slidesPerView: 3,
                },


                480: {
                    freeMode: true,
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

            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,

            loop: false,
            centeredSlides: false,
            slidesPerView: 5,
            speed: 200,
            spaceBetween: 14,
            slidesPerGroup: 3,

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
                    freeMode: true,
                },


                480: {
                    slidesPerView: 2,
                    freeMode: true,

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

            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,

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
            slidesPerGroup: 3,
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
                    freeMode: true,
                },


                480: {
                    slidesPerView: 2,
                    freeMode: true,

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

            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,

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
            slidesPerGroup: 3,
            observer: true,
            observeParents: true,
            breakpoints: {

                992: {
                    slidesPerView: 3,
                    freeMode: true,
                },


                480: {
                    slidesPerView: 2,
                    freeMode: true,

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

            // preloadImages: false,
            updateOnImagesReady: true,
            // lazyLoading: false,
            watchSlidesVisibility: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingOnTransitionStart: false,

            // watchSlidesProgress: true,
            //
            lazy: true,

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
            slidesPerGroup: 3,
            observer: true,
            observeParents: true,
            breakpoints: {

                992: {
                    slidesPerView: 3,
                    freeMode: true,
                },


                480: {
                    slidesPerView: 2,
                    freeMode: true,

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
    $('.nav_bar_form_mobile_detail .dropdown a').click(function(e){
        e.preventDefault();
        var target = $($(this).attr('href'));
        $('.company_category_img a').removeClass('active');
        $(this).addClass('active');
        if(target.length){
            var scrollTo = target.offset().top;
            $('body, html').animate({scrollTop: scrollTo-150 +'px' }, 800);
        }
    });

    if($(window).width() < 992){
      $('.language').click(function(e){
        e.preventDefault();
          e.stopPropagation();

          $('.company_desktop').toggle();

      });
        $('body').click( function() {
            $('.company_desktop').fadeOut(100);
        });

    }

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
