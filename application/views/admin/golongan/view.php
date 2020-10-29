<div class="pcoded-content">
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

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <!-- begin:: tombol tambah data -->
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-input" data-backdrop="static" data-keyboard="false" class="btn btn-success btn-sm">
                                        <i class="fa fa-plus"></i>&nbsp;Tambah
                                    </button>
                                    <!-- end:: tombol tambah data -->
                                </div>
                                <div class="card-block">
                                    <!-- begin:: tabel -->
                                    <div class="dt-responsive table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Aksi</th>
                                                    <th>Kode</th>
                                                    <th>Nama</th>
                                                    <th>Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($data as $row) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td align="center">
                                                            <button class="btn btn-primary btn-sm" id="upd" data-id="<?= $row->kd ?>"><i class="fa fa-edit"></i>&nbsp;Ubah</button>
                                                        </td>
                                                        <td><?= $row->kd ?></td>
                                                        <td><?= $row->nama ?></td>
                                                        <td><?= $row->keterangan ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end:: tabel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="styleSelector">

        </div>
    </div>
</div>

<div class="modal fade" id="modal-input" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Golongan</h4>
            </div>
            <form action="<?= admin_url() ?>/golongan/add" method="POST" id="form-add">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode</label>
                        <div class="col-sm-10">
                            <input type="text" name="inpkode" id="inpkode" class="form-control" value="<?= getKodeOtomatis('golongan', 'GO') ?>" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="inpnama" id="inpnama" class="form-control" placeholder="Masukkan golongan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea name="inpketerangan" id="inpketerangan" class="form-control" placeholder="Masukkan keterangan"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="cls" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
                    <button type="submit" id="add" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>