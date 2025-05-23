
  $(document).ready(function() {
  if ($('.scroll-top').length) {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 10) {
        $('.scroll-top').fadeIn();
      } else {
        $('.scroll-top').fadeOut();
      }
    });

    $('.scroll-top').click(function() {
      $('html, body').animate({ scrollTop: 0 }, 600);
      return false;
    });
  }




  // header display 

  $(window).scroll(function(){
      if ($(this).scrollTop() > 50) {
        $('.header-section').addClass('scroll-bg');
      } else {
        $('.header-section').removeClass('scroll-bg');
    }
    });
  


  
  //   counter in home page
  let counterStarted = false;

  $(window).on('scroll', function () {
      const sectionTop = $('.sec-section').offset().top; // Replace with your actual section ID/class
      const scrollPos = $(window).scrollTop() + $(window).height();

      if (!counterStarted && scrollPos > sectionTop) {
          counterStarted = true; // Prevents it from running again
          $('.counter').each(function () {
              $(this).prop('Counter', 0).animate({
                  Counter: $(this).text()
              }, {
                  duration: 8000,
                  easing: 'swing',
                  step: function (now) {
                      $(this).text(Math.ceil(now));
                  }
              });
          });
      }
  });
  // slider in home page
      $('.banner-slider').slick({
        dots: true,
        arrows: false,
        infinite: true,
        slidesToShow: 1,slidesToScroll: 1,
        autoplay: true,               // Enable auto-slide
        autoplaySpeed: 3000 
        
      });
});
// slider in team page

    $('.teamli').slick({
      dots: true,
      arrows: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,               // Enable auto-slide
      autoplaySpeed: 3000 ,
      responsive: [
        {
          breakpoint: 768, // below 768px will activate
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 9999, // above 768px will deactivate
          settings: "unslick"
        }
      ]
    });


   $('#sortSelect').on('change', function () {
        var sortBy = $(this).val();
        var $list = $('.teamli');
        var $items = $list.children('li').get();

        $items.sort(function (a, b) {
            var textA, textB;

            if (sortBy === 'name') {
                textA = $(a).find('h3').text().trim().toUpperCase();
                textB = $(b).find('h3').text().trim().toUpperCase();
            } else if (sortBy === 'position') {
                textA = $(a).find('h6').text().trim().toUpperCase();
                textB = $(b).find('h6').text().trim().toUpperCase();
            } else {
                return 0;
            }

            return textA.localeCompare(textB);
        });

        $.each($items, function (i, li) {
            $list.append(li);
        });
    });
  
