/* 위로가기 버튼 */
$(document).ready(function(){
    $("#toTop").hide();
  
    // 스크롤 시(50px 초과) toTop 나타남  
    $(function () {
      $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#toTop').fadeIn();
          } else {
              $('#toTop').fadeOut();
          }
      });
      // toTop a태그 클릭 시 최상단으로(속도 100)
      $('#toTop a').click(function () {
          $('body,html').animate({
              scrollTop: 0
          }, 100);
          return false;
      });
    });
  });