/* 위로가기 버튼 */
$(document).ready(function(){
    $("#top-btn").hide();
  
    // 스크롤 시(50px 초과) toTop 나타남  
    $(function () {
      $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#top-btn').fadeIn();
          } else {
              $('#top-btn').fadeOut();
          }
      });
      // Top_btn a태그 클릭 시 최상단으로(속도 100)
      $('#top-btn a').click(function () {
          $('body,html').animate({
              scrollTop: 0
          }, 300);
          return false;
      });
    });
  });


  /* 모바일 햄버거버튼 active */ 
  $(document).ready(function(){
 
    $('.menu_btn>a').on('click', function(){
        $('.header-content').fadeIn();
    });
    $('.close_btn > a').on('click', function(){
        $('.header-content').hide(); 
    });
 
});
 
