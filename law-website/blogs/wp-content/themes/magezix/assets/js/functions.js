console.log('functions.js loaded ✅');

jQuery(document).ready(function($) {
    $('#sort-select').on('change', function() {
        var sortValue = $(this).val();

        $.ajax({
            type: 'POST',
            url: blog_sort_obj.ajax_url,
            data: {
                action: 'blog_sort_ajax',
                sort: sortValue
            },
            success: function(response) {
                $('#blog-posts-container').html(response);
            },
            error: function() {
                alert('Failed to load sorted posts.');
            }
        });
    });

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


  $(window).scroll(function(){
      if ($(this).scrollTop() > 50) {
        $('.header-section').addClass('scroll-bg');
      } else {
        $('.header-section').removeClass('scroll-bg');
    }
    });
 


 

 });

