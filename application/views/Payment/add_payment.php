<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<!--  <h1 class="h3 mb-0 text-gray-800">Add Tenant</h1> -->
	<div class="alert alert-warning">Please input valid information!!!</div>
	<a href="<?=base_url();?>payment" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Back</a>
</div>

<!-- Content Row -->
<div class="row">



	<div class="col-sm-6  " style="margin: 0 auto; ">

		<div class="card ">

			<div class="card-header">
				<h4>Add Payment  </h4>
			</div>

			<div class="card-body ">
				<?php echo form_open('Payment_controller/savePayment'); ?>

				<div class="form-group row">
					<label for="cat_name" class="col-sm-3 control-label"> Tenant name </label>
					<div class="col-sm-9">
						<select name="t_id" class="form-control" >
							<option >--Select--</option>
							<?php foreach($tenantNames as $tname): ?>
								<option value="<?=$tname->id; ?>"><?= $tname->name;?></option>
							<?php  endforeach; ?>
						</select>
						<?php echo form_error('t_id','<div class="text-danger">', '</div>' );?>
					</div>
				</div>


				<div class="form-group row">
					<label for="cat_name" class="col-sm-3 control-label">Rent Id</label>
					<div class="col-sm-9">
						<select name="r_id" class="form-control" >
							<option >--Select--</option>
							<?php foreach($rents as $rent){ ?>
								<option value="<?=$rent->id; ?>"><?= $rent->month;?> - <?= $rent->year;?> - <?= $rent->rent + $rent->elc_bill + $rent->gass_bill;?></option>
							<?php } ?>
						</select>
						<?php echo form_error('r_id','<div class="text-danger">', '</div>' );?>
					</div>
				</div>

				<div class="form-group row">
					<label for="cat_name" class="col-sm-3 control-label"> House No </label>
					<div class="col-sm-9">
						<select name="house_no" class="form-control" >
							<option >--Select--</option>
							<?php foreach($houses as $house): ?>
								<option value="<?= $house->id; ?>"><?= $house->house; ?></option>
							<?php endforeach; ?>
						</select>
						<?php echo form_error('house','<div class="text-danger">', '</div>' );?>
					</div>
				</div>
				<div class="form-group row">
					<label for="cat_name" class="col-sm-3 control-label"> Month </label>
					<div class="col-sm-9">
						<select name="month" class="form-control" >
							<option >--Select--</option>
							<option value="Jan">January</option>
							<option value="Feb">February</option>
							<option value="Mar">March</option>
							<option value="Apr">April</option>
							<option value="May">May</option>
							<option value="Jun">June</option>
							<option value="Jul">July</option>
							<option value="Aug">August</option>
							<option value="Sep">September</option>
							<option value="Oct">October</option>
							<option value="Nov">November</option>
							<option value="Dec">December</option>
						</select>
						<?php echo form_error('t_id','<div class="text-danger">', '</div>' );?>
					</div>
				</div>



				<div class="form-group row">
					<label for="cat_name" class="col-sm-3">Year</label>
					<div class="col-sm-9">
						<?php echo form_input(['name'=>'year','class'=>'form-control','value'=>set_value('year')]); ?>
						<?php echo form_error('year','<div class="text-danger">', '</div>');?>
					</div>
				</div>
				
				<div class="form-group row">
					<label for="cat_name" class="col-sm-3"> Pay </label>
					<div class="col-sm-9">
						<?php echo form_input(['name'=>'pay','class'=>'form-control','value'=>set_value('pay')]); ?>
						<?php echo form_error('pay','<div class="text-danger">', '</div>' );?>
					</div>
				</div>
				<div class="form-group row">
					<label  class="col-sm-3"></label>
					<div class="col-sm-9">
						<button type="submit" class="btn btn-success btn-block">Save </button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>

	</div>


</div>
<!-- /.container-fluid -->
