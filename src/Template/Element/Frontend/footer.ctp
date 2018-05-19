<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; INSIDE 2018</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>

<script>
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

	$(".navbar-toggler-icon").click(function(){
		if ($('#subNavbar').css('display') == 'none') {
			$("#navbarSub").children().hide(); //hide all sub menu items
			$('nav#subNavbar').show(); //show main menu
			let id = '<?= $this->request->params['controller'] ?>';
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
</script>