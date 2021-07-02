$( document ).ready(function(){

});

function loginModal(){
    $(".login-wrapper").css ("display", "flex");
    $("body").css ("overflow", "hidden");
}
function closeModal(){
    $(".login-wrapper").css ("display", "none");
    $("body").css ("overflow", "auto");
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var mybutton = document.getElementById("scrollTop");
    
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}