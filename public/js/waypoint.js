$('.main-title').fadeTo(1000, 1);


// $('body').waypoint(function(){
//     $('.main-title').css("margin-top", "0");
// });
$('.presentation').waypoint(function(){
    $('.presentation').fadeTo("slow", 1);
    console.log("waypoint1");
}, {offset:'50%'});
$('.techno').waypoint(function(){
    $('.techno').fadeTo(1000, 1);
    setTimeout(function(){
        jQuery('.skillbar').each(function(){
            jQuery(this).find('.skillbar-bar').animate({
                width:jQuery(this).attr('data-percent')
            },4000);
        });
    });
    console.log("waypoint2");
}, {offset:'40%'});

$('.project').waypoint(function(){
    console.log("waypoint3");
}, {offset:'70%'});

//$(".project-title").waypoint(function(){console.log("waypoint")},{offset:"70%"});