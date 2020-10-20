  <div class="pcoded-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
          <div class="page-block">
              <div class="row align-items-center">
                  <div class="col-md-8">
                      <div class="page-header-title">
                          <h4 class="m-b-10"><?= $halaman ?></h4>
                      </div>
                      <ul class="breadcrumb">
                          <?= $breadcrumb ?>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <!-- [ breadcrumb ] end -->
      <div class="pcoded-inner-content">
          <!-- Main-body start -->
          <div class="main-body">
              <div class="page-wrapper">
                  <!-- Page-body start -->
                  <div class="page-body">
                      <div class="row">
                          <div class="col-sm-12">
                              <!-- Alert card start -->
                              <div class="card">
                                  <div class="card-header">
                                      <h5>Form Manjement User</h5>
                                  </div>
                                  <div class="card-block">
                                      <form action="">
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">NIP</label>
                                              <div class="col-sm-6">
                                                  <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">User Name</label>
                                              <div class="col-sm-6">
                                                  <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Pilih User Profil</label>
                                              <div class="col-sm-6">
                                                    <select class="js-example-basic-single col-sm-12">
                                                        <optgroup label="Developer">
                                                            <option value="AL">Alabama</option>
                                                            <option value="WY">Wyoming</option>
                                                        </optgroup>
                                                        <optgroup label="Designer">
                                                            <option value="WY">Peter</option>
                                                            <option value="WY">Hanry Die</option>
                                                            <option value="WY">John Doe</option>
                                                        </optgroup>
                                                    </select>
                                              </div>

                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Password</label>
                                              <div class="col-sm-6">
                                                  <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2 col-form-label">Repeat Password</label>
                                              <div class="col-sm-6">
                                                  <input type="text" class="form-control" name="repeat_password" id="repeat_password" placeholder="Repeat Password">
                                              </div>
                                          </div>
                                          <div class="form-group row">
                                              <label class="col-sm-2"></label>
                                              <div class="col-sm-10">
                                                  <button type="submit" class="btn btn-sm btn-primary m-b-0">Submit</button>
                                              </div>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                          <!-- Alert card end -->
                      </div>
                  </div>
              </div>
              <!-- Page-body start -->
          </div>
      </div>
      <!-- Main-body end -->

      <div id="styleSelector">

      </div>
  </div>
  </div>