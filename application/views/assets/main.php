<script type="text/javascript" src="<?= base_url('js/hop-ui.js'); ?>"></script>

<div class="container">

	<div class="hop_container departure">
		<div class="airports_body">
			<form class="form-inline">
				<span class="help-inline hop_container_title">Leave From</span>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-plane"></i></span>
					<input id="start-airport" type="text" class="span4 airport" placeholder="Airport">
				</div>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-calendar"></i></span>
					<input type="text" class="span2" placeholder="Departure Date" data-date-format="dd/mm/yy" id="dp1">
				</div>
		    </form>
		</div>
    </div>
    
    <div id="hop_container">
    	
    </div>
	    
    <div class="transitionbulletone hop">•</div>
    <div class="transitionbullettwo hop">•</div>
    
    <div class="addHopContainer">
    	<button class="btn" id="add-hop-button"><i class="icon-plus"></i> Add a hop</button>
    </div>
    
    <div class="transitionbullettwo">•</div>
    <div class="transitionbulletone">•</div>
    <div class="hop_container arrival">
    	<div class="airports_body">
    		<form class="form-inline">
    			<span class="help-inline hop_container_title">Destination</span>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-plane"></i></span>
					<input id="start-airport" type="text" class="span4 airport" placeholder="Airport">
				</div>
		    </form>
    	</div>
    </div>