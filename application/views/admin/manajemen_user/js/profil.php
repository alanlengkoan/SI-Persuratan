  <script type="text/javascript" src="<?= assets_url() ?>admin/menu_otoritas/jstree/dist/jstree.min.js"></script>
  <script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/select2/js/select2.full.min.js"></script>
  <script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/multiselect/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="<?= assets_url() ?>admin/assets/js/jquery.quicksearch.js"></script>
  <script type="text/javascript" src="<?= assets_url() ?>admin/assets/pages/advance-elements/select2-custom.js"></script>
  <script type="text/javascript" src="<?= assets_url() ?>admin/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

  <script type="text/javascript">
      $('#m_a').jstree({
          "checkbox": {
              "keep_selected_style": false
          },
          "plugins": ["checkbox"],
          "core": {
              "themes": {
                  "icons": false
              }
          }
      });

      //function val change and edit
      $('#m_a').on('changed.jstree', function(e, data) {
          nodesOnSelectedPath = [...data.selected.reduce(function(acc, nodeId) {
              var node = data.instance.get_node(nodeId);
              return new Set([...acc, ...node.parents, node.id]);
          }, new Set)];
          akses = nodesOnSelectedPath.join(',');
          $('#akses_menu').val(akses.toString());

      });

      $('#m_a').jstree(true).open_all();
      $('li[data-checkstate="checked"]').each(function() {
          $('#m_a').jstree('check_node', $(this));
      });
      $('#m_a').jstree(true).close_all();

      var UntukTambahDanUbahData = function() {

          //   var parsleyConfig = {
          //       errorsContainer: function(parsleyField) {
          //           var $err = parsleyField.$element.siblings('#error');
          //           return $err;
          //       }
          //   }

          //   $('#this_form').parsley(parsleyConfig);


          $('#level').attr('required', 'required');
          $('#deskripsi').attr('required', 'required');
          $('#akses_menu').attr('required', 'required');

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
  </script>