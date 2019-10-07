(function($){
  $(function(){

    $('.sidenav').sidenav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

// Or with jQuery

jQuery(document).ready(function($){
  jQuery('.modal').modal();
  slider('.four-products',4);
  slider('.recentlyAdded',3);
  jQuery('.wishlist-icon').click(function(){
    // $(this).html('<i class="material-icons dp48 ">favorite</i>')
    $(this).children('i').html('favorite');
  })
  jQuery(document).ready(function($){
    $('ul.tabs').tabs();
  });
  jQuery('.search-icon-home').click(function($){
      jQuery('.searchbar-home').addClass('elemnet-fade-in');
    });

  jQuery('.notifications-app').click(function($){
      jQuery('.top-sheet').addClass('elemnet-fade-in');
    });
  jQuery('.notifications-app2').click(function($){
      jQuery('.top-sheet2').addClass('elemnet-fade-in');
    });
  jQuery(document).ready(function($){
    $(".fade-out").click(function(){
      $('.searchbar-home').removeClass('elemnet-fade-in');
      $('.top-sheet').removeClass('elemnet-fade-in');
      $('.top-sheet2').removeClass('elemnet-fade-in');
    });
  });
});


  slider = function(selector,showS){
    var swiper = new Swiper(selector, {
      slidesPerView: showS,
      spaceBetween: 30,
      centeredSlides: false,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
       autoplay: {
      delay: 4000,
    },
     breakpoints: {
        480: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
      }
    });    
  }

       