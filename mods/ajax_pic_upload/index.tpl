<script>
  (function() {
    let config = JSON.parse('{CONFIG}');
    TPL.el_id = $.extend({ajax_load_pic_btn: 'AJAX загрузка картинки'}, TPL.el_id);
    ajax.upload_pic = el => {
      let $el = $(el),
        $form = $el.closest('form');
      $.ajax({
        url: '/mods/{MODNAME}/ajax.php',
        type: 'POST',
        dataType: 'json',
        contentType: false,
        data: new FormData($form[0]),
        processData: false,
        success: data => {
          $form.closest('.rel-el').prev().filter('input').val(data.url);
          data.error_msg && alert(data.error_msg);
        },
        complete: () => {
          $el.val('');
        }
      });
    };
  })();
</script>
<div id="ajax_load_pic_btn" style="display: none">
  <form>
    <select name="service">
      {OPTIONS}
    </select>
    <input type="number" name="size" min="0" value="{SIZE}" style="width: 4em" />
    <input type="file" name="img" onchange="ajax.upload_pic(this)" />
    <input type="hidden" name="action" value="upload" />
  </form>
</div>
