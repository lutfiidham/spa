<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<form class="" id="form_add_ruangan">
  <div class="modal-body">
    <label for="" style="font-size:12px;color:#000;font-family:arial;">Cabang</label>
    <select class="selectpicker form-control" id="" name="cabang_id">
      <option value="0"></option><?php
                                           while($r_branch = mysql_fetch_array($query_branch)){
                                            ?>
                                             <option value="<?= $r_branch['branch_id'] ?>"><?= $r_branch['branch_name']?></option>
                                             <?php
                                             }
                                             ?>
    </select>
    <div class="form-group">
      <label for="" style="font-size:12px;color:#000;font-family:arial;">Nama Ruangan</label>
      <input required type="text" name="i_room_name" class="form-control" placeholder="Masukkan nama ruang..." />
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" name="button" class="btn btn-warning" onclick="add_ruangan()">Simpan</button>
  </div>
</form>

<script type="text/javascript">
function add_ruangan(){
    $.ajax({
      type    : 'POST',
      url     : 'infrastruktur_setting.php?page=save_room',
      data    : $('#form_add_ruangan').serialize(),
      dataType: 'json'
    });
  }
</script>