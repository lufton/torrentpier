<style>
  .rel-inputs.drag-over {
    border: dashed;
    border-radius: 5px;
  }
</style>
<script>
  (function() {
    let config = JSON.parse('{CONFIG}');
    TPL.el_id = $.extend({ajax_pic_upload: 'AJAX загрузка картинки'}, TPL.el_id);
    ajax.upload_pic = (el, file) => {
      let field = $(el),
        form = field.closest('form'),
        data = new FormData(form.get(0));
      if (file) data.set('img', file);
      $.ajax({
        url: '/mods/{MODNAME}/ajax.php',
        type: 'POST',
        dataType: 'json',
        contentType: false,
        data: data,
        processData: false,
        success: data => {
          form.closest('.rel-el').prev().filter('input').val(data.url);
          data.error_msg && alert(data.error_msg);
        },
        complete: () => {
          field.val('');
        }
      });
    };
    $('body')
      .on('drop', '.rel-inputs', e => {
        if ($(e.currentTarget).find('.ajax_pic_upload').length) {
          e.preventDefault();
          $(e.currentTarget).removeClass('drag-over');
          let files = e.originalEvent.dataTransfer.files,
            field = $(e.currentTarget).find('input[name=img]');
          if (files && files[0]) ajax.upload_pic(field.get(0), files[0]);
        }
      })
      .on('dragover', '.rel-inputs', e => {
        if ($(e.currentTarget).find('.ajax_pic_upload').length) {
          e.preventDefault();
          $(e.currentTarget).addClass('drag-over');
        }
      })
      .on('dragleave', '.rel-inputs', e => {
        if ($(e.currentTarget).find('.ajax_pic_upload').length) {
          $(e.currentTarget).removeClass('drag-over');
        }
      });
  })();
</script>
<div id="ajax_pic_upload" style="display: none">
  <form class="ajax_pic_upload">
    <select name="service">
      {OPTIONS}
    </select>
    <input type="number" name="size" min="0" value="{SIZE}" style="width: 4em" />
    <input type="file" name="img" onchange="ajax.upload_pic(this)" />
    <input type="hidden" name="action" value="upload" />
  </form>
</div>
