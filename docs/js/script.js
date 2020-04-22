$(document).ready(function () {
  //initialize swiper when document ready
  var mySwiper = new Swiper(".swiper-container", {
    // Optional parameters
    loop: true,
    effect: "fade",
    noSwiping: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
  });

  //responsive menu
  $("#toggle").click(function () {
    $(this).toggleClass("on");
    $("#menu").slideToggle();
  });
});
