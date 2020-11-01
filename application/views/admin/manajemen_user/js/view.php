<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/assets/pages/advance-elements/select2-custom.js"></script>
<!-- <script type="text/javascript" src="< ?= assets_url() ?>admin/assets/pages/advance-elements/swithces.js"></script> -->

<script>
  var elemsingle = document.querySelectorAll('.js-single');
  for (var i = 0; i < elemsingle.length; i++) {
    var switchery = new Switchery(elemsingle[i], {
      color: '#4099ff',
      jackColor: '#fff'
    });
  }

  $(document).ready(function() {
    $('#user_profil').select2({
      placeholder: "Pilih User",
    });

    $('#instansi').select2({
      placeholder: "Pilih Instansi",
    });

    $('#jabatan').select2({
      placeholder: "Pilih Jabatan",
    });
  });

  var UntukTambahDanUbahData = function() {

    //   var parsleyConfig = {
    //       errorsContainer: function(parsleyField) {
    //           var $err = parsleyField.$element.siblings('#error');
    //           return $err;
    //       }
    //   }

    //   $('#this_form').parsley(parsleyConfig);


    // $('#level').attr('required', 'required');
    // $('#deskripsi').attr('required', 'required');
    // $('#akses_menu').attr('required', 'required');

    //   if ($('#this_form').parsley().isValid() == true) {
    $(document).on("submit", "#this_form", function(e) {
      e.preventDefault();

      $.ajax({
        method: $(this).attr('method'),
        url: $(this).attr('action'),
        data: new FormData(this),
        processData: false,
        contentType: false,
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
      });

    });
    //   }
  }();

  var UntukGetDataByID = function() {
    $(document).on('click', '#upd', function() {
      $('.nav-tabs a:first').tab('show');
      var ini = $(this);
      var csrfName = $('#_csrf_token').attr('name');
      var csrfHash = $('#_csrf_token').val();

      $.ajax({
        type: "post",
        url: "<?= admin_url() ?>/manajemen_user/get",
        data: {
          id_users: ini.data('id_users'),
          [csrfName]: csrfHash,
        },
        dataType: "json",
        success: function(data) {
          $('#_csrf_token').val(data.token);

          $('#id_users').val(data.id_users);
          $('#username').val(data.username);
          $('#nama_lengkap').val(data.nama);
          $('#user_profil').val(data.id_users_profil);
          $('#instansi').val(data.id_instansi);
          $('#jabatan').val(data.id_jabatan);
          $('form').attr('action', '<?= admin_url() ?>/manajemen_user/upd');
        }
      });
    });
  }();

  var UntukUpdateStatusAktif = function() {
    $(document).on('change', '#update_status', function() {
      var id_users = $(this).data('id_users');
      var status_aktif = $(this).data('status_aktif');
      var status = (status_aktif == 0 ? '1' : '0');
      var csrfName = $('#_csrf_token').attr('name');
      var csrfHash = $('#_csrf_token').val();

      $.ajax({
        type: "post",
        url: "<?= admin_url() ?>/manajemen_user/updStatusAktif",
        dataType: "json",
        data: {
          'status_aktif': status,
          'id_users': id_users,
          [csrfName]: csrfHash,
        },
        success: function(data) {
          $('#_csrf_token').val(data.token);

          swal({
            title: data.title,
            text: data.text,
            icon: data.type,
            button: data.button,
          })
        }
      });
    });
  }();
</script>