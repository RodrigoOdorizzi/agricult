$(document).ready(function () {
	'use strict';


	// Shuffle js filter and masonry
	var containerEl = document.querySelector('.shuffle-wrapper');
	if (containerEl) {
		var Shuffle = window.Shuffle;
		var myShuffle = new Shuffle(document.querySelector('.shuffle-wrapper'), {
			itemSelector: '.shuffle-item',
			buffer: 1
		});

		jQuery('input[name="shuffle-filter"]').on('change', function (evt) {
			var input = evt.currentTarget;
			if (input.checked) {
				myShuffle.filter(input.value);
			}
		});
	}

	$('.portfolio-single-slider').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000

	});

	$('.clients-logo').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000
	});

	$('.testimonial-slider').slick({
		slidesToShow: 1,
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000
	});


	// CountDown JS
	$('.count-down').syotimer({
		year: 2021,
		month: 5,
		day: 9,
		hour: 20,
		minute: 30
	});

	// Magnific Popup Image
	$('.portfolio-popup').magnificPopup({
		type: 'image',
		removalDelay: 160, //delay removal by X to allow out-animation
		callbacks: {
			beforeOpen: function () {
				// just a hack that adds mfp-anim class to markup
				this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
				this.st.mainClass = this.st.el.attr('data-effect');
			}
		},
		closeOnContentClick: true,
		midClick: true,
		fixedContentPos: true,
		fixedBgPos: true
	});

	//  Count Up
	function counter() {
		var oTop;
		if ($('.count').length !== 0) {
			oTop = $('.count').offset().top - window.innerHeight;
		}
		if ($(window).scrollTop() > oTop) {
			$('.count').each(function () {
				var $this = $(this),
					countTo = $this.attr('data-count');
				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				}, {
					duration: 1000,
					easing: 'swing',
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
					}
				});
			});
		}
	}
	$(window).on('scroll', function () {
		counter();
	});




	// contactr form
	$('#contact-form').validate({
		rules: {
			user_name: {
				required: true,
				minlength: 3
			},
			user_email: {
				required: true,
				email: true
			},
			user_endereco: {
				required: true,
				endereco: true
			},
			user_subject: {
				required: false
			},
			 
		},
		messages: {
			user_name: {
				required: 'Você deve informar um nome',
				minlength: 'Nome deve conter pelo menos 3 caracteres'
			},
			user_email: {
				required: 'Por favor, insira um e-mail'
			},
			 
			user_endereco: {
				required: 'Por favor, insira um e-mail'
			},
			 

		},
		submitHandler: function (form) {
			$(form).ajaxSubmit({
				type: 'POST',
				data: $(form).serialize(),
				url: 'sendmail.php',
				success: function () {
					$('#contact-form #success').fadeIn();
				},
				error: function () {

					$('#contact-form #error').fadeIn();
				}
			});
		}
	});

});



let container = document.querySelector(".content");
let loadMoreButton = document.querySelector(".content button");


let valorinicial =6;
let carregaritem = 2;


function carregariteminicial(){
	
		let itens = JSON.parse(localStorage.getItem("books"));
		let out = "";
		let counter = 0;
		for(let item of itens){
		   if(counter < initialItems){
			  out += `
				 <div class="book">
					<div class="left">
					   <img src="${book.image}" alt="">
					</div>
					<div class="right">
					   <p class="title">${book.title}</p>
					   <p class="about">${book.about}</p>
					   <p class="info">Pages: ${book.pages} / Year: ${book.year} </p>
					</div>
				 </div>
			  `;
		   }
		   counter++;
		}
	  
		let div = document.createElement("div");
		container.insertBefore(div, loadMoreButton);
		div.innerHTML = out;
	 


}

function loadData(){
	let itens = JSON.parse(localStorage.getItem("itens"));
	let currentDisplayedItems = document.querySelectorAll(".item").length;
  
	let out = "";
	let counter = 0;
	for(let item of items){
	   if(counter >= currentDisplayedItems && counter < loadItems + currentDisplayedItems){
		  out += `
			 <div class="book">
				<div class="left">
				   <img src="${book.image}" alt="">
				</div>
				<div class="right">
				   <p class="title">${book.title}</p>
				   <p class="about">${book.about}</p>
				   <p class="info">Pages: ${book.pages} / Year: ${book.year} </p>
				</div>
			 </div>
		  `;
	   }
	   counter++;
	}
  
	let div = document.createElement("div");
	container.insertBefore(div, loadMoreButton);
	div.innerHTML = out;
	div.style.opacity = 0;
  
	if(document.querySelectorAll(".item").length == items.length){
	   loadMoreButton.style.display = "none";
	}
  
	fadeIn(div);
 }


 function fadeIn(div){
	let opacity = 0;
	let interval = setInterval(function(){
	   if (opacity <= 1) {
		  opacity = opacity + 0.1; // increasing the opacity by 0.1.
		  div.style.opacity = opacity; // making the div element gradual visible.
	   }else{
		  clearInterval(interval);
	   }
	}, 30);
 }

 
