





$("#imgFade").mouseenter(function(){
     $("#textFade").fadeToggle();

 })
$("#imgFade").mouseleave(function(){
     $("#textFade").fadeToggle();

  })
$(".socialMedia").dblclick(function(){
     window.location.href = $(this).data("link")
  })
$(".socialMedia").dblclick(function(){
     window.location.href = $(this).data("link")
  })
$(".socialMedia").dblclick(function(){
     window.location.href = $(this).data("link")
  })
//  $("#resizePic").click(function(){
//      $(".socialMedia").animate({
//          height: '10%',
//          width: '10%'
//      })
//  })
//  $("#resizePic1").click(function(){
//      $(".socialMedia1").animate({
//          height: '10%',
//          width: '10%'
//      })
//  })
// Modal Image Gallery
function onClick(element) {
     document.getElementById("img01").src = element.src;
     document.getElementById("modal01").style.display = "block";
     var captionText = document.getElementById("caption");
     captionText.innerHTML = element.alt;
   }
   
   // Change style of navbar on scroll
   window.onscroll = function() {myFunction()};
   function myFunction() {
       var navbar = document.getElementById("myNavbar");
       if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
           navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
       } else {
           navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
       }
   }
   
   // Used to toggle the menu on small screens when clicking on the menu button
   function toggleFunction() {
       var x = document.getElementById("navDemo");
       if (x.className.indexOf("w3-show") == -1) {
           x.className += " w3-show";
       } else {
           x.className = x.className.replace(" w3-show", "");
       }
   }
   $(document).ready(function() {
     $(".imgHover").css("opacity", 0.5);
     $(".imgHover").hover(function() {
         $(this).animate({opacity: 1.0}, 500);
     }, function() {
         $(this).animate({opacity: 0.5}, 500);
     });
 });