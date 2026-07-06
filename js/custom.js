// Initialize AOS
AOS.init({
    // Optional settings
    offset: 120,
    duration: 600,
    easing: 'ease-in-out',
    delay: 100,    
});


jQuery(document).ready(function(){

    jQuery(window).on('scroll', function () {
          if (jQuery(this).scrollTop() > 50) {
              jQuery('#masthead').addClass('is-sticky');
          } else {
              jQuery('#masthead').removeClass('is-sticky');
          }
      });

      
    jQuery('#custom-menubar').click(function(){
      jQuery(this).toggleClass('open');
    });
      

    // Testimonial Slider
    jQuery('.testimonial-slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 4000,
      dots: true,
      arrows: true,     
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            fade: true
          }
        }
      ]
    });

    // Images Slider
    jQuery('.images-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,               
        centerMode: true,        
        centerPadding: '0px',
        // autoplay: true, 
        infinite: true, 
        dots: true,
        arrows: true,
        responsive: [
        {
          breakpoint: 575,
          settings: {          
            centerMode: true,
            centerPadding: '30px',
            slidesToShow: 1
          }
        }
      ]    
      });

    // Footer Menu
    if (jQuery(window).width() > 767) {
      // Desktop: Add hover behavior and active class
      jQuery('.menu-footer-nav > li.widget').each(function () {
            jQuery(this).hover(
                function () {
                    jQuery(this).addClass('active').siblings().removeClass('active');
                },
                function () {
                    jQuery(this).removeClass('active');
                }
            );
        }).filter(':first').addClass('active');
    } else {
        // Mobile: Toggle menu open/close and submenus
        jQuery('.menuIcon').click(function () {
            jQuery(this).toggleClass('active');
            jQuery('body').toggleClass('menu-open');
            jQuery('span.menu-arrow').removeClass('active');
            jQuery('.menu-footer-nav .submenu').slideUp(250);
        });

        // Add toggle arrow before each submenu
        jQuery('.menu-footer-nav li.widget > .submenu').before('<span class="menu-arrow"></span>');

        // Toggle submenus
        jQuery('span.menu-arrow').click(function () {
            const $parentLi = $(this).parent();

            // Close other open submenus
            $parentLi.siblings('li.widget').find('span.menu-arrow').removeClass('active');
            $parentLi.siblings('li.widget').find('.submenu').slideUp(250);

            // Toggle this submenu
            jQuery(this).toggleClass('active');
            $parentLi.find('.submenu').first().slideToggle(250);

            return false;
        });
    }


    
    jQuery('.team-section .card').each(function () {
        const $card = $(this);
        const $para = $card.find('p small');
        const fullText = $para.text().trim();
        const shortText = fullText.substring(0, 250) + '...';

        // Save full text to memory
        $para.data('fulltext', fullText);
        $para.data('shorttext', shortText);

        // Replace with short text
        $para.text(shortText);

        // Set initial toggle link
        const $link = $card.find('.text-link');
        $link.text('Read More');

        $link.on('click', function (e) {
          e.preventDefault();

          const isExpanded = $para.text() === $para.data('fulltext');

          if (isExpanded) {
            $para.text($para.data('shorttext'));
            $link.text('Read More');
            $card.removeClass('open');
          } else {
            $para.text($para.data('fulltext'));
            $link.text('Close');
            $card.addClass('open');
          }
        });
      });


  });
