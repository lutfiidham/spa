<?php
include '../lib/config.php';
include '../lib/function.php';
include '../models/pemijat_model.php';
$page = null;
$page = (isset($_GET['page'])) ? $_GET['page'] : "list";
$title = ucwords("Pemijat");

$_SESSION['menu_active'] = 1;

switch ($page) {
	case 'list':
		get_header($title);

		$query = select();
		$add_button = "pemijat.php?page=form";

		include '../views/pemijat/list.php';
		get_footer();
	break;

	case 'form':
		get_header();

		$close_button = "pemijat.php?page=list";

		$id = (isset($_GET['id'])) ? $_GET['id'] : null;
		if($id){

			$row = read_id($id);

			$action = "pemijat.php?page=edit&id=$id";
		} else {

			//inisialisasi
			$row = new stdClass();

			$row->pemijat_name = false;
			$row->pemijat_dateofbirth = false;
			$row->pemijat_phone = false;
			$row->pemijat_alamat = false;
			$row->pemijat_available = '1';

			$action = "pemijat.php?page=save";
		}

		include '../views/pemijat/form.php';
		get_footer();
	break;

	case 'save':

		extract($_POST);

		$i_name = get_isset($i_name);
		$i_address = get_isset($i_address);
		$i_phone = get_isset($i_phone);
		$i_datebirth = get_isset($i_datebirth);
		$date = str_replace('/', '-', $i_datebirth);
		$newdate = date('Y-m-d', strtotime($date));
		$data = "'',
					'$i_name',
					'$newdate',
					'$i_phone',
					'$i_address',
					'1'
			";

			//echo $data;

		create($data);

		header("Location: pemijat.php?page=list&did=1");


	break;

	case 'edit':

		extract($_POST);

		$id = get_isset($_GET['id']);
		$i_name = get_isset($i_name);
		$i_address = get_isset($i_address);
		$i_phone = get_isset($i_phone);
		$i_datebirth = get_isset($i_datebirth);
		$date = str_replace('/', '-', $i_datebirth);
		$newdate = date('Y-m-d', strtotime($date));

		$date = time();

		$data = "pemijat_name = '$i_name',
				pemijat_alamat = '$i_address',
				pemijat_phone = '$i_phone',
				pemijat_dateofbirth = '$newdate'

		";

		update($data, $id);

		header('Location: pemijat.php?page=list&did=2');

	break;

	case 'delete':

		$id = get_isset($_GET['id']);
		delete($id);
		header('Location: pemijat.php?page=list&did=3');

	break;
}

?>
