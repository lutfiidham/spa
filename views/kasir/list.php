
                <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Simpan Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Edit Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 3){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

            <div class="title_page"> <?= $title ?></div>

                    <div class="box">

                        <div class="box-body2 table-responsive">
                            <div class="col-xs-12">
                                <table id="example13" class="table table-bordered table-striped" style="border: 1px in">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama </th>
                                        <th>Telepon</th>
                                        <th>Alamat</th>
                                        <th>Pijat</th>
                                        <th>Config</th> 
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $no = 1;
                                    while($row = mysql_fetch_array($query)){
                                    ?>
                                    <tr>
                                        <td><?= $no?></td>
                                        <td><?= $row['member_name']?></td>
                                        <td><?= $row['phone']?></td>
                                        <td><?= $row['address']?></td>
                                        <td><?= $row['pijat_name']?></td>
                                        <td style="text-align:center;">

                                            <a href="kasir.php?page=list&id=<?= $row['reserved_id']?>" class="btn btn-default" title="Detail Transaksi"><i class="fa fa-eye"></i></a>
                                            <a href="kasir.php?page=edit_transaction&id=<?= $row['reserved_id']?>" class="btn btn-default" title="Bayar"><i class="fa fa-credit-card"></i></a>
                                            <a href="javascript:void(0)" onclick="confirm_delete(<?= $row['reserved_id']; ?>,'kasir.php?page=delete&id=')" class="btn btn-default" title="Print Bill"><i class="fa fa-print"></i></a>

                                        </td> 
                                    </tr>
                                    <?php
                                    $no++;
                                    }
                                    ?>



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6">&nbsp;</td>
                                    </tr>
                                </tfoot>
                            </table>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content --><script>
$(document).ready(function() {
    $('#example13').DataTable( {
        "scrollX": true,
		"scrollY": true,
		"paging":   true,
        "ordering": true,
        "searching": true,
        "info":     false
    } );
} );
</script>