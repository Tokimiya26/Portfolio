//スムーズスクロール
$(function(){
$('a[href^="#"]').click(function() {
var speed = 400; // スクロールスピード(ミリ秒)
var href= $(this).attr("href");
var target = $(href == "#" || href == "" ? 'html' : href);
var position = target.offset().top;
$('body,html').animate({scrollTop:position}, speed, 'swing');
return false;
});
});
//スムーズスクロール