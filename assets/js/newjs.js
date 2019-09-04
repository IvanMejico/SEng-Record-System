$(".ttr-toggle-sidebar").on("click", function() {
    if($("body").hasClass("ttr-opened-sidebar")){
      $("body").removeClass("ttr-opened-sidebar"), $("body").removeClass("ttr-body-fixed");
    }else{
      $(window).width() < 760 && $("body").addClass("ttr-body-fixed"), $("body").addClass("ttr-opened-sidebar");
    }
});


$(".ttr-toggle-sidebar").on("click", function() {
  if($("body").hasClass("ttr-opened-sidebar")){
    $("body").removeClass("ttr-opened-sidebar"), $("body").removeClass("ttr-body-fixed");
  }else{
    $(window).width() < 760 && $("body").addClass("ttr-body-fixed"), $("body").addClass("ttr-opened-sidebar");
  }
});

$(".ttr-sidebar-pin-button").on("click", function() {
  $("body").toggleClass("ttr-pinned-sidebar");
});

$(".ttr-sidebar-navi li.show > ul").slideDown(200);
$(".ttr-sidebar-navi a").on("click", function(e) {
  var a = $(this);
  $(this).next().is("ul") ? (e.preventDefault(), a.parent().hasClass("show") ? (a.parent().removeClass("show"), a.next().slideUp(200)) : (a.parent().parent().find(".show ul").slideUp(200), a.parent().parent().find("li").removeClass("show"), a.parent().toggleClass("show"), a.next().slideToggle(200))) : (a.parent().parent().find(".show ul").slideUp(200), a.parent().parent().find("li").removeClass("show"), a.parent().addClass("show"))
});