/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
          
        // Mobile Hamburger Menu
        $('.hamburger-menu').on('click', function() {
            console.log('hey');
            $(this).toggleClass('open');
            $('.bar').toggleClass('animate');
            $('.lahav-nav').toggleClass('active'); 
        });
          
        function global_functions() {
            
        // Scroll Back Up
        $(window).on('scroll', function() {
            scrollPosition = $(this).scrollTop();
            if (scrollPosition >= 200) {
                $('.banner').addClass('smaller');
            }
            else {
                $('.banner').removeClass('smaller');
            }
        });

        setTimeout(function() { 
            $('.scroll-down').addClass('active');
        }, 1200);            
            
        $('.scroll-down').click(function() {
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top - 50
            }, 500);
            return false; 
        });       
            
        }
          
        global_functions(); 
          
        function fadein() {
            // Scroll Reveal
            window.sr = ScrollReveal({
                //reset: true,
                opacity: 0,
                scale: 1,
                // duration: 1000,
                distance: '100px',
                mobile: false,
                // easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
                origin: 'bottom',
                viewFactor: 0.6
            });
            // sr.reveal('.fadein');
            sr.reveal('.fader', {
                duration: 1000, 
                easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)',
                viewFactor: 0.6
            }, 100);
            sr.reveal('.fadein', {
                duration: 1000,
                reset: false,
                viewFactor: 0.6
            });
            
            $('.home-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                prevArrow: "<div class='prev slider-arrow full-width'><i class='ion-ios-arrow-back'></i></div>",
                nextArrow: "<div class='next slider-arrow full-width'><i class='ion-ios-arrow-forward'></i></div>",
                speed: 800,
                adaptiveHeight: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                draggable: true,
                autoplay: true,
                autoplaySpeed: 5000,
                pauseOnHover: false,
                dots: false,
                infinite : true
            });
        }
          
        global_functions(); 
        fadein();          
        // End Global
          
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
          
            $('.home-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false, 
                //prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-back'></i></div>",
                //nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-forward'></i></div>",
                speed: 800,
                adaptiveHeight: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                draggable: true,
                autoplay: true,
                autoplaySpeed: 3000,
                pauseOnHover: false,
                dots: false,
                infinite : true
            });          
          
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // App  page, note the change from about-us to about_us.
    'app': {
      init: function() {
        // JavaScript to be fired on the app page
          
            $('.app-link.ipad-mod').mouseover(function() {
                $('.app-link.ipad-mod').not(this).removeClass('active');
                $(this).addClass('active');
                var this_module = $(this).data('id');
                // $('.image-holder.ipad-mod').removeClass('active');
                $('.image-holder.ipad-mod').hide();
                $('#'+this_module).show();
                //setTimeout(function() { 
                //    $('#'+this_module).addClass('active');
               // }, 300);
                
                $('html, body').animate({
                    scrollTop: $( $.attr(this, 'href') ).offset().top -100
                }, 500);
                return false;  
                
            });

            $('.app-link.desktop-mod').mouseover(function() {
                $('.app-link.desktop-mod').not(this).removeClass('active');
                $('.app-link.desktop-mod').not(this).addClass('not-this');
                $(this).addClass('active');
                var this_module = $(this).data('id');
                //$('.image-holder.desktop-mod').removeClass('active');
                // $('.image-holder.desktop-mod').hide();
                // $('#'+this_module).show();
                //setTimeout(function() { 
                  //  $('#'+this_module).addClass('active');
                //}, 300);
            });              
              
            /*
            $('.app-link.desktop-mod').mouseover(function() {
                $('.app-link.desktop-mod').not(this).removeClass('active');
                $(this).addClass('active');
                var this_module = $(this).data('id');
                //$('.image-holder.desktop-mod').removeClass('active');
                $('.image-holder.desktop-mod').hide();
                $('#'+this_module).show();
                //setTimeout(function() { 
                  //  $('#'+this_module).addClass('active');
                //}, 300);
            });
            */
              
            $('.interface-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                arrows: true,
                prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-back'></i></div>",
                nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-forward'></i></div>",
                speed: 800,
                adaptiveHeight: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                draggable: true,
                dots: true,
                infinite : false,
                  responsive: [
                    {
                      breakpoint: 1025,
                      settings: {
                        draggable: true 
                      }
                    }
                  ]
            });          
          
      }
    },
    'curriculum': {
      init: function() {
        // JavaScript to be fired on the curriculum page
          
          
            $('.first-row-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                arrows: true,
                prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-back'></i></div>",
                nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-forward'></i></div>",
                speed: 800,
                adaptiveHeight: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                draggable: true,
                infinite : false,
                  responsive: [
                    {
                      breakpoint: 1025,
                      settings: {
                        draggable: true 
                      }
                    }
                  ]
            });
              
            $('.slider-1').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                arrows: true,
                prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-back'></i></div>",
                nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-forward'></i></div>",
                speed: 800,
                adaptiveHeight: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                draggable: true,
                infinite : false,
                  responsive: [
                    {
                      breakpoint: 1025,
                      settings: {
                        draggable: true 
                      }
                    }
                  ]
            });
              
            $('.slider-2').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                arrows: true,
                prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-back'></i></div>",
                nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-forward'></i></div>",
                speed: 800,
                adaptiveHeight: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                draggable: true,
                infinite : false,
                  responsive: [
                    {
                      breakpoint: 1025,
                      settings: {
                        draggable: true 
                      }
                    }
                  ]
            });
              
            $('.slider-3').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: false,
                arrows: true,
                prevArrow: "<div class='prev slider-arrow'><i class='ion-ios-arrow-back'></i></div>",
                nextArrow: "<div class='next slider-arrow'><i class='ion-ios-arrow-forward'></i></div>",
                speed: 800,
                adaptiveHeight: true,
                cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
                draggable: true,
                infinite : false,
                  responsive: [
                    {
                      breakpoint: 1025,
                      settings: {
                        draggable: true 
                      }
                    }
                  ]
            });          
          
          
          
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.