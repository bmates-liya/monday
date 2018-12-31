

$(document).ready(function(){
$("#ht-area").on("click", function (e) {
$(".s-here").toggleClass("active");
 $(this).removeClass("active");
});

});


$(document).ready(function(){
$("#raw").on("click", function (e) {
$("#slider-sec").toggleClass("active");
 $(this).removeClass("active");
});

$("#raw1").on("click", function (e) {
$("#slider-sec").toggleClass("active");
 $(this).removeClass("active");
});


$("#closse").on("click", function (e) {
$("#slider-sec").removeClass("active");
 $(this).removeClass("active");
});

});	





var hidWidth;
var scrollBarWidths = 40;

var widthOfList = function(){
  var itemsWidth = 0;
  $('.list li').each(function(){
    var itemWidth = $(this).outerWidth();
    itemsWidth+=itemWidth;
  });
  return itemsWidth;
};

var widthOfHidden = function(){
  return (($('.wrapper').outerWidth())-widthOfList()-getLeftPosi())-scrollBarWidths;
};

var getLeftPosi = function(){
  return $('.list').position().left;
};

var reAdjust = function(){
  if (($('.wrapper').outerWidth()) < widthOfList()) {
    $('.scroller-right').show();
  }
  else {
    $('.scroller-right').hide();
  }
  
  if (getLeftPosi()<0) {
    $('.scroller-left').show();
  }
  else {
    $('.item').animate({left:"-="+getLeftPosi()+"px"},'slow');
  	$('.scroller-left').hide();
  }
}

reAdjust();

$(window).on('resize',function(e){  
  	reAdjust();
});

$('.scroller-right').click(function() {
  
  $('.scroller-left').fadeIn('slow');
  $('.scroller-right').fadeOut('slow');
  
  $('.list').animate({left:"+="+widthOfHidden()+"px"},'slow',function(){

  });
});

$('.scroller-left').click(function() {
  
	$('.scroller-right').fadeIn('slow');
	$('.scroller-left').fadeOut('slow');
  
  	$('.list').animate({left:"-="+getLeftPosi()+"px"},'slow',function(){
  	
  	});
});    















// JavaScript Document$(document).ready(function () {
    //$(document).on("scroll", onScroll);
//    
//    smoothscroll
//    $('a[href^="#"]').on('click', function (e) {
//        e.preventDefault();
//        $(document).off("scroll");
//        
//        $('a').each(function () {
//            $(this).removeClass('active');
//        })
//        $(this).addClass('active');
//      
//        var target = this.hash,
//            menu = target;
//        $target = $(target);
//        $('html, body').stop().animate({
//            scrollTop': $target.offset().top+2
//        }, 500, 'swing', function () {
//            window.location.hash = target;
//            $(document).on("scroll", onScroll);
//        });
//    });
//});
//
//function onScroll(event){
//    var scrollPos = $(document).scrollTop();
//    $('.active-css a').each(function () {
//        var currLink = $(this);
//        var refElement = $(currLink.attr("id"));
//        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
//            $('.active-css ul li a').removeClass("active");
//            currLink.addClass("active");
//        }
//        else{
//            currLink.removeClass("active");
//        }
//    });
//}