var slider = $('.slider');

slider.slick({
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  pauseOnHover: true,
});

$(window).scroll(function() {
  var scrollTop = $(this).scrollTop();
  $('.parallax-image').css('transform', 'translateY(' + (scrollTop / 2) + 'px)');
});
 $('.rotate-image').click(function() {
  $(this).toggleClass('clicked');
});