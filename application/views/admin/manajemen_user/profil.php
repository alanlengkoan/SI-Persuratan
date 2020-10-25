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
                                    <form action="" name="this_form" id="this_form">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="">Level</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="level" id="level" value="<?= $edit_data['level'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label" for="">Deskripsi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="deskripsi" id="deskripsi" value="<?= $edit_data['deskripsi'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-4">
                                                <input type="hidden" id="akses_menu" name="akses_menu" class="form-control">
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="hidden" id="id_user_level" name="id_user_level" value="<?= $edit_data['id_level'] ?>" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button name="submit" id="submit" class="btn btn-sm btn-primary m-b-0">
                                                    <i class="icon-check2"></i> Submit
                                                </button>
                                            </div>
                                        </div>
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

                                            echo open_parent_head_edit('', 'Manajemen Sistem');
                                            echo child_edit($akses_menu, 'Konfigurasi User', 'konfigurasi_user', '', '');
                                            echo child_edit($akses_menu, 'User Profil', 'user_profil', '', '');
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
                                                    <th class="center">No</th>
                                                    <th class="center">Level</th>
                                                    <th class="center">Deskripsi</th>
                                                    <th class="center">Hak Akses</th>
                                                    <th class="center">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $a = 1;
                                                foreach ($profil as $dt) { ?>

                                                    <tr>
                                                        <td class="center"><?= $a++ ?></td>
                                                        <td class="center"><?= $dt->level ?></td>
                                                        <td class="center"><?= $dt->deskripsi ?></td>
                                                        <td class="center"><?= $dt->hak_akses ?></td>
                                                        <td class="center">
                                                            <a href="<?= admin_url() ?>/profil_user/edit?id=<?= $dt->id_users_level ?>" class="btn btn-sm m-b-0">
                                                                <i class="fa fa-pencil-square-o"></i>
                                                            </a>
                                                        </td>
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