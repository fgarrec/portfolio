//for mouse over a project
var onP = false;
$(".project-items-img").mouseenter( function(){
    $(this).addClass("is-translating");
    $(this).siblings().addClass("is-translating"); 
    onP = false;
    console.log(onP);
});
$(".project-items-title").mouseenter( function(){
    $(this).addClass("is-translating");
    $(this).siblings(".project-items-img").siblings(".project-items-category").addClass("is-translating");
    onP = true;
    console.log(onP);
});
$(".project-items-category").mouseenter( function(){
    $(this).addClass("is-translating");
    $(this).siblings(".project-items-img").siblings(".project-items-title").addClass("is-translating");
    onP = true;
    console.log(onP);
});
// $(".project-items-category, .project-items-title").mouseout( function(){
//     onP = false;
//     console.log(onP);
// });
$(".project-items-img").mouseout( function(){

    $(".project-items-category, .project-items-title").mouseenter( function(){
        onP = true;
        console.log("onP on the mouseout = " + onP);
    });

    
    if(onP == true){
        // $(this).css("filter", "brightness(50%)");
        // $(this).removeClass("is-translating");
        // $(this).siblings().removeClass("is-translating");
        console.log("on P, "+onP);
    }else if(onP == false){
        $(this).removeClass("is-translating");
        $(this).siblings().removeClass("is-translating");
        // $(this).addClass("is-translating");
        console.log("not on P, "+onP);
        onP = true
    }
});