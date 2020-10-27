<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/assets/pages/advance-elements/select2-custom.js"></script>
<script type="text/javascript" src="<?= assets_url() ?>admin/bower_components/switchery/js/switchery.min.js"></script>
<script>
  var elemsingle = document.querySelector('.js-single');
  var switchery = new Switchery(elemsingle, {
    color: '#4099ff',
    jackColor: '#fff'
  });
</script>