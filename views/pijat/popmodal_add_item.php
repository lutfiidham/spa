<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title"><?= $pijat_name?></h4>
</div>
<form class="" action="<?= $action?>" method="post">
  <div class="modal-body">
    <div class="form-group">
      <label for="">Nama Item : </label>
      <input type="hidden" name="pijat_id" value="<?= $id?>">
      <select class="selectpicker form-control" id="i_item_id" name="item_id" onchange="set_item_satuan()">
        <option value="0"></option>
        <?php while ($r_item = mysql_fetch_array($q_item)) {?>
          <option value="<?= $r_item['item_id']?>"
            <?php if ($row->item == $r_item['item_id']){echo "selected";} ?>><?= $r_item['item_name']?></option>
        <?} ?>
      </select>
    </div>
     <div class="form-group">
      <label for="">Nama satuan : </label>
      <input type="hidden" name="pijat_id" value="<?= $id?>">
	  <select id="i_satuan_id" name="satuan_id" size="1" class="form-control" ></select>
    </div>
    <div class="form-group">
      <label for="">Jumlah : </label>
      <input required type="textarea" name="item_jml_currency" id="item_jml_currency"
      class="form-control number_only" placeholder="Masukkan harga ..." onkeyup="number_currency(this);"
      value="<?= number_format($row->item_qty) ?>"/>
      <input type="hidden" id="item_jml" name="item_jml" class="form-control" value="">
    </div>
  </div>
  <div class="modal-footer">
    <button type="submit" name="button" class="btn btn-danger">Simpan</button>
    <button type="button" data-dismiss="modal" class="btn btn-default" >Close</a>
  </div>
</form>
<script type="text/javascript">
  $(document).ready(function(){
    $('.selectpicker').selectpicker('refresh');
  });
</script>
<script type="text/javascript">
        function set_item_satuan()
        {
          var item_id = $('#i_item_id').val();
          // alert(item_id);
          $.ajax({
            type        : "post",
            url         : "pijat.php?page=get_satuan_id",
            data        : {item_id:item_id},
            dataType    : "json",
            success: function(data){
              $('#i_satuan_id').empty();
              $('#i_satuan_id').append('<option value="0"></option>');

              for (var i = 0; i < data.length; i++) {
                $('#i_satuan_id').append('<option value="'+data[i].item_satuan+'">'+data[i].satuan_name+'</option>');
              }

            },
            error: function(data)
            {
              alert("error");
            }
          });
        }
      </script>