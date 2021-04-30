 jQuery(document).ready(function(){

jQuery('.search-bar > a').on('click', function() {
   jQuery('.search-area').toggle(function() {
      jQuery(this).animate({             
      }, 500);
   });
}); 

jQuery('.closebtn').on('click', function() {
   jQuery('.search-area').toggle(function() {
      jQuery(this).animate({              
      }, 500);
   });
});

});

 (function ($) {
    $(document).ready(function ($) {
        $('input[data-input-type]').on('input change', function () {
            var val = $(this).val();
            $(this).prev('.cs-range-value').html(val);
            $(this).val(val);
        });
    })
})(jQuery);


