//target tooltip image
;(function($) {
  
  var
    winWidth,
    toolTip;
  "use strict";

  $(function(){
    toolTip();
  })
 
  toolTip = function() {
    winWidth = $(window).width();
    if(winWidth > 767) {
      $('.content_box').tooltipster({
           functionInit: function(){
          		return $(this).find('.mouse_box').html();
      		},
          animation: 'grow',
          contentAsHTML : 'true',
          position: 'right',
          maxWidth: '350',
          theme: 'tooltipster-light',
          multiple: true
    	});
    }
  }
})(jQuery);