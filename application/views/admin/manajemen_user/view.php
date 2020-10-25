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
                            <div class="tab-header card">
                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#manajemen_user" role="tab">Manajemen User</a>
                                        <div class="slide"></div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#user" role="tab">Daftar User</a>
                                        <div class="slide"></div>
                                    </li>

                                </ul>
                            </div>
                            <div class="card">
                                <div class="tab-content">
                                    <!-- tab panel manajemen_user start -->
                                    <div class="tab-pane active" id="manajemen_user" role="tabpanel">
                                        <!-- manajemen_user card start -->
                                        <div class="card-header">
                                            <h5>Form Manjement User</h5>
                                        </div>
                                        <div class="card-block">
                                            <form action="">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">NIP</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">User Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Pilih User Profil</label>
                                                    <div class="col-sm-10">
                                                        <select class="js-example-basic-single" style="width: 100%;">
                                                            <option value="AL">Alabama</option>
                                                            <option value="WY">Wyoming</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Pilih Instansi</label>
                                                    <div class="col-sm-10">
                                                        <select class="js-example-basic-single" style="width: 100%;">
                                                            <option value="AL">Alabama</option>
                                                            <option value="WY">Wyoming</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Pilih Jabatan</label>
                                                    <div class="col-sm-10">
                                                        <select class="js-example-basic-single" style="width: 100%;">
                                                            <option value="AL">Alabama</option>
                                                            <option value="WY">Wyoming</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Repeat Password</label>
                                                    <div class="col-sm-10">
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
                                        <!-- manajemen_user card end-->
                                    </div>
                                    <!-- tab pane manajemen_user end -->
                                    <!-- tab pane info start -->
                                    <div class="tab-pane" id="user" role="tabpanel">
                                        <!-- info card start -->
                                        <div class="card-header">
                                            <h5>Daftar User</h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive dt-responsive">
                                                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th class="center">Status</th>
                                                            <th class="center">NIP</th>
                                                            <th class="center">User Name</th>
                                                            <th class="center">Profil</th>
                                                            <th class="center">Nama</th>
                                                            <th class="center">Jabatan</th>
                                                            <th class="center">Instansi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- info card end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-body start -->
        </div>
    </div>
    <!-- Main-body end -->
</div>