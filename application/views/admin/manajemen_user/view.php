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
                                        <a class="nav-link active" data-toggle="tab" href="#manajemen_users" role="tab">Manajemen User</a>
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
                                    <!-- tab panel manajemen_users start -->
                                    <div class="tab-pane active" id="manajemen_users" role="tabpanel">
                                        <!-- manajemen_users card start -->
                                        <div class="card-header">
                                            <h5>Form Manjement User</h5>
                                        </div>
                                        <div class="card-block">
                                            <form action="<?= admin_url() ?>/manajemen_user/add" name="this_form" id="this_form" method="POST">
                                                <!-- begin:: input hidden -->
                                                <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" id="_csrf_token" value="<?= $this->security->get_csrf_hash() ?>">
                                                <input type="hidden" name="id_users" id="id_users">
                                                <!-- end:: input hidden -->

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">User Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="username" id="username" placeholder="User Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">User Profil</label>
                                                    <div class="col-sm-10">
                                                        <select class="select2" name="user_profil" id="user_profil" style="width: 100%;">
                                                            <option value=""></option>
                                                            <?php foreach ($profil as $dt) : ?>
                                                                <option value="<?= $dt->id_users_level ?>"><?= $dt->level ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Instansi</label>
                                                    <div class="col-sm-10">
                                                        <select class="select2" name="instansi" id="instansi" style="width: 100%;">
                                                            <option value=""></option>
                                                            <?php foreach ($instansi as $dt) : ?>
                                                                <option value="<?= $dt->kd ?>"><?= $dt->nama ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Jabatan</label>
                                                    <div class="col-sm-10">
                                                        <select class="select2" name="jabatan" id="jabatan" style="width: 100%;">
                                                            <option value=""></option>
                                                            <?php foreach ($jabatan as $dt) : ?>
                                                                <option value="<?= $dt->kd ?>"><?= $dt->nama ?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Repeat Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" name="repeat_password" id="repeat_password" placeholder="Repeat Password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2"></label>
                                                    <div class="col-sm-10">
                                                        <button type="submit" id="add" class="btn btn-sm btn-success">
                                                            <i class="fa fa-save"></i> Simpan
                                                        </button>
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
                                                <table class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                            <th>User Name</th>
                                                            <th>Profil</th>
                                                            <th>Nama</th>
                                                            <th>Jabatan</th>
                                                            <th>Instansi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach ($data_user as $dt) { ?>
                                                            <tr>
                                                                <td>
                                                                    <input type="checkbox" id="update_status" class="js-single" <?= $dt->status_aktif == "1" ? 'checked' : false ?> data-status_aktif="<?= $dt->status_aktif ?>" data-id_users="<?= $dt->id_users ?>" />
                                                                </td>
                                                                <td align=" center">
                                                                    <button class="btn btn-primary btn-sm" id="upd" data-id_users="<?= $dt->id_users ?>"><i class="fa fa-edit"></i>&nbsp;Ubah</button>
                                                                </td>
                                                                <td><?= $dt->username ?></td>
                                                                <td><?= $dt->id_users_profil ?></td>
                                                                <td><?= $dt->nama ?></td>
                                                                <td><?= $dt->id_jabatan ?></td>
                                                                <td><?= $dt->id_instansi ?></td>
                                                            </tr>
                                                        <?php } ?>
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