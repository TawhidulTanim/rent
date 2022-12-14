<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<!-- <h1 class="h3 mb-0 text-gray-800"> Rents</h1> -->
	<a href="<?=base_url();?>add-payment" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Add </a>
</div>

<!-- Content Row -->
<div class="row">
	<div class="col-sm-12" style="margin: 0 auto; ">
		<?php if ($this->session->flashdata('msg')) echo $this->session->flashdata('msg');  ?>
		<div class="card ">

			<div class="card-header">
				<h4> Payments  </h4> <hr>
			</div>

			<div class="card-body ">
				<table class="table table-bordered table-striped text-center">
					<tr class="text-center">
						<th>Sl.</th>
						<th>Tenant name</th>
						<th>House No</th>
						<th>Month</th>
						<th>Year</th>
						<th>Payment</th>
						<th>Action</th>
					</tr>

					<?php foreach ($rslts as $i=>$rslt) {?>
						<tr>
							<td><?= $i+1; ?></td>
							<td><?= $rslt->name; ?></td>
							<td><?= $rslt->house_no; ?></td>
							<td><?= $rslt->month; ?></td>
							<td><?= $rslt->year; ?></td>
							<td><?= $rslt->pay; ?></td>
							<td>
								<!--<a href="<?=base_url()?>payment_controller/editpaymentInfo/<?= $rslt->id ?>" class="btn btn-success btn-xs" title="Edit">
									<span class="fa-edit">edit</span>
								</a>-->

								<a href="<?=base_url()?>payment_Controller/deletePaymentInfo/<?= $rslt->id ?>" onClick="return confirm('Are sure want to delete?') "; class="btn btn-danger btn-xs" title="Delete">
									Delete
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
