

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
						<th>Month</th>
						<th>Total Rent </th>
						<th>Paid</th>
						<th>Due</th>
						<th>Status</th>
						<th>Action</th>
					</tr>

					<?php foreach($data as $i=>$d){ ?>
						<tr>
							<td><?= $i++; ?></td>
							<td><?= $d->name; ?></td>
							<td><?= $d->rentMonth; ?></td>
							<td><?= $d->totalRent ?></td>
							<td><?= $d->totalPayment; ?></td>
							<td><?= $d->totalRent - $d->totalPayment ?></td>
							<td><?= $d->status; ?></td>
							<td>
								<a href="<?=base_url()?>Tenant_Controller/report/<?= $rslt->id ?>" class="btn btn-success btn-xs" title="Edit">
									<span class="fa-edit">Details</span>
								</a>

							</td>
						</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- /.container-fluid -->
