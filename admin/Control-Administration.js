/*$(".profile .icon_wrap").click(function(){
    $(this).parent().toggleClass("active");
    $(".notifications").removeClass("active");
  });
  
  $(".notifications .icon_wrap").click(function(){
    $(this).parent().toggleClass("active");
     $(".profile").removeClass("active");
  });
  
  $(".show_all .link").click(function(){
    $(".notifications").removeClass("active");
    $(".popup").show();
  });
  
  $(".close, .shadow").click(function(){
    $(".popup").hide();
  });
  */

  
	var dd_main = document.querySelector(".dd_main");

	dd_main.addEventListener("click", function(){
		this.classList.toggle("active");
	})



  //etoileq

  let star = document.querySelectorAll('input');
let showValue = document.querySelector('#rating-value');

for (let i = 0; i < star.length; i++) {
	star[i].addEventListener('click', function() {
		i = this.value;

		showValue.innerHTML = i + " out of 5";
	});
}
