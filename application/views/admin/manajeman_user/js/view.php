  <script type="text/javascript" src="<?= base_url() ?>assets/admin/menu_otoritas/jstree/dist/jstree.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/admin/bower_components/select2/js/select2.full.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/admin/bower_components/multiselect/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/js/jquery.quicksearch.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/pages/advance-elements/select2-custom.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/admin/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

  <script>
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
  </script>