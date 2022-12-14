

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
						<th>Tenant Name</th>
						<th>House No.</th>
						<th>Rent</th>
						<th>Gash Bill</th>
						<th>Electricity Bill</th>
						<th>Total Pay</th>
						<th>Due</th>
					</tr>

					<?php foreach($data as $i=>$d){ ?>
						<tr>
							<td><?= $i+1; ?></td>
							<td><?= $d->name; ?></td>
							<td><?= $d->house; ?></td>
							<td><?= $d->rent ?></td>
							<td><?= $d->gass_bill ?></td>
							<td><?= $d->elc_bill ?></td>
							<td><?= $d->totalPayment ?></td>
							<td><?= ($d->rent+$d->gass_bill+$d->elc_bill)-$d->totalPayment ?></td>
							
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- /.container-fluid -->
