
$(document).ready(function(){
  var clickType="click";
  if ("ontouchstart" in document.documentElement){
    clickType="touchend";
  };

  var mobile_show=false;

  /* gnb */
  $('.gnb .works a').bind(clickType,function(e){
    e.preventDefault();
    $('.sub_gnb, .works').toggleClass('active');

    if(870>$(window).width()){

      $('#footer').toggleClass('active');


      if($('#content').hasClass('cv_c')){
        if($('#content').hasClass('hide')){
            $('#content').removeClass('hide');
        }
        else{
            $('#content').addClass('hide');
        }
      }

      };
  });

  /* resize */
   $(window).resize(function(){
     $('body, .gnb_mobile').removeClass('active');

     if(870>$(window).width()){
     $('.sub_gnb, .works').removeClass('active');
     if($('.sub_gnb, .works').hasClass('active')){
       $('.cv_c').addClass('hide');

     }else{
       $('.cv_c').removeClass('hide');
     };
    };

     if($('.gnb_mobile .gnb .lists').show()){
       $('.gnb_mobile .gnb .lists').hide();
     };
   });

   if($('html').hasClass('sub') === false){
      $('html').addClass('show_video');
   }

   /* language tab */
  $('.lang .current').on('click',function(e){
      e.preventDefault();
  });

   var langUrl = $(location).attr('pathname');
   var langCheck = langUrl.indexOf('ko', 1, 3);
   var goOtherLang = $('.exlang-js');

   if(langCheck == 1){
       var chec = langUrl.replace('ko', 'en');
       goOtherLang.attr('href', chec);
   }else{
       var chec = langUrl.replace('en', 'ko');
       goOtherLang.attr('href', chec);
   }

});
