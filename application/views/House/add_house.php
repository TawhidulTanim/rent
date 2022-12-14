   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4" xmlns="http://www.w3.org/1999/html">
            <h1 class="h3 mb-0 text-gray-800">Tenant Page</h1>
            <a href="<?=base_url();?>house" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Back </a>
          </div>

          <!-- Content Row -->
          <div class="row">
          
            


    <div class="col-sm-6  " style="margin: 0 auto; ">

      <div class="card ">

        <div class="card-header">
          <h4>Add House  </h4>
        </div>

        <div class="card-body ">


          <?php echo form_open('House_controller/saveHouse'); ?>
          <div class="form-group row">
            <label for="name" class="col-sm-3"> House No  </label>
            <div class="col-sm-9">
              <?php echo form_input(['name'=>'house','class'=>'form-control','value'=>set_value('house')]); ?>
              <?php echo form_error('name','<div class="text-danger">', '</div>' );?>
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
