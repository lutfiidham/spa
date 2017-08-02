<?php

function select(){
	$query = mysql_query("select a.* 
							from pemijat a
							
							order by pemijat_id");
	return $query;
}

function select_branch(){
	$query = mysql_query("select * from pemijat order by pemijat_id ");
	return $query;
}


function read_id($id){
	$query = mysql_query("select *
			from pemijat
			where pemijat_id = '$id'");
	$result = mysql_fetch_object($query);
	return $result;
}


function create($data){
	mysql_query("insert into pemijat values(".$data.")");
}

function update($data, $id){
	mysql_query("update pemijat set ".$data." where pemijat_id = '$id'");
}

function delete($id){
	mysql_query("delete from pemijat where pemijat_id = '$id'");
}



?>