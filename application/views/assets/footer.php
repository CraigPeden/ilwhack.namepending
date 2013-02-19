<!-- Footer -->
		<footer class="container">
		</footer>
	
		<!-- <script src="<?php echo base_url("/js/jquery.js");?>"></script>-->
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="<?= base_url("/js/bootstrap-datepicker.js");?>"></script>
		<script src="<?= base_url('/js/bootstrap.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('/js/airport_search.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#dp1').datepicker();
				$('#dp2').datepicker();
				$(".addhop").click(function () {
					$(".hop").first().show("slow", function showNext() {
						$(this).next(".hop").show("slow", showNext);
					});
				});
				$(".hoponedelete").click(function(){ 
					$(".hopone").hide();
					event.preventDefault()
				});

			});
			
		</script>
	</body>
</html>