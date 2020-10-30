<script src="<?= assets_url() ?>admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= assets_url() ?>admin/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= assets_url() ?>admin/assets/pages/data-table/js/jszip.min.js"></script>
<script src="<?= assets_url() ?>admin/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="<?= assets_url() ?>admin/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="<?= assets_url() ?>admin/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= assets_url() ?>admin/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= assets_url() ?>admin/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= assets_url() ?>admin/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= assets_url() ?>admin/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

<script>
    // untuk datatable
    var untukTabel = function() {
        $('#datatable').DataTable();
    }();

    // untuk ambil data by id
    var untukGetIdData = function() {
        $(document).on('click', '#upd', function() {
            var ini = $(this);
            var csrfName = $('#_csrf_token').attr('name');
            var csrfHash = $('#_csrf_token').val();

            $.ajax({
                type: "post",
                url: "<?= admin_url() ?>/golongan/get",
                dataType: 'json',
                data: {
                    id: ini.data('id'),
                    [csrfName]: csrfHash
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class="fa fa-spinner"></i>&nbsp;Menunggu...');
                },
                success: function(data) {
                    $('#_csrf_token').val(data.token);
                    
                    $('#modal-input').modal({
                        backdrop: 'static',
                        keyboard: false
                    })

                    $('.modal-title').html('Ubah Golongan');

                    $('form').attr('action', '<?= admin_url() ?>/golongan/upd');

                    $('#inpkode').val(data.kd);
                    $('#inpnama').val(data.nama);
                    $('#inpketerangan').val(data.keterangan);
                    $('#modal-input').modal('show');

                    ini.removeAttr('disabled');
                    ini.html('<i class="fas fa-edit"></i>&nbsp;Ubah');
                }
            });
        });
    }();

    // untuk ambil data by id
    var untukBersihkanModal = function() {
        $(document).on('click', '#cls', function() {
            var ini = $(this);

            $('.modal-title').html('Tambah Golongan');
            $('#inpkode').val('<?= getKodeOtomatis('golongan', 'GO') ?>');
            $('#inpnama').val('');
            $('#inpalamat').val('');
            $('#inpketerangan').val('');
        });
    }();

    // untuk simpan dan ubah data
    var untukTambahDanUbahData = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var $err = parsleyField.$element.siblings('#error');
                return $err;
            }
        }

        $('#form-add').parsley(parsleyConfig);

        $('#form-add').submit(function(e) {
            e.preventDefault();

            $('#inpnama').attr('required', 'required');
            $('#inpalamat').attr('required', 'required');
            $('#inpketerangan').attr('required', 'required');

            if ($('#form-add').parsley().isValid() == true) {
                $.ajax({
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        $('#add').attr('disabled', 'disabled');
                        $('#add').html('<i class="fa fa-spinner"></i>&nbsp;Menunggu...');
                    },
                    success: function(data) {
                        swal({
                                title: data.title,
                                text: data.text,
                                icon: data.type,
                                button: data.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                    }
                })
            }
        });
    }();
</script>