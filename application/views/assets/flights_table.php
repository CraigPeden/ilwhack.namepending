<?php if (($num_hops + 1) > $hop_number): ?>
	<div class="span3">
		<table class="table table-striped table-hover" style="text-align:center;">
			<thead>
				<tr>
					<th>Hop <?= $hop_number; ?></th>
				</tr>
			</thead>
			<tbody>   	
				<?php foreach($flights as $row) { ?>
				<tr>
					<td class="result">
						<div class="result_airports">
							<?= $row->origin . " -> " . $row->destination;?>
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
						</div>
						<div class="result_bottom" style="padding-top:5px;">
							<div class="pull-left result_cost" style="padding-top:7px;">£<?= $row->cost; ?></div>
							<div class="pull-right"><button class="btn select_flight_button" data-hop="<?= $hop_number; ?>" data-origin="<?= $row->origin;?>" data-destination="<?= $row->destination; ?>" data-arrival-time="<?= $row->arrival_time; ?>">Select</button></div>
						</div>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php else: ?>
	</div>
	<button class="btn btn-primary btn-large final_submit_button" id="submit-flights">Submit Flight Selection</button>
<?php endif; ?>