window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (window.scrollY > 500 ) {
    document.getElementById("navbar").style.backgroundColor = "black";
    document.getElementById("navbar").style.top = "0";
    document.getElementById("navbar").style.zIndex = 1000;
    document.getElementById("navbar").style.position = "fixed";
    document.getElementById("navbar").style.paddingBottom = "10px";
  } 
  else{
    document.getElementById("navbar").style.backgroundColor = "";
    document.getElementById("navbar").style.top = "";
    document.getElementById("navbar").style.zIndex = 1000;
    document.getElementById("navbar").style.position = "";
    document.getElementById("navbar").style.paddingBottom = "10px";
  }

}