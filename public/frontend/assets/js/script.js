var hamburger = document.querySelector(".hamburger");
	var menu = document.querySelector(".tb_menu");

	hamburger.addEventListener("click", function(){
		menu.classList.toggle("active");
	})


// // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the tb_logo's font size
// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      
//     document.getElementById("navbar").style.padding = "27px 2px 12px 32px";
//     var element = document.getElementById("tb_navbar");
//     element.classList.add("animate__fadeInDown");
//     document.getElementById("tb_logo").style.fontSize = "15px";
//   } 
//   else {
//     document.getElementById("navbar").style.padding = "51px 2px 35px 39px";
//     var element = document.getElementById("tb_navbar");
//     element.classList.remove("animate__fadeInDown");
//     document.getElementById("tb_logo").style.fontSize = "15px";
//   }
// }    