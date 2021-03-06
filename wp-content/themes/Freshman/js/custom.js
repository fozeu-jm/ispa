/* JS Document */

/******************************
 
 [Table of Contents]
 
 1. Vars and Inits
 2. Set Header
 3. Init Hero Slider
 4. Init SVG
 5. Initialize Hamburger
 6. Initialize Testimonials Slider
 7. Initialize Parallax
 
 
 ******************************/

$(document).ready(function ()
{
    "use strict";

    /* 
     
     1. Vars and Inits
     
     */

    var hamb = $('.hamburger');
    var header = $('.header');
    var hambActive = false;
    var menuActive = false;
    var ctrl = new ScrollMagic.Controller();

    setHeader();

    $(window).on('resize', function ()
    {
        setHeader();
    });

    $(document).on('scroll', function ()
    {
        setHeader();
    });

    initHeroSlider();
    initServiceSlider();
    initSvg();
    initHamburger();
    initTestimonialsSlider();
    initParallax();
    initAccordions();
    initGallerySlider();

    /* 
     
     2. Set Header
     
     */

    function setHeader()
    {
        if (window.innerWidth < 992)
        {
            if ($(window).scrollTop() > 100)
            {
                header.addClass('scrolled');
            } else
            {
                header.removeClass('scrolled');
            }
        } else
        {
            if ($(window).scrollTop() > 100)
            {
                header.addClass('scrolled');
            } else
            {
                header.removeClass('scrolled');
            }
        }
        if (window.innerWidth > 991 && menuActive)
        {
            closeMenu();
        }
    }

    /* 
     
     3. Init Hero Slider
     
     */

    function initHeroSlider()
    {
        if ($('.hero_slider').length)
        {
            var owl = $('.hero_slider');

            owl.owlCarousel(
                    {
                        items: 1,
                        loop: true,
                        smartSpeed: 800,
                        autoplay: true,
                        nav: false,
                        dots: false
                    });

            // add animate.css class(es) to the elements to be animated
            function setAnimation(_elem, _InOut)
            {
                // Store all animationend event name in a string.
                // cf animate.css documentation
                var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

                _elem.each(function ()
                {
                    var $elem = $(this);
                    var $animationType = 'animated ' + $elem.data('animation-' + _InOut);

                    $elem.addClass($animationType).one(animationEndEvent, function ()
                    {
                        $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
                    });
                });
            }

            // Fired before current slide change
            owl.on('change.owl.carousel', function (event)
            {
                var $currentItem = $('.owl-item', owl).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-out]");
                setAnimation($elemsToanim, 'out');
            });

            // Fired after current slide has been changed
            owl.on('changed.owl.carousel', function (event)
            {
                var $currentItem = $('.owl-item', owl).eq(event.item.index);
                var $elemsToanim = $currentItem.find("[data-animation-in]");
                setAnimation($elemsToanim, 'in');
            })

            // Handle Custom Navigation
            if ($('.hero_slider_left').length)
            {
                var owlPrev = $('.hero_slider_left');
                owlPrev.on('click', function ()
                {
                    owl.trigger('prev.owl.carousel');
                });
            }

            if ($('.hero_slider_right').length)
            {
                var owlNext = $('.hero_slider_right');
                owlNext.on('click', function ()
                {
                    owl.trigger('next.owl.carousel');
                });
            }
        }
    }

    function initServiceSlider() {
        if ($('.service-slider').length)
        {
            var owl = $('.service-slider');

            owl.owlCarousel(
                    {
                        items: 3,
                        loop: true,
                        smartSpeed: 800,
                        autoplay: true,
                        margin: 30,
                        nav: false,
                        dots: false,
                        responsive: {
                            0: {
                                items: 1
                            },
                            480: {
                                items: 2
                            },
                            768: {
                                items: 2
                            },
                            992: {
                                items: 3
                            }
                        }
                    });
            // Handle Custom Navigation
            if ($('.hero_slider_left').length)
            {
                var owlPrev = $('.hero_slider_left');
                owlPrev.on('click', function ()
                {
                    owl.trigger('prev.owl.carousel');
                });
            }

            if ($('.hero_slider_right').length) {
                var owlNext = $('.hero_slider_right');
                owlNext.on('click', function ()
                {
                    owl.trigger('next.owl.carousel');
                });
            }
        }
    }


    function initGallerySlider() {
        if ($('.gallery-slider').length) {
            var owl2 = $('.gallery-slider');

            owl2.owlCarousel(
                    {
                        items: 1,
                        loop: false,
                        smartSpeed: 800,
                        autoplay: true,
                        margin: 30,
                        nav: false,
                        dots: false
                    });
            // Handle Custom Navigation
            if ($('.hero_slider_left').length)
            {
                var owlPrev = $('.hero_slider_left');
                owlPrev.on('click', function ()
                {
                    owl2.trigger('prev.owl.carousel');
                });
            }

            if ($('.hero_slider_right').length) {
                var owlNext = $('.hero_slider_right');
                owlNext.on('click', function ()
                {
                    owl2.trigger('next.owl.carousel');
                });
            }
        }
    }

    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function (item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function (element) {
                return element.find('img');
            }
        }

    });

    /* 
     
     6. Init Accordions
     
     */

    function initAccordions()
    {
        if ($('.accordion').length)
        {
            var accs = $('.accordion');

            accs.each(function ()
            {
                var acc = $(this);

                acc.on('click', function ()
                {
                    acc.toggleClass('active');

                    var panel = $(acc.next());
                    var panelH = panel.prop('scrollHeight') + "px";

                    if (panel.css('max-height') == "0px")
                    {
                        panel.css('max-height', panel.prop('scrollHeight') + "px");
                    } else
                    {
                        panel.css('max-height', "0px");

                    }
                });
            });
        }
    }

    /* 
     
     
     
     
     /* 
     
     4. Init SVG
     
     */

    function initSvg()
    {
        jQuery('img.svg').each(function ()
        {
            var $img = jQuery(this);
            var imgID = $img.attr('id');
            var imgClass = $img.attr('class');
            var imgURL = $img.attr('src');

            jQuery.get(imgURL, function (data)
            {
                // Get the SVG tag, ignore the rest
                var $svg = jQuery(data).find('svg');

                // Add replaced image's ID to the new SVG
                if (typeof imgID !== 'undefined') {
                    $svg = $svg.attr('id', imgID);
                }
                // Add replaced image's classes to the new SVG
                if (typeof imgClass !== 'undefined') {
                    $svg = $svg.attr('class', imgClass + ' replaced-svg');
                }

                // Remove any invalid XML tags as per http://validator.w3.org
                $svg = $svg.removeAttr('xmlns:a');

                // Replace image with new SVG
                $img.replaceWith($svg);
            }, 'xml');
        });
    }

    /* 
     
     5. Initialize Hamburger
     
     */

    function initHamburger()
    {
        if ($('.hamburger_container').length)
        {
            var hamb = $('.hamburger_container');

            hamb.on('click', function (event)
            {
                event.stopPropagation();

                if (!menuActive)
                {
                    openMenu();

                    $(document).one('click', function cls(e)
                    {
                        if ($(e.target).hasClass('menu_mm'))
                        {
                            $(document).one('click', cls);
                        } else
                        {
                            closeMenu();
                        }
                    });
                } else
                {
                    $('.menu_container').removeClass('active');
                    menuActive = false;
                }
            });
        }
    }

    function openMenu()
    {
        var fs = $('.menu_container');
        fs.addClass('active');
        hambActive = true;
        menuActive = true;
    }

    function closeMenu()
    {
        var fs = $('.menu_container');
        fs.removeClass('active');
        hambActive = false;
        menuActive = false;
    }

    /* 
     
     6. Initialize Testimonials Slider
     
     */

    function initTestimonialsSlider()
    {
        if ($('.testimonials_slider').length)
        {
            var owl1 = $('.testimonials_slider');

            owl1.owlCarousel(
                    {
                        items: 1,
                        loop: true,
                        nav: false,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        smartSpeed: 1000
                    });
        }
    }

    /* 
     
     7. Initialize Parallax
     
     */

    function initParallax()
    {
        // Add parallax effect to home slider
        if ($('.slider_prlx').length)
        {
            var homeBcg = $('.slider_prlx');

            var homeBcgScene = new ScrollMagic.Scene({
                triggerElement: homeBcg,
                triggerHook: 1,
                duration: "100%"
            })
                    .setTween(TweenMax.to(homeBcg, 1, {y: '15%', ease: Power0.easeNone}))
                    .addTo(ctrl);
        }

        // Add parallax effect to every element with class prlx
        // Add class prlx_parent to the parent of the element
        if ($('.prlx_parent').length && $('.prlx').length)
        {
            var elements = $('.prlx_parent');

            elements.each(function ()
            {
                var ele = this;
                var bcg = $(ele).find('.prlx');

                var slideParallaxScene = new ScrollMagic.Scene({
                    triggerElement: ele,
                    triggerHook: 1,
                    duration: "200%"
                })
                        .setTween(TweenMax.from(bcg, 1, {y: '-30%', ease: Power0.easeNone}))
                        .addTo(ctrl);
            });
        }
    }

    

    $('.sub-link').click(function () {
        if ($('.sub-link').hasClass('closer')) {
            $('.m_sublist').css('height', 'auto').css('display', 'block');
            $('.sublist').css('height', 'auto').css('display', 'block');
            $('.sub-link').removeClass('closer');
            $('.signer').removeClass('fa-chevron-down');
            $('.signer').addClass('fa-chevron-up');
        } else {
            $('.m_sublist').css('height', '0px').css('display', 'block');
            $('.sublist').css('height', 'auto').css('display', 'none');
            $('.sub-link').addClass('closer');
            $('.signer').removeClass('fa-chevron-up');
            $('.signer').addClass('fa-chevron-down');
        }
    });



});