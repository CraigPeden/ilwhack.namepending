<!-- Footer -->
		<footer class="container">
		</footer>
	
		<!-- <script src="<?php echo base_url("/js/jquery.js");?>"></script>-->
		<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
		<script type="text/javascript" src="<?= base_url("/js/bootstrap-datepicker.js");?>"></script>
		<script type="text/javascript" src="<?= base_url('/js/bootstrap.js'); ?>"></script>
		<script type="text/javascript" src="<?= base_url('/js/airport_search.js'); ?>"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#dp1').datepicker('setStartDate', Date());
				$('#dp2').datepicker();
				$(".hop_container_add").click(function () {
					$(".hop").first().show('blind', 600, function showNext() {
						$(this).next(".hop").show('blind', showNext);
					});
				});
				$(".hop_container_delete").click(function(){ 
					$(".hop_container_insert").hide(500);
					event.preventDefault()
				});
				$(".splash_activate").click(function(){ 
					$(".application").show('clip');
					$(".splash").hide();
					event.preventDefault()
				});
				$(".select_flight_button").click(function(){
					document.getElementById("hop-1-container").className += " deselected";
					event.preventDefault()
				});
			});
			
		</script>
	</body>
</html>
