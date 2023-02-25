let searchBox = document.querySelector('.search-box')
let searchBtn = document.querySelector('.search-link')
let searchInput = document.querySelector('.search-input')
let stickyMenu = document.querySelector('.sticky-menu')
let vhdiv = document.querySelector('.vhdiv')

// console.log(searchBtn);
searchBtn.addEventListener('click', () => {
    searchInput.classList.remove('hidden')
    searchBox.style.border = '1px solid black'
})

// ---------------------------------- humburger menu --------------------------------- 
let humBurgerDiv = document.querySelector('.humBurgerDiv')
let humMenu = document.querySelector('#humburger')
let forResp = document.querySelector('.for-respon')
let nocross = document.querySelector('.nocross')
let cross = document.querySelector('.cross')

// console.log(cross);
humMenu.addEventListener('click', (e) => {
    if(e.target.checked){
        // forResp.style.display = 'block'
        // forResp.style.display = 'block'
        forResp.style.right = '0rem'
        nocross.style.display = 'none'
        cross.style.display = 'flex'
        stickyMenu.classList.add('displayNone')
        vhdiv.style.zIndex = 11
    }else{
        forResp.style.right = '-80rem'
        // forResp.style.display = 'none'
        cross.style.display = 'none'
        nocross.style.display = 'flex'
        stickyMenu.classList.remove('displayNone')
        setTimeout(() => {
            vhdiv.style.zIndex = 1
            
        }, 1000);

    }
    console.log(e.target);
})
// console.log(humMenu.checked);






// smooth scroll 





// --------------------------- about section program hover effect ----------------------------------- 

let tabber = document.querySelector('.sticky-menu')
let tabCheckbox = tabber.querySelector('.tab-checkbox')
let stickyNavigation = document.querySelector('.sticky-navigation')
let hoverImg = document.querySelectorAll('.hoverImg')
let titleCont = document.querySelectorAll('.title-cont')
let title = document.querySelectorAll('.title')
let tabImg = document.querySelectorAll('.tab-img')


hoverImg.forEach(img => {
    img.addEventListener('mouseenter', (event) => {
        let titleId = event.target.dataset.titleId;
        let associatedTitleCont = document.getElementById(titleId);
        let associatedTitle = associatedTitleCont.querySelector('.title');
        let parentTabImg = associatedTitleCont.parentNode
        // console.log(parentTabImg);
        associatedTitle.style.right = '0px'
        // console.log(associatedTitleCont);
        associatedTitleCont.style.zIndex = '999'
        // console.log(associatedTitleCont);
        let tabUL = associatedTitleCont.querySelector('.tab-ul')
        associatedTitle.addEventListener('mouseenter', () => {
            tabUL.style.top = 0

        })

    })
    img.addEventListener('mouseleave', (event) => {
        let titleId = event.target.dataset.titleId;
        let associatedTitleCont = document.getElementById(titleId);
        let associatedTitle = associatedTitleCont.querySelector('.title');
        let parentTabImg = associatedTitleCont.parentNode
        let tabUL = associatedTitleCont.querySelector('.tab-ul')

        parentTabImg.addEventListener('mouseleave', () => {
            associatedTitle.style.right = '-28rem'
            tabUL.style.top = '-26rem'
            associatedTitleCont.style.zIndex = '8'
        })
    })
    
})







tabCheckbox.addEventListener('click', (e) => {
    if(e.target.checked){
        stickyNavigation.style.display = 'flex'
        // console.log(titleCont);
        titleCont.forEach(e => {
            e.style.display = 'block'
        })
        // stickyNavigation.classList.remove('displayNone')
        tabImg.forEach(e => {
            e.style.height = '11rem'
        })
    }else{
        titleCont.forEach(e => {
            e.style.display = 'none'
        })

        // stickyNavigation.style.display = "none"
        tabImg.forEach(e => {
            e.style.height = '0'
        })
    }
})

$(function(){
	
	var liCount = $('.slider li').length;
	var ulWidth = (liCount * 100);
	var liWidth = (100/liCount);
	var leftIncrement = (ulWidth/liCount);


	$('.slider').height($('.slider li img').height());
  //$('.slider').height('300px');
	
	$('.slider img').on('load', function(){
    $('.loader').fadeOut();
		$('.slider').height($(this).height());
	})

	$(window).resize(function() {
		$('.slider').css('height', $('.slider li img').height());
	}); 
	
	$('.slider ul').css('width', ulWidth + '%');
	$('.slider li').css('width', liWidth + '%');

	$('.slider').append(function() {
		$(this).append('<div class="navigator"></div>');
		$(this).prepend('<span class="prev">Prev</span><span class="next">Next</span>');
		//$(this).append('<div class="autoPlay"><input id="chkBox" type="checkbox" class="chkbox" /><label for="chkBox">Auto Play?</label></div>');

		$(this).find('li').each(function(){
			$('.navigator').append('<span></span>');
		});
	});

  $('.slider').css('height', $('.slider li img').height());
  
	$('.navigator span:first-child').addClass('active');


	if(liCount > 2) {
		$('.slider ul').css('margin-left', -leftIncrement + '%');
		$('.slider ul li:last-child').prependTo('.slider ul');
	} else if(liCount == 1) {
		$('.slider span').css('display', 'none');
		$('.autoPlay').css('display', 'none');
	} else if(liCount == 2) {
		$('.slider .prev').css('display', 'none');
	}

	function moveLeft() {
		$('.slider ul').animate({
			left : -leftIncrement + '%'
		}, 500, function(){
			$('.slider ul li:first-child').appendTo('.slider ul');
			$('.slider ul').css('left', '');

			if($('.navigator span').hasClass('active')) {

				if($('.navigator span.active').is(':last-child')) {
					$('span.active').removeClass('active');
					$('.navigator span:first-child').addClass('active');
				} else {
					$('span.active').next().addClass('active');
					$('span.active').prev().removeClass('active');
				}
			}
		});
	}


	function moveRight() {
		$('.slider ul').animate({
			left : leftIncrement + '%'
		}, 500, function(){
			$('.slider ul li:last-child').prependTo('.slider ul');
			$('.slider ul').css('left', '');

			if($('.navigator span').hasClass('active')) {

				if($('.navigator span.active').is(':first-child')) {
					$('span.active').removeClass('active');
					$('.navigator span:last-child').addClass('active');
				} else {
					$('span.active').prev().addClass('active');
					$('span.active').next().removeClass('active');
				}
			}
		});
	}


	// $('.chkbox').click(function() {
	// 	if($('.chkbox').is(':checked')) {
	// 		$('.slider > span').hide();
	// 		$(this).next('label').text('Auto Playing')
	// 		invertalValue = setInterval(function() {
	// 			moveLeft();
	// 		}, 5000);
	// 	} else {
	// 		$(this).next('label').text('Auto Play?')
	// 		if(liCount == 2) {
	// 			$('.slider .next').show();
	// 		} else if(liCount > 2){
	// 			$('.slider > span').show();
	// 		}
	// 		clearInterval(invertalValue);
	// 	}
	// });
  
  if(liCount > 1) {
		invertalValue = setInterval(function() {
			moveLeft();
		}, 5000);
	}

	$('.prev').click(function(){
		moveRight();
	});

	$('.next').click(function(){
		moveLeft();
	});

});

/* Mamun khandaker */
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});