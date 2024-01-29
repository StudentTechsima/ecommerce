let slider=['images/slide-bg-2-1920x500.jpg','images/slide-bg-3-1920x500.jpg',
'images/slide-bg-4-1920x500.jpg','images/slide-bg-1-1920x500.jpg'];
let i=0;
function slide(){
    let im=document.getElementById("slider-img");
    im.src=slider[i];
    i++;
    if(i==slider.length){
        i=0;
    }
}
window.setInterval("slide()",2000);
//  slider end;
//featured section start
$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    center:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
});
