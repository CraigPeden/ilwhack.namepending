<?php
	$post_variables = array_keys($_POST);

	$num_hops = 0;

	foreach ($post_variables as $variable)
	{
		if (strpos($variable, "hop-") !== FALSE && strpos($variable, "-airport") !== FALSE)
		{
			$num_hops++;
		}
	}

	$num_hops++;
?>

<script type="text/javascript">
	var num_hops = <?= $num_hops; ?>;
</script>

<script type="text/javascript" src="<?= base_url("js/flight-picker.js") ?>"></script>

<div class="container results">
	<ul class="pager" style="margin: 0 !important">	  <li class="previous">
	    <a href="<?= base_url();?>">← Hop Selection</a>
	  </li>
	</ul>
	<div class="row-fluid" id="hop-flights-container">
		<div class="span3" id="hop-1-container">
			<table class="table table-striped table-hover" style="text-align:center;">
	        	<thead>
	            	<tr>
	                	<th class="hop_title">Hop 1</th>
	                </tr>
	            </thead>
	            <tbody>   	
	            	<?php foreach($hop_1 as $row) { ?>
	            	<tr>
	                	<td class="result">
	                		<div class="result_airports">
	                			<?= $row->origin . " → " . $row->destination;?>
	                		</div>
	                		<div class="result_logo">
	                			<img alt="" src="<?= $row->logo; ?>" />
	                		</div>
	                		<div class="result_time clearfix">
	                			<?php $date = new DateTime($row->departure_time); ?>
	                			Departure: <div class="pull-right"><?= $date->format('D M j H:i');?>
	                		</div>
	            			<div class="result_time clearfix">
	            				<?php $date = new DateTime($row->arrival_time); ?>
	                			Arrival: <div class="pull-right"><?= $date->format('D M j H:i');?>
	            			</div>
	                		<div class="result_bottom" style="padding-top:5px;">
	                			<div class="pull-left result_cost" style="padding-top:7px;">£<?= $row->cost; ?></div>
	                			<div class="pull-right"><button class="btn select_flight_button button1" data-price="<?= $row->cost; ?>" data-hop="1" data-origin="<?= $row->origin;?>" data-destination="<?= $row->destination; ?>" data-arrival_time="<?= $row->arrival_time; ?>">Select</button></div>
	                		</div>
	                	</td>
	                </tr>
	                <?php } ?>
			    </tbody>
	        </table>
		</div>
	</div>
</div>