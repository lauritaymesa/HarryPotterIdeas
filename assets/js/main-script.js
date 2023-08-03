(function($) {
    "use strict";

    //sub dropdown toggler

    if($('.main-menu li.menu-item-has-children ul').length) {
        $('.main-menu li.menu-item-has-children').append('<div class="dropdown-btn"><i class=" flaticon flaticon-arrow-down-sign-to-navigate"</i></div>');

     //dropdown button

     $('.main-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
        $(this).prev('ul').slideToggle(500);
     });
    
     //Disable dropdown parent link

     $('.main-menu .navigation li.menu-item-has-children > a, .hidden-bar .side-menu li.menu-item-has-children > a').on('click', function() {
        e.preventDefault();
       
     });
    

    }

  

    //Hover Sub menu 2 time

    $('.main-menu .navigation li > ul > li.menu-item-has-children, .main-menu .navigation > li.menu-item-has-children').on('mouseenter', function() {
        var $element = $(this);
        
        // Esperar 2 segundos antes de activar el hover
        $element.data('timeout', setTimeout(function() {
          $element.addClass('hovered');
        }, 250));
      }).on('mouseleave', function() {
        var $element = $(this);
        
        // Eliminar la clase 'hovered' y cancelar el timeout si el mouse sale del elemento antes de que pasen los 2 segundos
        clearTimeout($element.data('timeout'));
        $element.removeClass('hovered');
      });
    


    //mobile nave hide show

    if($('.mobile-menu').length) {
        
        var mobileMenuContent = $('#top-navigation .navigation').html();

        $('.mobile-menu .navigation').append(mobileMenuContent);

        $('.sticky-header .navigation').append(mobileMenuContent);

        $('.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
            
        });

    //Dropdown button
     $('.mobile-menu li.menu-item-has-children .dropdown-btn').on('click', function() {
        $(this).prev('ul').slideToggle('500');
     });  

    //Menu Toggle button

    $('.mobile-nav-toggler').on('click', function() {
        $('body').addClass('mobile-menu-visible');
    });

    //Menu Toggle button

    $('.mobile-menu .menu-backdrop, mobile-menu .close-btn').on('click', function() {
        $('body').removeClass('mobile-menu-visible');
    });


    }

})(jQuery);