//for mouse over a project
var $window = $(window);

function checkWidth() {
    var windowsize = $window.width();
    // console.log(windowsize);
    if (windowsize > 575) {
        
        $(".project-items-img").mouseenter( function(){
            $(this).addClass("is-translating");
            $(this).siblings().addClass("is-translating"); 
            $(this).css("filter", "brightness(50%)");
            
        });
        $(".project-items-title").mouseenter( function(){
            $(this).addClass("is-translating");
            $(this).siblings(".project-items-img").siblings(".project-items-category").addClass("is-translating");
            $(this).siblings(".project-items-img").css("filter", "brightness(50%)");
            
            
        });
        $(".project-items-category").mouseenter( function(){
            $(this).addClass("is-translating");
            $(this).siblings(".project-items-img").siblings(".project-items-title").addClass("is-translating");
            $(this).siblings(".project-items-img").css("filter", "brightness(50%)");
            
            
        });
        
        
        $(".project-items-img").mouseout( function(){
            
            $(this).removeClass("is-translating");
            $(this).siblings().removeClass("is-translating");
            $(this).css("filter", "brightness(100%)");
            
        });
    }
}

checkWidth();

$(window).resize(checkWidth);