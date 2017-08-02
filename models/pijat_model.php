<?php
function select_pijat_details($id){
  $query = mysql_query("SELECT a.*, b.item_name, c.satuan_name FROM pijat_details a
                        LEFT JOIN item b ON b.item_id = a.item
                        left join satuan c on c.satuan_id = a.satuan
                        WHERE a.pijat = '$id'");
  return $query;
}

function delete_pijat_item($id){
	mysql_query("delete from pijat_details where pijat_detail_id = '$id'");
}

function delete ($id){
	mysql_query("delete from pijat where pijat_id = '$id'");
}

function select_satuan_item($id)
{
	$query = "SELECT a.item_satuan, b.satuan_name FROM item a 
							LEFT JOIN satuan b ON b.satuan_id = a.item_satuan
							WHERE a.item_id = '$id'
							UNION 
							SELECT c.satuan_konversi, d.satuan_name FROM konversi_item c
							LEFT JOIN satuan d ON d.satuan_id = c.satuan_konversi
							WHERE c.item_id = '$id'";
	$queryr = mysql_query($query);
	return $queryr;
}
 ?>
