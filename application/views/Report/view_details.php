<div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title"> Profile</h5>
              </div>
              <div class="card-body">
              
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control"   value="<?= $data->name ?>">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Contact</label>
                        <input type="text" class="form-control"  value="<?= $data->contact ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">NID</label>
                        <input type="text" class="form-control" value="<?= $data->nid ?>">
                      </div>
                    </div>
                  </div>
                 <!--  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Company" value="Chet">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                      </div>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control"  value="<?= $data->address ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" placeholder="City" value="<?= $data->gender ?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>House No</label>
                        <input type="text" class="form-control" placeholder="Country" value="<?= $data->room ?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Type</label>
                        <input type="number" class="form-control"value="<?= $data->type ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                  
                    <?= anchor('Report_Controller/index','Go Back',['class'=>'btn btn-primary btn-round']) ?>
                    </div>
                  </div>
               
              </div>
            </div>
          </div>