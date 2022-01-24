var $ = jQuery.noConflict();

// Open Navigation Menu by click on mobile
(function($){
    $('.dropdown-menu .dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
        });

        return false;
    });
})(jQuery);

// Open background search panel on mobile
$('#mobile_site_search_container').on('show.bs.dropdown', function () {
    $('.mobile-search-overlay').addClass('active');
    $('body').addClass('no-scroll');
});

// Close background search panel on mobile
$('#mobile_site_search_container').on('hide.bs.dropdown', function () {
    $('.mobile-search-overlay').removeClass('active');
    $('body').removeClass('no-scroll');
});

// Toggle up/down arrows on mobile menu
$('.mobile_nav_item_toggler').on('click', function(event) {
    var target_element = event.target;
    var target_element_node = event.target.nodeName;
    if(target_element_node == 'SPAN') {
        var top_level_icons = $('.mobile_nav_item_toggler_icon.level-0').not($(target_element));
        $(target_element).toggleClass("fa-chevron-down fa-chevron-up");
    } else if(target_element_node == 'DIV') {
        var top_level_icons = $('.mobile_nav_item_toggler_icon.level-0').not($(target_element.querySelector('span')));
        $(target_element.querySelector('span')).toggleClass("fa-chevron-down fa-chevron-up");
    }
    if(top_level_icons.hasClass('fa-chevron-up')) {
        top_level_icons.removeClass('fa-chevron-up');
        top_level_icons.addClass('fa-chevron-down');
    }
});

