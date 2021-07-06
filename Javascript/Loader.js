$(document).ready(function () {
  $("#header").load("/AralixDesigns/Page/header.html");
  $("#footer").load("/AralixDesigns/Page/footer.html");
});

// Menu Mobile

function burger_menu(x) {
  x.classList.toggle("change");

  if (
    document.getElementById("links-mobile").style.transform == "translateY(0%)"
  ) {
    document.getElementById("links-mobile").style.transform =
      "translateY(-120%)";
  } else {
    document.getElementById("links-mobile").style.transform = "translateY(-0%)";
  }
}



// Login Modal

function loginModal() {
  $(".login-wrapper").css("display", "flex");
  $("body").css("overflow", "hidden");
}
function closeModal() {
  $(".login-wrapper").css("display", "none");
  $("body").css("overflow", "auto");
}



// Scroll Function


window.onscroll = function () {
  scrollFunction();
  scrollIndicator();
};



// Scroll to Top Button

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



// Scroll Indicator

function scrollIndicator() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  var total_scrolled = (winScroll / height) * 100;
  document.getElementById("bar").style.width = total_scrolled + "%";

  var progress_bar = document.getElementById("scroll-indicator");

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    progress_bar.style.display = "block";
  } else {
    progress_bar.style.display = "none";
  }
}


function elegirPlan(plan){
  $.ajax({
    type: "POST",
    url: "Plan/modalPlan.php",
    data: { 
      Plan: plan
    },
    success: function (data) {
      document.getElementById("plan-modal").innerHTML = data;
      $("#plan-modal").css ("display", "flex");
      $("#plan-modal").css ("display", "flex");
      $("body").css("overflow", "hidden");
    }
  });
}

function closePlan(){
  $("#plan-modal").css ("display", "none");
  $("body").css("overflow", "auto");
}