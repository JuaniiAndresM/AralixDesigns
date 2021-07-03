$( document ).ready(function(){
    $('#header').load('/AralixDesigns/Page/header.html');
    $('#footer').load('/AralixDesigns/Page/footer.html');
});

function burger_menu(x) {
    x.classList.toggle("change");

    if (document.getElementById("links-mobile").style.transform == "translateY(0%)") {
        document.getElementById("links-mobile").style.transform = "translateY(-120%)";
        document.getElementById("arrow").style.display = "flex";
    } else {
        document.getElementById("links-mobile").style.transform = "translateY(-0%)";
        document.getElementById("arrow").style.display = "none";
    }
}


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