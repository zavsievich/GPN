'use strict'

/* Responsive navigation */

function classToggle(){
    const navs = document.querySelectorAll('.navbar-items');

    navs.forEach(nav => nav.classList.toggle('navbar-toggle-show'));
}

document.querySelector('.navbar-link-toggle').addEventListener('click', classToggle);


/* Prices */

var HIDDEN_CLASS_NAME = 'hidden';
var TARGET_CLASS_NAME = 'target';
var BTN_CLASS_NAME = 'btn';

var targetIdToShow = 1;

function prices() {
	var targets = getElements(TARGET_CLASS_NAME)
	var btns = getElements(BTN_CLASS_NAME)
	btns.forEach(function (btnNode) {
		var btnNodeId = extractId(btnNode, BTN_CLASS_NAME)
		btnNode.addEventListener('click', function () {
			showTarget(targets, btnNodeId)
		})
	})
	showTarget(targets, targetIdToShow)
}

function getElements(type) {
	return [].slice.call(document.querySelectorAll('.' + type)).sort(function (targetNode1, targetNode2) {
		var target1Num = extractId(targetNode1, TARGET_CLASS_NAME)
		var target2Num = extractId(targetNode2, TARGET_CLASS_NAME)
		return target1Num > target2Num
	})
}

function extractId(targetNode, baseClass) {
	var currentClassIndex = targetNode.classList.length
	while (currentClassIndex--) {
		var currentClass = targetNode.classList.item(currentClassIndex)
		var maybeIdNum = parseInt(currentClass.split('-')[1])
		if (isNaN(maybeIdNum)) {
			continue
		}
		var classStrinToValidate = baseClass + '-' + maybeIdNum
		if (classStrinToValidate === currentClass) {
			return maybeIdNum
		}
	}
}

function showTarget(targets, targetId) {
	targets.forEach(function (targetNode, targetIndex) {
    var currentTargetNodeId = extractId(targetNode, TARGET_CLASS_NAME)
		if (currentTargetNodeId === targetId) {
			targetNode.classList.remove(HIDDEN_CLASS_NAME)
		} else {
			targetNode.classList.add(HIDDEN_CLASS_NAME)
		}
	})
}

prices()

/* popUp with jQuery */

var link = $('.big-text'),
    close = $('.close'),
    ovl = $('.overlay');

link.on('click', function() {
    ovl.addClass('active');
});

close.on('click', function () {
    $(ovl).removeClass('active');
})

/* Carousel */

var slideIndex = 1;
showSlides(slideIndex);

	/* Increase index +1, show next slide */

function plusSlide() {
	showSlides(slideIndex += 1);
}

	/* Decrease index -1, show previous slide */

function minusSlide() {
	showSlides(slideIndex -= 1);
}

	/* Sets current slide */

function currentSlide()	{
	showSlides(slideIndex = n);
}

	/* Main function of carousel */

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName('slide');
	var dots = document.getElementsByClassName('carousel-dots_item');
	if(n > slides.length) {
		slideIndex = 1;
	}
	if (n < 1) {
		slideIndex = slides.length;
	}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(' active', '');
	}
	slides[slideIndex - 1].style.display = 'grid';
	dots[slideIndex - 1].className += ' active';
}

/* Form on AJAX */

$(document).ready(function() {

	$(".form").submit(function() {
		$.ajax({
			type: "POST",
			url: "send.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Спасибо за заявку! Скоро мы с вами свяжемся");
			$(".form").trigger("reset");
		});
		return false;
	});
});

