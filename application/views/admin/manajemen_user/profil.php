<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
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
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Form Profil User</h5>
                                </div>
                                <div class="card-block">
                                    <form action="<?= admin_url() ?>/profil_user/add" name="this_form" id="this_form" method="POST">
                                        <!-- begin:: input hidden -->
                                        <input type="hidden" id="id_user_level" name="id_user_level" value="<?= $edit_data['id_level'] ?>" />
                                        <input type="hidden" id="akses_menu" name="akses_menu" />
                                        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" id="_csrf_token" value="<?= $this->security->get_csrf_hash() ?>">
                                        <!-- end:: input hidden -->

                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="">Level *</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="level" id="level" value="<?= $edit_data['level'] ?>" class="form-control" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label" for="">Deskripsi *</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="deskripsi" id="deskripsi" value="<?= $edit_data['deskripsi'] ?>" class="form-control" required="required">
                                            </div>
                                        </div>

                                        <button id="add" class="btn btn-sm btn-primary m-b-0">
                                            <i class="fa fa-plus"></i> Submit
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Form Hak Akses User</h5>
                                </div>
                                <div class="card-block">
                                    <h6>Manajemen Aplikasi</h6>
                                    <div id="m_a">
                                        <ul>
                                            <?php
                                            $akses_menu = explode(",", $edit_data['hak_akses']);

                                            //Manajemen Sistem
                                            echo open_parent_head_edit('', 'Manajemen Sistem');
                                            echo child_edit($akses_menu, 'Konfigurasi User', 'konfigurasi_user', '', '');
                                            echo child_edit($akses_menu, 'User Profil', 'user_profil', '', '');
                                            echo close_parent_head_edit();

                                            //Master Data
                                            echo open_parent_head_edit('', 'Master');
                                            echo child_edit($akses_menu, 'Instansi', 'instansi', '', '');
                                            echo child_edit($akses_menu, 'Golongan', 'golongan', '', '');
                                            echo child_edit($akses_menu, 'Jabatan', 'jabatan', '', '');
                                            echo child_edit($akses_menu, 'Sifat', 'sifat', '', '');
                                            echo child_edit($akses_menu, 'Tujuan', 'tujuan', '', '');
                                            echo child_edit($akses_menu, 'Asal', 'asal', '', '');
                                            echo close_parent_head_edit();

                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Daftar Profil</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="dt-post" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Aksi</th>
                                                    <th>Level</th>
                                                    <th>Deskripsi</th>
                                                    <th>Hak Akses</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $a = 1;
                                                foreach ($profil as $dt) { ?>
                                                    <tr>
                                                        <td><?= $a++ ?></td>
                                                        <td>
                                                            <a href="<?= admin_url() ?>/profil_user/get?id=<?= $dt->id_users_level ?>" class="btn btn-primary btn-sm">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </a>
                                                        </td>
                                                        <td><?= $dt->level ?></td>
                                                        <td><?= $dt->deskripsi ?></td>
                                                        <td><?= $dt->hak_akses ?></td>

                                                    </tr>
                                                <?php  } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>