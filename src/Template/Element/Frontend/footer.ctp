<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; INSIDE 2018</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<?= $this->Html->script('/vendor/jquery/jquery.min') ?>
<?= $this->Html->script('/vendor/bootstrap/js/bootstrap.bundle.min') ?>
<?= $this->Html->script('customize') ?>

<script>
	function getCurrentController() {
		return '<?= $this->request->params['controller'] ?>';
	}
</script>