$(function(){

  var $footer = $('.footer');
  if(window.innerHeight > $footer.offset().top + $footer.outerHeight()){

    $footer.attr({'style': 'position:fixed; top:'+ (window.innerHeight - $footer.outerHeight())+'px;'});
  }
});

// window.innerHeight（画面の高さ）、$footer.offset().top（footerまでの高さ）、$footer.outerHeight()（footer自身の高さ）