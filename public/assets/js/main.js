/*
::
:: Theme Name: GateData - IT Solutions & Technology HTML5 Template
:: Email: Nourramadan144@gmail.com
:: Author URI: https://themeforest.net/user/ar-coder
:: Author: ar-coder
:: Version: 1.0
:: 
*/

/*
    01 :: Reset Page Css
    02 :: Style Page Css
        01-  :: Loading
        02-  :: Navbar
            01- :: Top Navbar
            02- :: Navbar
                01- :: Navbar 1
                02- :: Navbar 2
                03- :: Navbar 3
        03-  :: Search Box
        04-  :: Menu Box
        05-  :: login Box Modal
        06-  :: Regestar Box Modal
        07-  :: Header
            01- :: Header 1
            02- :: Header 2
            03- :: Header 3
        08-  :: Features
            01- :: Features 1
            02- :: Features 2
            03- :: Features 3
        09-  :: About Us
            01- :: About Us 1
            02- :: About Us 2
            03- :: About Us 3
        10-  :: Services
            01- :: Services 1
            02- :: Services 2
            03- :: Services 3
        11-  :: Provide
            01- :: Provide 1
            02- :: Provide 2
            03- :: Provide 3
        12-  :: Pricing
        13-  :: Work
            01- :: Work 1
            02- :: Work 2
            03- :: Work 3
        14-  :: Video Presentation
        15-  :: Call US
        16-  :: Why Choose Us
        17-  :: Quote
        18-  :: Statistic
        19-  :: Team
            01- :: Team 1
            02- :: Team 2
        20-  :: Testimonial
        21-  :: Blog
        22-  :: Newsletter
        23-  :: Footer
        24-  :: Scroll UP
*/

