$(".ttr-toggle-sidebar").on("click", function() {
  if($("body").hasClass("ttr-opened-sidebar")){
    $("body").removeClass("ttr-opened-sidebar"), $("body").removeClass("ttr-body-fixed");
  }else{
    $(window).width() < 760 && $("body").addClass("ttr-body-fixed"), $("body").addClass("ttr-opened-sidebar");
  }
});


$(".ttr-sidebar-nav li.show > ul").slideDown(200);
$(".ttr-sidebar-nav a").on("click", function(e) {
  var a = $(this);
  $(this).next().is("ul") ? (e.preventDefault(), a.parent().hasClass("show") ? (a.parent().removeClass("show"), a.next().slideUp(200)) : (a.parent().parent().find(".show ul").slideUp(200), a.parent().parent().find("li").removeClass("show"), a.parent().toggleClass("show"), a.next().slideToggle(200))) : (a.parent().parent().find(".show ul").slideUp(200), a.parent().parent().find("li").removeClass("show"), a.parent().addClass("show"))
});


/* Wave effect not working * */

var waveEffect = function(e, a) {
  var s = ".ttr-wave-effect",
    n = e.outerWidth(),
    t = a.offsetX,
    i = a.offsetY;
  e.prepend('<span class="ttr-wave-effect"></span>'), $(s).css({
    top: i,
    left: t
  }).animate({
    opacity: "0",
    width: 2 * n,
    height: 2 * n
  }, 500, function() {
    e.find(s).remove()
  });
};

var materialButton = function() {
  $(".ttr-material-button").on("click", function(e) {
    waveEffect($(this), e)
  });
}