var mediaMaxMd = window.matchMedia("(max-width: 991px)");
var mediaMinMd = window.matchMedia("(min-width: 992px)");

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

/********************** NAVBAR *****************************/
$('nav#subNavbar').hide(); //hide navbar on page load
//optional close button, can be removed along with the div with ID `close-sub-menu` 
$( "#close-sub-menu" ).click(function() {
	$('nav#subNavbar').hide();
});

//menu handler, will keep only the last selected menu open.
$( ".top-item" ).click(function() {
	$("#navbarSub").children().hide(); //hide all sub menu items
	$('nav#subNavbar').show(); //show main menu
	
	//handle links
	let id = $(this).attr('id');
	$(this).parents('ul').children().removeClass("active"); //remove all active classes from main navbar links
	$(this).parent().addClass("active"); //set selected navbar link to active
	$("ul#sub-"+id).show(); //show sub menu
});

$(".sub-item").click(function(){
	if (mediaMaxMd.matches) {
		$('#subNavbar').hide();
		$('#navbarMain').removeClass('show');
	}
});

$(".navbar-toggler-icon").click(function(){
	if ($('#subNavbar').css('display') == 'none') {
		$("#navbarSub").children().hide(); //hide all sub menu items
		$('nav#subNavbar').show(); //show main menu
		let id = getCurrentController();
		id = id.toLowerCase();
		$('#'+id).parents('ul').children().removeClass("active"); //remove all active classes from main navbar links
		$('#'+id).parent().addClass("active"); //set selected navbar link to active
		$("ul#sub-"+id).show(); //show sub menu
	} else {
		let id = $('#mainNavbar .nav-item.active a').attr('id');
		$("ul#sub-"+id).hide();
		$('#subNavbar').hide();
	}
});

if (mediaMinMd.matches) {
	var prevScrollpos = window.pageYOffset;
	var lastScrollUp = true;
	window.onscroll = function() {
	  var currentScrollPos = window.pageYOffset;
	  if (prevScrollpos > currentScrollPos) {
	    if (!lastScrollUp) {
		    $('#mainNavbar').animate({top: '0px'});
		    $('#subNavbar').animate({top: '0px'});
	    }
	    lastScrollUp = true;
	  } else {
	  	if (lastScrollUp) {
		    $('#mainNavbar').animate({top: '-62px'});
		    $('#subNavbar').animate({top: '-62px'});
	  	}
	  	lastScrollUp = false;
	  }
	  prevScrollpos = currentScrollPos;
	}
}

/******************* FORM ********************/
$('.form-switch-button').click(function(){
	$('.switchable-field').hide();
	$('.form-switch-button').removeClass('active');
	$(this).addClass('active');
	$('.team-input').prop('disabled', true);

	let id = $(this).attr('id');
	id = id.split('-');

	$('#' + id[0] + '-field').show();
	$('#' + id[0] + '-team').prop('disabled', false);
	if (id[0] == 'captain') {
		$('#sport-team').prop('disabled', false);
	}
});

$('#birthday').change(function(){
	let setDate = $(this).val().split('-');
	let birth16Date = new Date(parseInt(setDate[0])+16, parseInt(setDate[1])-1, setDate[2]);
	let currentDate = new Date();

	if (birth16Date > currentDate) {
		$('#games-form .under-16').show();
		$('#under-16').prop('disabled', false);
	} else {
		$('#games-form .under-16').hide();
		$('#under-16').prop('disabled', true);
	}
});