(function () {
    'use strict';
    
    // :: Loading
    $(window).on('load', function () {
        $('.loading').fadeOut();
    });
    
    // :: Scroll Smooth To Go Section
    $('.move-section').on('click', function (e) {
        e.preventDefault();
        var anchorLink = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchorLink.attr('href')).offset().top + 1
        }, 1000);
    });
    
    // :: Add Class Active For ('.nav-bar')
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > $('.all-navbar').height() + 30) {
            $('.nav-bar, .nav-top').addClass('active');
        } else {
            $('.nav-bar, .nav-top').removeClass('active');
        }
    });
    
    // :: Varables Navbar
    var headerBar = $('.nav-bar'),
        $navbarMenu = $('#open-nav-bar-menu'),
        $menuLink = $('.open-nav-bar'),
        $menuTriggerLink = $('.has-menu > a');

    // :: Add Class Active For $menuLink And $navbarMenu
    $menuLink.on('click', function (e) {
        e.preventDefault();
        $menuLink.toggleClass('active');
        $navbarMenu.toggleClass('active');
    });

    // :: Add Class Active For $menuTriggerLink
    $menuTriggerLink.on('click', function (e) {
        e.preventDefault();
        var $this = $(this);
        $this.toggleClass('active').next('ul').toggleClass('active');
    });
    
    // :: Add Class Active To Search Box
    $('.search-icon.open').on('click', function () {
        $('.search-box').fadeIn();
    });
    $('.search-box, .search-box-icon.exit').on('click', function () {
        $('.search-box').fadeOut();
    });
    $('.search-box form').on('click', function (e) {
        e.stopPropagation();
    });
    
    // :: Open And Close Menu
    $('.menu-icon.open').on('click', function () {
        $('.menu-box').fadeIn().addClass('active');
    });
    $('.menu-box').on('click', function () {
        $(this).fadeOut().removeClass('active');
    });
    $('.menu-box-icon.exit').on('click', function () {
        $('.menu-box').fadeOut().removeClass('active');
    });
    $('.menu-box .inner-menu').on('click', function (e) {
        e.stopPropagation();
    });
    
    $('.header, .header .table-cell').height($(window).height() + $('.all-navbar').height() + 100);
    
    // :: Animation OWL Header
    $('.header-carousel').on('translate.owl.carousel', function () {
        $('.header-carousel .banner').removeClass('animated fadeInUp').css('opacity', '0');
        $('.header .banner .top-headline').removeClass('animated fadeInUp').css('opacity', '0');
        $('.header .banner .handline').removeClass('animated fadeInUp').css('opacity', '0');
        $('.header .banner .about-website').removeClass('animated fadeInUp').css('opacity', '0');
        $('.header .banner .btn-1').removeClass('animated fadeInUp').css('opacity', '0');
    });
    $('.header-carousel').on('translated.owl.carousel', function () {
        $('.header-carousel .banner').removeClass('animated fadeIn').css('opacity', '1');
        $('.header .banner .top-headline').addClass('animated fadeInUp').css('opacity', '1');
        $('.header .banner .handline').addClass('animated fadeInUp').css('opacity', '1');
        $('.header .banner .about-website').addClass('animated fadeInUp').css('opacity', '1');
        $('.header .banner .btn-1').addClass('animated fadeInUp').css('opacity', '1');
    });
    
    // :: OWL Carousel Js Header Hero
    $('.header-carousel').owlCarousel({
        loop: true,
        nav: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ['<i class="icon-left-arrow"></i>', '<i class="icon-right-arrow"></i>'],
        dotsClass: ['container','owl-dots'],
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });
    
    // :: OWL Carousel Js Services Item
    $('.services-carousel').owlCarousel({
        loop: true,
        margin: 30,
        smartSpeed: 1000,
        autoplay: 2000,
        nav: false,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });
    
    // :: OWL Carousel Js Work
    $('.work-carousel').owlCarousel({
        loop: true,
        margin: 30,
        smartSpeed: 1000,
        autoplay: 2000,
        nav: false,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            991: {
                items: 3
            }
        }
    });
    
    // :: OWL Carousel Js Testimonial
    $('.testimonial-carousel').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 10,
        center: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });
    $('.testimonial-carousel-2').owlCarousel({
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 0,
        center: true,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            991: {
                items: 1
            }
        }
    });
    
    // :: NiceSelect Plugin
    $('select').niceSelect();
    
    // :: Counter Up Js
    $('.counter').counterUp({
        delay: 20,
        time: 1000
    });
    
    // :: Magnific Popup Plugin
    $('.work-item .hover-box .work-icon li a.popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    
    // :: Add Class Active To Work
    $('.work-list .list-name-work li').on('click', function () {
        $(this).addClass('active').siblings().removeClass('active');
    });
    
    // :: OWL Carousel Js Sponsors Carousel
    $('.sponsors-box').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        smartSpeed: 1000,
        margin: 30,
        autoplayHoverPause: true,
        mouseDrag: true,
        touchDrag: true,
        responsive: {
            0: {
                items: 2
            },
            575: {
                items: 3
            },
            768: {
                items: 4
            },
            991: {
                items: 6
            }
        }
    });
    
    // :: Add Class Active On Go To Header
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 400) {
            $('.scroll-up').addClass('active');
        } else {
            $('.scroll-up').removeClass('active');
        }
    });
    
    // :: Skills Data Value
    $(window).on('scroll', function () {
        $('.skills .skill-box .skill-line .line').each(function () {
            var toQuestionsAndSkills =
                $(this).offset().top + $(this).outerHeight();
            var goToBottom =
                $(window).scrollTop() + $(window).height();
            var widthValue = $(this).attr('data-value');
            if (goToBottom > toQuestionsAndSkills) {
                $(this).css({
                    width: widthValue,
                    transition: 'all 2s ease'
                });
            }
        });
    });
        
}());

// :: Setup mouseenter On Services Item
$(document).ready(function () {
    $('.services-item, .work-item, .services-item-2 .services-item-text-box, .item-features-provide-list, .awards-item .img-box, .item-careers').on('mouseenter', function (e) {
        x = e.pageX - $(this).offset().left,
            y = e.pageY - $(this).offset().top;
        $(this).find('span').css({
            top: y,
            left: x
        });
    });
    $('.services-item, .work-item, .services-item-2 .services-item-text-box, .item-features-provide-list, .awards-item .img-box, .item-careers').on('mouseout', function (e) {
        x = e.pageX - $(this).offset().left,
            y = e.pageY - $(this).offset().top;
        $(this).find('span').css({
            top: y,
            left: x
        });
    });
});