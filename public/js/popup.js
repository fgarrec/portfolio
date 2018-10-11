$(".project-items-img").click(function(){
    var height = $(this).offset().top - $(window).scrollTop();
    
    // var height = offset - 400;
    
    var scrollPosition = [
        self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
        self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
    ];
    var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
    html.data('scroll-position', scrollPosition);
    html.data('previous-overflow', html.css('overflow'));
    html.css('overflow', 'hidden');
    window.scrollTo(scrollPosition[0], scrollPosition[1]);

    console.log(height);
    // $(".popup-project-items").css("top", height + "px");
    $(".popup-project-items").addClass("project-visible");
    $(".hide").addClass("hide-visible");
    // $("html").css("margin", "0").css("height", "100%").css("overflow", "hidden");
    // $("body").css("margin", "0").css("height", "100%").css("overflow", "hidden");
});

$(".cancel").click(function(){
    $(".popup-project-items").removeClass("project-visible");
    $(".hide").removeClass("hide-visible");
    $("html").css("margin", "").css("height", "").css("overflow", "");
    $("body").css("margin", "").css("height", "").css("overflow", "");
});
$(".hide").click(function(){
    $(".popup-project-items").removeClass("project-visible");
    $(".hide").removeClass("hide-visible");
    $("html").css("margin", "").css("height", "").css("overflow", "");
    $("body").css("margin", "").css("height", "").css("overflow", "");
});
$(".popup-project-items").click(function(){
    $(".popup-project-items").removeClass("project-visible");
    $(".hide").removeClass("hide-visible");
    $("html").css("margin", "").css("height", "").css("overflow", "");
    $("body").css("margin", "").css("height", "").css("overflow", "");
});
