<script type="text/javascript" src="<?= base_url('js/hop-ui.js'); ?>"></script>
<div class="container splash">
	<div class="jumbotron">
        <h1><img src="<?= base_url('img/SkyHopper_Jumbo.jpeg');?>" /></h1>
        <p class="lead"><img src="<?= base_url('img/SkyHopper_transparent.png');?>" /></p>
        <a class="btn btn-large btn-primary splash_activate" href="#">Start Hopping!</a>
    </div>
</div>
<div class="container application" style="display:none;">
	<div class="hop_container departure">
		<div class="airports_body">
			<span class="help-inline hop_container_title">Leave From</span>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-plane"></i></span>
				<input id="start-airport" type="text" class="span4 airport" placeholder="Airport">
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-calendar"></i></span>
				<input type="text" class="span1" placeholder="Date" data-date-format="dd/mm/yy" id="dp1">
			</div>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-user"></i></span>
				<input type="number" class="passengers" id="passengers" value="1" min="1" max="8">
				<span class="add-on">Passengers</span>
			</div>
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
			<span class="help-inline hop_container_title">Destination</span>
			<div class="input-prepend">
				<span class="add-on"><i class="icon-plane"></i></span>
				<input id="start-airport" type="text" class="span4 airport" placeholder="Airport">
			</div>
    	</div>
    </div>
</div>