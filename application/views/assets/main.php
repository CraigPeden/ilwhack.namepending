<div class="container splash">
	<div class="jumbotron">
        <h1><img src="<?= base_url('img/SkyHopper_Jumbo.jpeg');?>" /></h1>
        <p class="lead"><img src="<?= base_url('img/SkyHopper_transparent.png');?>" /></p>
        <a class="btn btn-large btn-success splash_activate" href="#">Start Hopping!</a>
    </div>
</div>
<div class="container application" style="display:none;">
	<div class="hop_container departure">
		<div class="airports_body">
			<form class="form-inline">
				<span class="help-inline hop_container_title">Departure</span>
				<div class="pull-right">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-plane"></i></span>
						<input id="start-airport" type="text" class="span1 airport_code" placeholder="Code" style="border-radius:0px;">
					</div>
					<div class="input-prepend">
						<input id="start-airport" type="text" class="span4 airport" placeholder="Airport" style="border-radius:0px;">
					</div>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-calendar"></i></span>
						<input type="text" class="span2" placeholder="Departure Date" data-date-format="dd/mm/yy" id="dp1">
					</div>
				</div>
		    </form>
		</div>
    </div>
    
    <div class="hop_container_insert hop">
    	<div class="transitionbulletone hop">•</div>
    	<div class="transitionbullettwo hop">•</div>
	    <div class="hop_container">
			<div class="airports_body">
				<span class="help-inline hop_container_title">Hop</span>
				<div class="pull-right">
					<form class="form-inline">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-plane"></i></span>
							<input id="start-airport" type="text" class="span1 airport_code" placeholder="Code" style="border-radius:0px;">
						</div>
						<div class="input-prepend">
							<input id="start-airport" type="text" class="span4 airport" placeholder="Airport" style="border-radius:0px;">
						</div>
						<div class="input-prepend">
							<span class="add-on"><i class="icon-calendar"></i></span>
							<input type="text" class="span2" placeholder="Departure Date" data-date-format="dd/mm/yy" id="dp1">
						</div>
						<i class="icon-remove hop_container_delete"></i>
				    </form>
				</div>
			</div>
	    </div>
	    
    </div>
    <div class="transitionbulletone">•</div>
    <div class="transitionbullettwo">•</div>
    
    <div class="addHopContainer">
    	<button class="btn hop_container_add"><i class="icon-plus"></i> Add a hop</button>
    </div>
    
    <div class="transitionbullettwo">•</div>
    <div class="transitionbulletone">•</div>
    <div class="hop_container arrival">
    	<div class="airports_body">
    		<form class="form-inline">
    			<span class="help-inline hop_container_title">Destination</span>
    			<div class="pull-right">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-plane"></i></span>
						<input id="start-airport" type="text" class="span1 airport_code" placeholder="Code" style="border-radius:0px;">
					</div>
					<div class="input-prepend">
						<input id="start-airport" type="text" class="span4 airport" placeholder="Airport" style="border-radius:0px;">
					</div>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-calendar"></i></span>
						<input type="text" class="span2" placeholder="Departure Date" data-date-format="dd/mm/yy" id="dp2">
					</div>
    			</div>
		    </form>
    	</div>
    </div>
</div>