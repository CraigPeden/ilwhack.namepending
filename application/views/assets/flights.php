<?php //print_r($flights_one); ?><br />
<?= ($flights_one->BrowseQuotesResponseDto->Quotes->QuoteDto[0]->MinPrice); ?>
<div class="container results">
	<div class="row-fluid">
		<div class="span2">
			<table class="table table-striped table-hover" style="text-align:center;">
            	<thead>
                	<tr>
	                	<th>Hop 1</th>
	                </tr>
	            </thead>
	            <tbody>   	
	            	<?php foreach()
                	<tr>
	                	<td class="result">
	                		<div class="result_airports">
	                			<?= $flights_one->BrowseQuotesResponseDto->Quotes->QuoteDto[0]->OutboundLeg->OriginId . " -> " . $flights_one->BrowseQuotesResponseDto->Quotes->QuoteDto[0]->OutboundLeg->DestinationId;?>
	                		</div>
	                		<div class="result_logo">
	                			<?= $flights_one->BrowseQuotesResponseDto->Quotes->QuoteDto[0]->OutboundLeg->DestinationId; ?>
	                		</div>
	                		<div class="result_time clearfix">
	                			<div class="pull-left">Dep: <?= $flights_one->BrowseQuotesResponseDto->Quotes->QuoteDto[0]->OutboundLeg->DepartureDate;?>
	                			</div>
	                			<div class="pull-left">Arr: <?= $flights_one->BrowseQuotesResponseDto->Quotes->QuoteDto[0]->OutboundLeg->ArrivalDate;?>
	                			</div>
	                		</div>
	                		</div>
	                		<div class="result_bottom" style="padding-top:5px;">
	                			<div class="pull-left result_cost" style="padding-top:7px;">£<?= $flights_one->BrowseQuotesResponseDto->Quotes->QuoteDto[0]->MinPrice; ?></div>
	                			<div class="pull-right"><a class="btn" href="#">Select</a></div>
	                		</div>
	                	</td>
	                </tr>
	                <tr>
	                	<td class="result">
	                		<div class="result_logo">
	                			<img src="<?= base_url('img/carriers/lufthansa.jpg');?>">
	                		</div>
	                		<div class="result_code">
	                			BAXX0046
	                		</div>
	                		<div class="result_cost">
	                			£250
	                		</div>
	                	</td>
	                </tr>

		            <tr>
			            <td class="result">
	                		<div class="result_logo">
	                			<img src="<?= base_url('img/carriers/american_airlines.png');?>">
	                		</div>
	                		<div class="row-fluid">
		                		<div class="result_code">
		                			BAXX0046
		                		</div>
		                		<div class="result_cost">
		                			£250
		                		</div>
	                		</div>
	                	</td>
			        </tr>
			    </tbody>
            </table>
		</div>
	</div>
</div>