$(document).ready(function(){
    // Change hamburger menu icon
    $('#ChangeToggle').click(function() {
        $('#navbar-hamburger').toggleClass('d-none');
        if($('#navbar-close').hasClass('d-none')) {
            $('#navbar-close').removeClass('d-none');
        } else {
            $('#navbar-close').addClass('d-none');
        }
    });

    // Site Search Validation
    $('.dropdown-menu.dropdown-menu-right').on('click', function(e) {
        e.stopPropagation();
    });
    $('.site-search-form-nav').submit(function(e){
        $('.site-search-err-nav').addClass('d-none');
        if($('.site-search-input-nav').val() == '') {
            e.preventDefault();
            $('.site-search-err-nav').removeClass('d-none');
        }
    });
    $('.site-search-form').submit(function(e){
        $('.site-search-err').addClass('d-none');
        if($('.site-search-input').val() == '') {
            e.preventDefault();
            $('.site-search-err').removeClass('d-none');
        }
    });


    $('.nav-item-desktop.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).fadeIn();
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).fadeOut();
    });

    // Add smooth scrolling to all links
    $(".a-z-content a").on('click', function(event) {
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash
            var hash = this.hash;
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    // Spotlights - Add shadow on hover
    $('.spotlights .card, .l2-spotlights .card, .news-events-social-feeds .media').hover(function(){
        $(this).addClass('shadow');
    }, function(){
        $(this).removeClass('shadow');
    });

    //Scroll to top
    var $window = $(window);
    var $buttonTop = $('.scroll-top')
    var scrollTimer;
    $('.scroll-top').on('click', function () {
        $('html, body').animate({
            scrollTop: 0,
        }, 400);
    });

    $window.on('scroll', function () {
        clearTimeout(scrollTimer);
        scrollTimer = setTimeout(function() {
            if ($window.scrollTop() > 100) {
                $buttonTop.addClass('scroll-top-visible');
            } else {
                $buttonTop.removeClass('scroll-top-visible');
            }
        }, 250);
    });

    $('.hero-owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: [
            '<i class="fas fa-angle-left hero-owl-prev-nav"></i>',
            '<i class="fas fa-angle-right hero-owl-next-nav"></i>'
            //'<img src="/wp-content/themes/wp-ua92/images/Home-Page-Banner-Arrow-Left.png" />',
            //'<img src="/wp-content/themes/wp-ua92/images/Home-Page-Banner-Arrow-Right.png" />'
        ],
        autoplay: false,
        autoplayHoverPause: true

    });

    $('.full-width-video-carousel').owlCarousel({
        items: 1,
        loop: true,
        video: true,
        lazyLoad: false,
        merge: true,
        center: true,
        //videoWidth: 1140,
        //videoHeight: 641,
        nav: false,
        navText: [
            '<i class="fas fa-angle-left hero-owl-prev-nav"></i>',
            '<i class="fas fa-angle-right hero-owl-next-nav"></i>'
            //'<img src="/wp-content/themes/wp-ua92/images/Home-Page-Banner-Arrow-Left.png" />',
            //'<img src="/wp-content/themes/wp-ua92/images/Home-Page-Banner-Arrow-Right.png" />'
        ]
    })

    // Navigation accessibility
    var menuItems = document.querySelectorAll('#menu-main-nav li.dropdown');
    Array.prototype.forEach.call(menuItems, function (el, i) {
        var activatingA = el.querySelector('a');
        var customClass = $(activatingA).attr('id');

        var btn = '<button class="btn-'+customClass+'"><span><span class="visuallyhidden">show submenu for “' + activatingA.text + '”</span></span></button>';
        activatingA.insertAdjacentHTML('afterend', btn);

        el.querySelector('button').addEventListener("click", function (event) {
            var thisElement = (this.className);
            //console.log($('.'+thisElement).next().next());
            //if (this.parentNode.className == "dropdown") {

            var findclassname = "dropdown open";

            if(this.parentNode.className.indexOf('dropdown') != -1 &&
                this.parentNode.className.indexOf('open') != -1) {

                this.parentNode.className = "dropdown";
                this.parentNode.querySelector('a').setAttribute('aria-expanded', "true");
                this.parentNode.querySelector('button').setAttribute('aria-expanded', "true");
                //this.parentNode.querySelector('ul').setAttribute('class', "dropdown-menu open");
                this.parentNode.querySelector('ul').setAttribute('aria-expanded', "true");
                //$('.dropdown ul.dropdown-menu').hide();
                $('.' + thisElement).next().next().hide();

            } else if (this.parentNode.className.indexOf('dropdown') != -1) {
                this.parentNode.className = "dropdown  open";
                this.parentNode.querySelector('a').setAttribute('aria-expanded', "true");
                this.parentNode.querySelector('button').setAttribute('aria-expanded', "true");
                //this.parentNode.querySelector('ul').setAttribute('class', "dropdown-menu open");
                this.parentNode.querySelector('ul').setAttribute('aria-expanded', "true");
                //$('.dropdown ul.dropdown-menu').show();
                $('.' + thisElement).next().next().show();

            } else {
                this.parentNode.className = "dropdown";
                this.parentNode.querySelector('a').setAttribute('aria-expanded', "false");
                this.parentNode.querySelector('button').setAttribute('aria-expanded', "false");
                //this.parentNode.querySelector('ul').setAttribute('class', "dropdown-menu");
                this.parentNode.querySelector('ul').setAttribute('aria-expanded', "false");
                //$('.dropdown ul.dropdown-menu').hide();
                $('.' + thisElement).next().next().hide();

            }
            event.preventDefault();
        });
    });


    var singleMenuItems = document.querySelectorAll('#menu-main-nav li');
    Array.prototype.forEach.call(singleMenuItems, function (el, i) {

        el.querySelector('a').addEventListener("focus", function (event) {

            //if (this.parentNode.className == "dropdown") {
            if (this.className.indexOf('dropdown-toggle') == -1 &&
                this.className.indexOf('dropdown-item') == -1) {
                $('.dropdown ul.dropdown-menu').hide();

                var listItems = $("#menu-main-nav li");
                listItems.each(function (i) {
                    //console.log(idx);
                    var classname = $(this).attr('class');
                    var attributeId = $(this).attr('id');
                    if (classname.indexOf('open') != -1 ) {

                        $('#'+attributeId).removeClass("open");
                    }

                });
            }

            event.preventDefault();
        });
    });

    var searchMenu = document.querySelectorAll('.header__navbar div.header__menu-global-search-desktop');
    Array.prototype.forEach.call(searchMenu, function (el, i) {
        //console.log(el);
        el.querySelector('button').addEventListener("focus", function (event) {

            $('.dropdown ul.dropdown-menu').hide();

            var listItems = $("#menu-main-nav li");
            listItems.each(function (i) {
                //console.log(idx);
                var classname = $(this).attr('class');
                var attributeId = $(this).attr('id');
                if (classname.indexOf('open') != -1) {

                    $('#' + attributeId).removeClass("open");
                }

            });

            event.preventDefault();
        });
    });

});

$(window).on('load', function(){
    // Remove Table inline style attribute
    $('th,tr,td').css('font-family','');
});

$(".open-wechatqr").on("click", function () {
    $(".wechatqr-popup-overlay, .wechatqr-popup-content").addClass("active");
});

$(".close-wechatqr, .wechatqr-popup").on("click", function () {
    $(".wechatqr-popup-overlay, .wechatqr-popup-content").removeClass("active");
});

$(document).keydown(function (e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
        $(".wechatqr-popup-overlay, .wechatqr-popup-content").removeClass("active");
    }
});

$(".event-select-widget").on('change', function(){
    var param_value = $(this).val();
    var param_name = $(this).prop('name');
    var page_url = $(this).data('page-url');
    console.log(page_url + '?' + param_name + '=' + param_value);
    window.location.href = page_url + '?' + param_name + '=' + param_value;
});
/***
 el.querySelector('button').addEventListener("click", function (event) {
 */