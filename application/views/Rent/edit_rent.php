<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<!--  <h1 class="h3 mb-0 text-gray-800">Add Tenant</h1> -->
	<div class="alert alert-warning">Please input valid information!!!</div>
	<a href="<?=base_url();?>rents" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Back</a>
</div>

<!-- Content Row -->
<div class="row">




	<div class="col-sm-6  " style="margin: 0 auto; ">

		<div class="card ">

			<div class="card-header">
				<h4>Edit Rent  </h4>
			</div>

			<div class="card-body ">
				<?php echo form_open('Rent_controller/updateRentInfo'); ?>


				<div class="form-group row">
					<label for="t_id" class="col-sm-3 control-label"> Tenant name </label>
					<div class="col-sm-9">
						<select name="t_id" class="form-control" >
							<option >--Select--</option>
							<?php foreach($tenantNames as $tname){ ?>
								<option value="<?=$tname->id; ?>" <?= $tname->name == $tname->id ? "selected":""; ?>> <?= $tname->name ?> </option>
							<?php  } ?>
						</select>
						<?php echo form_error('t_id','<div class="text-danger">', '</div>' );?>
					</div>
				</div>


				<div class="form-group row">
					<label for="cat_name" class="col-sm-3 control-label"> House No </label>
					<div class="col-sm-9">
						<select name="house_no" class="form-control" >
							<option >--Select--</option>
							<?php foreach($houses as $house): ?>
								<option value="<?=$house->id; ?>" <?=$house->house_no == $house->id?"selected":""; ?>> <?= $house->house_no ?> </option>
							<?php endforeach; ?>
						</select>
						<?php echo form_error('house_no','<div class="text-danger">', '</div>' );?>
					</div>
				</div>

				<!--          <div class="form-group row">-->
				<!--            <label for="cat_name" class="col-sm-3">Month</label>-->
				<!--            <div class="col-sm-9">-->
				<!--              --><?php //echo form_input(['name'=>'month','class'=>'form-control','value'=>set_value('month')]); ?>
				<!--              --><?php //echo form_error('month','<div class="text-danger">', '</div>');?>
				<!--            </div>-->
				<!--          </div>-->

				<div class="form-group row">
					<label for="cat_name" class="col-sm-3 control-label"> Month </label>
					<div class="col-sm-9">
						<select name="month" class="form-control" >
							<option >--Select--</option>
							<option value="Jan" <?= $data->month=="Jan"? "selected" : "";?> >January</option>
							<option value="Feb" <?= $data->month=="Feb"? "selected" : "";?> >February</option>
							<option value="Mar"<?= $data->month=="Mar"? "selected" : "";?>>March</option>
							<option value="Apr"<?= $data->month=="Apr"? "selected" : "";?>>April</option>
							<option value="May"<?= $data->month=="May"? "selected" : "";?>>May</option>
							<option value="Jun"<?= $data->month=="Jun"? "selected" : "";?>>June</option>
							<option value="Jul"<?= $data->month=="Jul"? "selected" : "";?>>July</option>
							<option value="Aug"<?= $data->month=="Aug"? "selected" : "";?>>August</option>
							<option value="Sep"<?= $data->month=="Sep"? "selected" : "";?>>September</option>
							<option value="Oct"<?= $data->month=="Oct"? "selected" : "";?>>October</option>
							<option value="Nov"<?= $data->month=="Nov"? "selected" : "";?>>November</option>
							<option value="Dec"<?= $data->month=="Dec"? "selected" : "";?>>December</option>
						</select>
						<?php echo form_error('t_id','<div class="text-danger">', '</div>' );?>
					</div>
				</div>



				<div class="form-group row">
					<label for="cat_name" class="col-sm-3">Year</label>
					<div class="col-sm-9">
						<?php echo form_input(['name'=>'year','class'=>'form-control','value'=>set_value('year',$data->year)]); ?>
						<?php echo form_error('year','<div class="text-danger">', '</div>');?>
					</div>
				</div>




				<div class="form-group row">
					<label for="cat_name" class="col-sm-3"> Rent </label>
					<div class="col-sm-9">
						<?php echo form_input(['name'=>'rent','class'=>'form-control','value'=>set_value('rent',$data->rent)]); ?>
						<?php echo form_error('rent','<div class="text-danger">', '</div>' );?>
					</div>
				</div>

				<div class="form-group row">
					<label for="cat_name" class="col-sm-3"> Electric_bill </label>
					<div class="col-sm-9">
						<?php echo form_input(['name'=>'elc_bill','class'=>'form-control','value'=>set_value('elc_bill',$data->elc_bill)]); ?>
						<?php echo form_error('elc_bill','<div class="text-danger">', '</div>' );?>
					</div>
				</div>

				<div class="form-group row">
					<label for="cat_name" class="col-sm-3"> Gas_bill </label>
					<div class="col-sm-9">
						<?php echo form_input(['name'=>'gass_bill','class'=>'form-control','value'=>set_value('gass_bill',$data->gass_bill)]); ?>
						<?php echo form_error('gass_bill','<div class="text-danger">', '</div>' );?>
					</div>
				</div>


				<div class="form-group row">
					<label  class="col-sm-3"></label>
					<div class="col-sm-9">
						<button type="submit" class="btn btn-success btn-block">Update </button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>

	</div>


</div>
<!-- /.container-fluid -->
