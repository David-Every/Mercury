"use strict";

// $(function(){
//     $('#carousel').slick({
//         arrows:true,
//         dots: true,
//         slidesToShow: 3,
//         slidesToScroll: 1
//     });
// });
$("#openMenu").click(function () {
  $(".menu").css('display', 'block');
});
$("#closeMenu").click(function () {
  $(".menu").css('display', 'none');
});