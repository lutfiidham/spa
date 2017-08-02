<?php
$con = mysql_connect("localhost","jasasoft_spa","Tp#R~q@ha*z[");
mysql_select_db("jasasoft_spa", $con);

$item = $_GET['item'];
$sql = "select item_satuan, item_id from item where item_id ='$item'";
$hs = mysql_query(mysql_fetch_array($sql));
$satuan = $hs['item_satuan'];
$query = mysql_query("select * FROM satuan WHERE satuan_id = '$satuan'");
echo "<option>-- Pilih Kecamatan --</option>";
while($k = mysql_fetch_array($query)){
    echo "<option value=\"".$k['satuan_id']."\">".$k['satuan_name']."</option>\n";
}

?>