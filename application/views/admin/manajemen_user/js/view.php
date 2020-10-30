<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/assets/pages/advance-elements/select2-custom.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/switchery/js/switchery.min.js"></script>
<script type="text/javascript">
  var elemsingle = document.querySelector('.js-single');
  var switchery = new Switchery(elemsingle, {
    color: '#4099ff',
    jackColor: '#fff'
  });
</script>
<script>
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

  var UntukAddDataUpdateData = function() {
    $(document).on("submit", "#this_form", function(e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "<?= admin_url() ?>/manajemen_user/simpan_data",
        processData: false,
        contentType: false,
        data: new FormData(document.getElementById('this_form')),
        success: function(data) {
          if (data == "data_insert") swal("", "Data berhasil disimpan!", "success").then(function() {
            location.reload();
          });
          else swal("", "Data berhasil diupdate!", "success").then(function() {
            location.reload();

          });
        }
      });
    });
  }();

  var UntukGetDataByID = function() {
    $(document).on('click', '#upd', function() {
      var ini = $(this);
      var csrfName = $('#_csrf_token').attr('name');
      var csrfHash = $('#_csrf_token').val();
      $.ajax({
        type: "post",
        url: "<?= admin_url() ?>/manajemen_user/get",
        data: {
          id: ini.data('id_users'),
          [csrfName]: csrfHash
        },
        dataType: "json",
        success: function(data) {
          $('#_csrf_token').val(data.token);

          $('#username').val(data.username);
          $('#nama_lengkap').val(data.nama);
          $('#user_profil').val(data.id_users_profil);
          $('#instansi').val(data.id_instansi);
          $('#jabatan').val(data.id_jabatan);
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
        url: "<?= admin_url() ?>/manajemen_user/update_status",
        data: {
          'status_aktif': status,
          'id_users': id_users,
          [csrfName]: csrfHash,
        },
        dataType: "json",
        success: function(data) {
          $('#_csrf_token').val(data.token);
          if (data.status == true) {
            swal("", "Data berhasil diupdate!", "success").then(function() {});
          } else {
            swal("", "Data gagal diupdate!", "error").then(function() {});
          }
        }
      });
    });
  }();
</script>