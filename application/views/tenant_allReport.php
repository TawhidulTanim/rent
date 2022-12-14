

<!-- Content Row -->
<div class="row">
	<div class="col-sm-12" style="margin: 0 auto; ">
<!-- 		<?php if ($this->session->flashdata('msg')) echo $this->session->flashdata('msg');  ?>
 -->		<div class="card ">

			<div class="card-header">
				<h4> Tenants Report  </h4> <hr>
			</div>

			<div class="card-body ">
				<table class="table table-bordered table-striped text-center">
					<tr class="text-center">
						<th>Sl.</th>
						<th>Year</th>
						<th>Month</th>
						<th>Rent</th>
						<th>Gash Bill</th>
						<th>Electricity Bill</th>
						<th>Total Pay</th>
						<th>Due/Deposit</th>
					</tr>

					<?php foreach($data as $i=>$d){ ?>
						<tr>
							<td><?= $i+1; ?></td>
							<td><?= $d->month; ?></td>
							<td><?= $d->year; ?></td>
							<td><?= $d->rent ?></td>
							<td><?= $d->gass_bill ?></td>
							<td><?= $d->elc_bill ?></td>
							<td><?= $d->pay ?></td>
							<td><?= $d->pay-($d->rent+$d->gass_bill+$d->elc_bill) ?></td>
							
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- /.container-fluid -->
