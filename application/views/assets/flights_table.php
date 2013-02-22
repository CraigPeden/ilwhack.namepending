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
						<div class="pull-left">Dep: <?= $row->departure_time;?>
						</div>
						<div class="pull-left">Arr: <?= $row->arrival_time;?>
						</div>
					</div>
					</div>
					<div class="result_bottom" style="padding-top:5px;">
						<div class="pull-left result_cost" style="padding-top:7px;">£<?= $row->cost; ?></div>
						<div class="pull-right"><a class="btn" href="#" data-destination="<?= $row->destination; ?>" data-arrival_time="<?= $row->arrival_time; ?>">Select</a></div>
					</div>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>