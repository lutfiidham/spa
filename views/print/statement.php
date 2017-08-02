<?php
/**
require('../lib/fpdf/rounded_rect.php');

$pdf = new PDF();
$pdf->AddPage();
// form member
$pdf->SetFont('times','',10);
$pdf->SetXY(8,13);
$pdf->Cell(13,5,'Nama',0,0,'L');
$pdf->SetXY(7,14);
$pdf->Cell(30,5,'_____________________________________________________________________________________',0,0,'L');
$pdf->SetXY(8,20);
$pdf->Cell(13,5,'Email',0,0,'L');
$pdf->SetXY(7,21);
$pdf->Cell(30,5,'_____________________________________________________________________________________',0,0,'L');
$pdf->SetXY(8,28);
$pdf->Cell(13,5,'Phone',0,0,'L');
$pdf->SetXY(7,29);
$pdf->Cell(30,5,'_____________________________________________________________________________________',0,0,'L');
$pdf->SetXY(8,36);
$pdf->Cell(13,5,'Address',0,0,'L');
$pdf->SetXY(7,37);
$pdf->Cell(30,5,'_____________________________________________________________________________________',0,0,'L');
// isi member
$pdf->SetXY(30,13);
$pdf->Cell(70,5,$r_member_statement['member_name'],0,0,'L');
$pdf->SetXY(30,20);
$pdf->Cell(70,5,$r_member_statement['member_email'],0,0,'L');
$pdf->SetXY(30,28);
$pdf->Cell(70,5,$r_member_statement['member_phone'],0,0,'L');
$pdf->SetXY(30,36);
$pdf->Cell(70,5,$r_member_statement['member_alamat'],0,0,'L');

//titik dua
$pdf->SetFont('times','B',13);
$pdf->SetXY(25,13);
$pdf->Cell(13,5,':',0,0,'L');
$pdf->SetXY(25,20);
$pdf->Cell(13,5,':',0,0,'L');
$pdf->SetXY(25,28);
$pdf->Cell(13,5,':',0,0,'L');
$pdf->SetXY(25,36);
$pdf->Cell(13,5,':',0,0,'L');

//form statement
//bahasa inggris
$pdf->SetFont('times','',10);

//darah tinggi
$cek_darahtinggi = get_statement('tekanan', $statement_id);
if ($cek_darahtinggi == 1) {
	$yes = "4";
$pdf->SetXY(173,46);
$pdf->Cell(3,3,$yes,1,0);	
$pdf->SetXY(8,45);
$pdf->Cell(13,5,'Do you have or have you ever had high blood pressure? ',0,0,'UL');
$pdf->SetXY(8,49);
$pdf->Cell(13,5,'Apakah Anda mempunyai atau pernah mempunyai masalah tekanan darah tinggi? ',0,0,'L');
}


$pdf->SetXY(8,54);
$pdf->Cell(13,5,'Do you have asthma? ',0,0,'L');
$pdf->SetXY(8,62);
$pdf->Cell(13,5,'If so, do you use an inhaler that we need to have in hand during your treatment? ',0,0,'L');
$pdf->SetXY(8,71);
$pdf->Cell(13,5,'Are you currently experiencing neck and back problem?  ',0,0,'L');
$pdf->SetXY(8,80);
$pdf->Cell(13,5,'Do you have any skin conditions, cuts, bruises, injuries or infections?',0,0,'L');
$pdf->SetXY(8,89);
$pdf->Cell(13,5,'If yes, please list : ',0,0,'L');
$pdf->SetXY(8,90);
$pdf->Cell(30,5,'_____________________________________________________________________________________',0,0,'L');
$pdf->SetXY(8,100);
$pdf->Cell(13,5,'Do you have any health conditions beside the stated above that your therapist should be aware of?',0,0,'L');
$pdf->SetXY(8,109);
$pdf->Cell(13,5,'If yes, please list : ',0,0,'L');
$pdf->SetXY(8,110);
$pdf->Cell(30,5,'_____________________________________________________________________________________',0,0,'L');
$pdf->SetXY(8,120);
$pdf->Cell(13,5,'Do you have any allergies or are there any specific ingredients that may cause a reaction on your skin? ',0,0,'L');
$pdf->SetXY(8,129);
$pdf->Cell(13,5,'If yes, please list : ',0,0,'L');
$pdf->SetXY(8,130);
$pdf->Cell(30,5,'_____________________________________________________________________________________',0,0,'L');
$pdf->SetXY(8,140);
$pdf->Cell(13,5,'Are you pregnant or trying to get pregnant?',0,0,'L');
$pdf->SetXY(8,149);
$pdf->Cell(13,5,'If yes, how many weeks are you ?',0,0,'L');
$pdf->SetXY(8,150);
$pdf->Cell(30,5,'_____________________________________________________________________________________',0,0,'L');
$pdf->SetXY(8,160);
$pdf->Cell(13,5,'Do you wear contact lenses?',0,0,'L');
$pdf->SetXY(8,169);
$pdf->Cell(13,5,'If yes, do you need to take them out for facial treatment/any treatment?',0,0,'L');
$pdf->SetXY(8,178);
$pdf->Cell(13,5,'What is your pressure preference for massage used during treatment?',0,0,'L');
$pdf->SetXY(8,187);
$pdf->Cell(13,5,'Would you like to receive our special offers via email or text / WA messages? ',0,0,'L');
$pdf->SetXY(8,196);
$pdf->Cell(13,5,'I confirm, to the best knowledge that the answer I have given are correct',0,0,'L');
$pdf->SetXY(8,205);
$pdf->Cell(13,5,'I have not withheld any information that may be relevant to determine how my treatment is carried out',0,0,'L');
$pdf->SetXY(8,214);
$pdf->Cell(13,5,'I acknowledge that Zee Holistic Living accepts no liability for any injury or damage as a result of',0,0,'L');
$pdf->SetXY(8,217);
$pdf->Cell(13,5,'any treatment received',0,0,'L');

//bahasa indonesia
$pdf->SetFont('times','',9);
$pdf->SetXY(8,57);
$pdf->Cell(13,5,'Apakah Anda menderita asma? ',0,0,'L');
$pdf->SetXY(8,66);
$pdf->Cell(13,5,'Jika ya, apakah Anda perlu menggunakan inhaler saat perawatan berlangsung? ',0,0,'L');
$pdf->SetXY(8,75);
$pdf->Cell(13,5,'Apakah Anda sedang mengalami masalah leher dan punggung? ',0,0,'L');
$pdf->SetXY(8,84);
$pdf->Cell(13,5,'Apakah Anda memiliki masalah kulit, luka, cedera, atau infeksi? ',0,0,'L');
$pdf->SetXY(8,94);
$pdf->Cell(13,5,'Jika ya, tolong jabarkan ',0,0,'L');
$pdf->SetXY(8,104);
$pdf->Cell(13,5,'Apakah Anda memiliki masalah kesehatan selain yang telah disebutkan di atas dan perlu terapis Anda ketahui?',0,0,'L');
$pdf->SetXY(8,114);
$pdf->Cell(13,5,'Jika ya, tolong jabarkan ',0,0,'L');
$pdf->SetXY(8,124);
$pdf->Cell(13,5,'Apakah Anda memiliki alergi atau bahan-bahan tertentu yang dapat bereaksi terhadap kulit Anda? ',0,0,'L');
$pdf->SetXY(8,134);
$pdf->Cell(13,5,'Jika ya, tolong jabarkan ',0,0,'L');
$pdf->SetXY(8,144);
$pdf->Cell(13,5,'Apakah Anda sedang hamil atau sedang merencanakan kehamilan?',0,0,'L');
$pdf->SetXY(8,154);
$pdf->Cell(13,5,'Jika ya, berapa usia kandungan Anda?',0,0,'L');
$pdf->SetXY(8,164);
$pdf->Cell(13,5,'Apakah Anda menggunakan kontak lens?',0,0,'L');
$pdf->SetXY(8,173);
$pdf->Cell(13,5,'Jika ya, apakah Anda perlu melepasnya sebelum perawatan wajah atau perawatan lainnya?',0,0,'L');
$pdf->SetXY(8,182);
$pdf->Cell(13,5,'Bagaimana level tekanan pijatan yang Anda inginkan saat perawatan? ',0,0,'L');
$pdf->SetXY(8,191);
$pdf->Cell(13,5,'Apakan Anda ingin mendapatkan penawaran spesial kami melalui email atau pesan SMS / WA? ',0,0,'L');
$pdf->SetXY(8,200);
$pdf->Cell(13,5,'Saya menyatakan bahwa jawaban yang saya berikan adalah benar',0,0,'L');
$pdf->SetXY(8,209);
$pdf->Cell(13,5,'Saya tidak menyembunyikan informasi apapun yang mungkin relevan untuk menentukan bagaimana perawatan saya dilakukan',0,0,'L');
$pdf->SetXY(8,221);
$pdf->Cell(13,5,'Saya mengetahui bahwa Zee Holistic Living tidak bertanggung jawab atas cedera atau kerusakan setelah perawatan dilakukan ',0,0,'L');
$pdf->SetXY(7,223);
$pdf->Cell(30,5,'__________________________________________________________________________________________________________________________',0,0,'L');

// jabarkan
$pdf->SetFont('times','',10);
$pdf->SetXY(35,89);
$pdf->Cell(13,5,$r_member_statement['kulit_jabarkan'],0,0,'L');
$pdf->SetXY(35,109);
$pdf->Cell(13,5,$r_member_statement['selain_jabarkan'],0,0,'L');
$pdf->SetXY(35,129);
$pdf->Cell(13,5,$r_member_statement['alergi_jabarkan'],0,0,'L');
$pdf->SetXY(58,149);
$pdf->Cell(13,5,$r_member_statement['usia_kandungan'],0,0,'L');

//checkbox
$pdf->SetFont('ZapfDingbats','', 10);
//asma
$cek_asma = get_statement('asma', $statement_id);
if ($cek_asma == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,55);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,55);
$pdf->Cell(3,3,$no,1,0);
//inhaler
$cek_inhaler = get_statement('inhaler', $statement_id);
if ($cek_inhaler == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,63);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,63);
$pdf->Cell(3,3,$no,1,0);
//leher/punggung
$cek_leher = get_statement('leher', $statement_id);
if ($cek_leher == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,72);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,72);
$pdf->Cell(3,3,$no,1,0);
//kulit,luka
$cek_kulit = get_statement('kulit', $statement_id);
if ($cek_kulit == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,81);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,81);
$pdf->Cell(3,3,$no,1,0);
//kesehatan lainnya
$cek_selain_diatas = get_statement('selain_diatas', $statement_id);
if ($cek_selain_diatas == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,101);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,101);
$pdf->Cell(3,3,$no,1,0);
//alergi
$cek_alergi = get_statement('alergi', $statement_id);
if ($cek_alergi == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,121);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,121);
$pdf->Cell(3,3,$no,1,0);
//hamil
$cek_hamil = get_statement('hamil', $statement_id);
if ($cek_hamil == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,141);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,141);
$pdf->Cell(3,3,$no,1,0);
//kontak lens
$cek_kontak_lens = get_statement('kontak_lens', $statement_id);
if ($cek_kontak_lens == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,161);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,161);
$pdf->Cell(3,3,$no,1,0);
//melepas lens
$cek_melepas_lens = get_statement('melepas_lens', $statement_id);
if ($cek_melepas_lens == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,170);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,170);
$pdf->Cell(3,3,$no,1,0);
//level 
$cek_level = get_statement('level', $statement_id);
if ($cek_level == 1) {
	$soft = "4"; 
	$medium  = "";
	$hard = "";}
else if ($cek_level == 2) {
	$soft = ""; 
	$medium  = "4";
	$hard = "";}
else  {
	$soft = ""; 
	$medium  = "";
	$hard = "4";}
$pdf->SetXY(159,179);
$pdf->Cell(3,3,$soft,1,0);
$pdf->SetXY(173,179);
$pdf->Cell(3,3,$medium,1,0);
$pdf->SetXY(190,179);
$pdf->Cell(3,3,$hard,1,0);
//penawaran spesial
$cek_spesial = get_statement('spesial', $statement_id);
if ($cek_spesial == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,188);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,188);
$pdf->Cell(3,3,$no,1,0);
//jawaban
$cek_jawaban = get_statement('jawaban', $statement_id);
if ($cek_jawaban == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,197);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,197);
$pdf->Cell(3,3,$no,1,0);
//tidak menyembunyikan informasi
$cek_tidak_menyembunyikan = get_statement('tidak_menyembunyikan', $statement_id);
if ($cek_tidak_menyembunyikan == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,206);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,206);
$pdf->Cell(3,3,$no,1,0);
//tidak bertanggung jawab
$cek_tanggung_jawab = get_statement('tanggung_jawab', $statement_id);
if ($cek_tanggung_jawab == 1) {
	$yes = "4"; 
	$no  = "";}
else {
	$yes = ""; 
	$no  = "4";}
$pdf->SetXY(173,215);
$pdf->Cell(3,3,$yes,1,0);
$pdf->SetXY(190,215);
$pdf->Cell(3,3,$no,1,0);

//kata yes
$pdf->SetFont('times','',9);
$pdf->SetXY(177,45);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,54);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,62);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,71);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,80);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,100);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,120);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,140);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,160);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,169);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(163,178);
$pdf->Cell(13,5,'Soft',0,0,'L');
$pdf->SetXY(177,178);
$pdf->Cell(13,5,'Medium',0,0,'L');
$pdf->SetXY(194,178);
$pdf->Cell(13,5,'Hard',0,0,'L');

$pdf->SetXY(177,188);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,197);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,206);
$pdf->Cell(13,5,'Yes',0,0,'L');
$pdf->SetXY(177,215);
$pdf->Cell(13,5,'Yes',0,0,'L');

//kata No
$pdf->SetFont('times','',9);
$pdf->SetXY(194,45);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,54);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,62);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,71);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,80);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,100);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,120);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,140);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,160);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,169);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,188);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,197);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,206);
$pdf->Cell(13,5,'No',0,0,'L');
$pdf->SetXY(194,215);
$pdf->Cell(13,5,'No',0,0,'L');


//nb:
//inggris
$pdf->SetFont('times','',8.5);
$pdf->SetXY(8,227);
$pdf->Cell(13,5,'The spa treatments, services and/or facilities received or utilized at Zee Holistic Living are not intended to be a substitute for professional medical',0,0,'L');
$pdf->SetXY(8,230);
$pdf->Cell(13,5,'treatment for any condition, medical or otherwise, that Clients may have. Clients will fully indemnify and hold harmless Zee Holistic Living and its holding',0,0,'L');
$pdf->SetXY(8,233);
$pdf->Cell(13,5,'holding company(ies), affiliates, subsidiaries, representative, agents, staffs and suppliers, from and against all liabilities, claims, expenses, damages and losses,',0,0,'L');
$pdf->SetXY(8,236);
$pdf->Cell(13,5,'including legal fees (on indemnity basis), arising out of or in connection with the spa treatments, services and/or facilities.',0,0,'L');
//bahasa indonesia
$pdf->SetXY(8,241);
$pdf->Cell(13,5,'Perawatan spa, layanan dan/atau fasilitas yang diterima atau dilakukan di Zee Holistic Living tidak dimaksudkan untuk menggantikan perawatan medis',0,0,'L');
$pdf->SetXY(8,244);
$pdf->Cell(13,5,'profesional dalam kondisi apapun, medis atau sebaliknya, yang mungkin dimiliki Klien. Klien akan sepenuhnya menanggung kerugian dan membebaskan',0,0,'L');
$pdf->SetXY(8,247);
$pdf->Cell(13,5,'Zee Holistic Living dan perusahaan induknya, afiliasi, anak perusahaan, perwakilan, agen, staf dan pemasok, dari dan terhadap semua kewajiban, klaim, ',0,0,'L');
$pdf->SetXY(8,250);
$pdf->Cell(13,5,'biaya, kerusakan dan kerugian, termasuk biaya hukum (pada ganti rugi basis), yang timbul dari atau sehubungan dengan perawatan spa, layanan ',0,0,'L');
$pdf->SetXY(8,253);
$pdf->Cell(13,5,'dan/atau fasilitas. ',0,0,'L');

//member,date
$pdf->SetFont('times','',9);	
$pdf->SetXY(8,262);
$pdf->Cell(13,5,'Signed ',0,0,'L');
$pdf->SetXY(120,262);
$pdf->Cell(13,5,'Date ',0,0,'L');
$pdf->SetXY(8,263);
$pdf->Cell(30,5,'__________________________________________________________________________________________________________________________',0,0,'L');
$pdf->SetXY(8,268);
$pdf->Cell(13,5,'Yang bertanda tangan ',0,0,'L');
$pdf->SetXY(120,268);
$pdf->Cell(13,5,'Tanggal ',0,0,'L');



$pdf->Output('Statement.php', 'I');
**/
?>

<table class="table table-bordered table-striped">
	<tr>
		<td width="45%"> Nama </td>
		<td width="5%"> : </td>
		<td width="50%"> <?php echo $r_member_statement['member_name']; ?> </td>
	</tr>
	<tr>
		<td> Date of Birth </td>
		<td> : </td>
		<td> <?php echo $r_member_statement['member_dateofbirth']; ?> </td>
	</tr>
	<tr>
		<td> Address </td>
		<td> : </td>
		<td> <?php echo $r_member_statement['member_alamat']; ?> </td>
	</tr>
	<tr>
		<td> Phone </td>
		<td> : </td>
		<td> <?php echo $r_member_statement['member_phone']; ?> </td>
	</tr>
	<tr>
		<td> Email </td>
		<td> : </td>
		<td> <?php echo $r_member_statement['member_email']; ?> </td>
	</tr>
</table>

<table class="table table-bordered table-striped"><br /><br /><br />
<?php
$cek_darahtinggi = get_statement('tekanan', $statement_id);
if($cek_darahtinggi == 1)
{
?>
	<tr>
		<td width="80%"><font size="3">Do you have or have you ever had high blood pressure?</font><br />
			<font size="2">Apakah Anda mempunyai atau pernah mempunyai masalah tekanan darah tinggi?</font></td>
		<td width="20%"><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_asma = get_statement('asma', $statement_id);
if($cek_asma == 1)
{
?>
	<tr>
		<td><font size="3">Do you have asthma?</font><br />
			<font size="2">Apakah Anda menderita asma?</font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_inhaler = get_statement('inhaler', $statement_id);
if($cek_inhaler == 1)
{
?>
	<tr>
		<td><font size="3">If so, do you use an inhaler that we need to have in hand during your treatment?</font><br />
			<font size="2">Jika ya, apakah Anda perlu menggunakan inhaler saat perawatan berlangsung?</font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_leher = get_statement('leher', $statement_id);
if($cek_leher == 1)
{
?>
	<tr>
		<td><font size="3">Are you currently experiencing neck and back problem?</font><br />
			<font size="2">Apakah Anda sedang mengalami masalah leher dan punggung? </font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_kulit = get_statement('kulit', $statement_id);
if($cek_kulit == 1)
{
?>
	<tr>
		<td><font size="3">Do you have any skin conditions, cuts, bruises, injuries or infections?</font><br />
			<font size="2">Apakah Anda memiliki masalah kulit, luka, cedera, atau infeksi? </font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_kulit = get_statement('kulit', $statement_id);
if($cek_kulit == 1)
{
?>
	<tr>
		<td><font size="3">If yes, please list : <u><?php echo $r_member_statement['kulit_jabarkan']; ?></u></font><br />
			<font size="2">Jika ya, tolong jabarkan </font></td>
		<td>&nbsp;</td>
	</tr>
<?php
}
?><?php
$cek_selain_diatas = get_statement('selain_diatas', $statement_id);
if($cek_selain_diatas == 1)
{
?>
	<tr>
		<td><font size="3">Do you have any health conditions beside the stated above that your therapist should be aware of?</font><br />
			<font size="2">Apakah Anda memiliki masalah kesehatan selain yang telah disebutkan di atas dan perlu terapis Anda ketahui? </font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_selain_diatas = get_statement('selain_diatas', $statement_id);
if($cek_selain_diatas == 1)
{
?>
	<tr>
		<td><font size="3">If yes, please list : <u><?php echo $r_member_statement['selain_jabarkan']; ?></u></font><br />
			<font size="2">Jika ya, tolong jabarkan </font></td>
		<td>&nbsp;</td>
	</tr>
<?php
}
?><?php
$cek_alergi = get_statement('alergi', $statement_id);
if($cek_alergi == 1)
{
?>
	<tr>
		<td><font size="3">Do you have any allergies or are there any specific ingredients that may cause a reaction on your skin? </font><br />
			<font size="2">Apakah Anda memiliki alergi atau bahan-bahan tertentu yang dapat bereaksi terhadap kulit Anda? </font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_alergi = get_statement('alergi', $statement_id);
if($cek_alergi == 1)
{
?>
	<tr>
		<td><font size="3">If yes, please list : <u><?php echo $r_member_statement['alergi_jabarkan']; ?></u></font><br />
			<font size="2">Jika ya, tolong jabarkan </font></td>
		<td>&nbsp;</td>
	</tr>
<?php
}
?><?php
$cek_hamil = get_statement('hamil', $statement_id);
if($cek_hamil == 1)
{
?>
	<tr>
		<td><font size="3">Are you pregnant or trying to get pregnant? </font><br />
			<font size="2">Apakah Anda sedang hamil atau sedang merencanakan kehamilan? </font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_hamil = get_statement('hamil', $statement_id);
if($cek_hamil == 1)
{
?>
	<tr>
		<td><font size="3">If yes, please list : <u><?php echo $r_member_statement['usia_kandungan']; ?></u></font><br />
			<font size="2">Jika ya, tolong jabarkan </font></td>
		<td>&nbsp;</td>
	</tr>
<?php
}
?><?php
$cek_kontak_lens = get_statement('kontak_lens', $statement_id);
if($cek_kontak_lens == 1)
{
?>
	<tr>
		<td><font size="3">Do you wear contact lenses?</font><br />
			<font size="2">Apakah Anda menggunakan kontak lens?</font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_melepas_lens = get_statement('melepas_lens', $statement_id);
if($cek_kontak_lens == 1)
{
?>
	<tr>
		<td><font size="3">If yes, do you need to take them out for facial treatment/any treatment?</font><br />
			<font size="2">Jika ya, apakah Anda perlu melepasnya sebelum perawatan wajah atau perawatan lainnya?</font></td>
		<td><?php if($cek_melepas_lens == 1) { ?><input type="checkbox" checked> <font size="3">Ya</font> <?php } elseif($cek_melepas_lens == 2){?> <input type="checkbox" checked> <font size="3">Tidak</font><?php }else {} ?></td>
	</tr>
<?php
}
?><?php
$cek_level = get_statement('level', $statement_id);
?>
	<tr>
		<td><font size="3">What is your pressure preference for massage used during treatment?</font><br />
			<font size="2">Bagaimana level tekanan pijatan yang Anda inginkan saat perawatan? </font></td>
		<td><?php if($cek_level == 1) { ?><input type="checkbox" checked> <font size="3">Soft</font><input type="checkbox"> <font size="3">Medium</font><input type="checkbox" > <font size="3">Hard</font> <?php } elseif($cek_level == 2){?> <input type="checkbox"> <font size="3">Soft</font><input type="checkbox" checked> <font size="3">Medium</font><input type="checkbox"> <font size="3">Hard</font><?php } elseif($cek_level == 3){?> <input type="checkbox"> <font size="3">Soft</font><input type="checkbox"> <font size="3">Medium</font><input type="checkbox" checked> <font size="3">Hard</font><?php }else {} ?></td>
	</tr>
<?php
$cek_spesial = get_statement('spesial', $statement_id);
if($cek_spesial == 1)
{
?>
	<tr>
		<td><font size="3">Would you like to receive our special offers via email or text / WA messages?</font><br />
			<font size="2">Apakan Anda ingin mendapatkan penawaran spesial kami melalui email atau pesan SMS / WA?</font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_jawaban = get_statement('jawaban', $statement_id);
if($cek_jawaban == 1)
{
?>
	<tr>
		<td><font size="3">I confirm, to the best knowledge that the answer I have given are correct</font><br />
			<font size="2">Saya menyatakan bahwa jawaban yang saya berikan adalah benar</font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_tidak_menyembunyikan = get_statement('tidak_menyembunyikan', $statement_id);
if($cek_tidak_menyembunyikan == 1)
{
?>
	<tr>
		<td><font size="3">I have not withheld any information that may be relevant to determine how my treatment is carried out</font><br />
			<font size="2">Saya tidak menyembunyikan informasi apapun yang mungkin relevan untuk menentukan bagaimana perawatan saya dilakukan</font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?><?php
$cek_tanggung_jawab = get_statement('tanggung_jawab', $statement_id);
if($cek_tanggung_jawab == 1)
{
?>
	<tr>
		<td><font size="3">I acknowledge that Zee Holistic Living accepts no liability for any injury or damage as a result of any treatment received</font><br />
			<font size="2">Saya mengetahui bahwa Zee Holistic Living tidak bertanggung jawab atas cedera atau kerusakan setelah perawatan dilakukan</font></td>
		<td><input type="checkbox" checked> <font size="3">Yes</font> / <font size="2">Ya</font></td>
	</tr>
<?php
}
?>
	<tr>
		<td colspan="2"> <br /> <hr /><font size="2">The spa treatments, services and/or facilities received or utilized at Zee Holistic Living are not intended to be a substitute for professional medical
treatment for any condition, medical or otherwise, that Clients may have. Clients will fully indemnify and hold harmless Zee Holistic Living and its holding
holding company(ies), affiliates, subsidiaries, representative, agents, staffs and suppliers, from and against all liabilities, claims, expenses, damages and losses,
including legal fees (on indemnity basis), arising out of or in connection with the spa treatments, services and/or facilities</font></td>
	</tr>
	<tr>
		<td colspan="2"><font size="2">Perawatan spa, layanan dan/atau fasilitas yang diterima atau dilakukan di Zee Holistic Living tidak dimaksudkan untuk menggantikan perawatan medis
profesional dalam kondisi apapun, medis atau sebaliknya, yang mungkin dimiliki Klien. Klien akan sepenuhnya menanggung kerugian dan membebaskan
Zee Holistic Living dan perusahaan induknya, afiliasi, anak perusahaan, perwakilan, agen, staf dan pemasok, dari dan terhadap semua kewajiban, klaim,
biaya, kerusakan dan kerugian, termasuk biaya hukum (pada ganti rugi basis), yang timbul dari atau sehubungan dengan perawatan spa, layanan
dan/atau fasilitas. </font> <hr /></td>
	</tr>
</table>
<table class="table table-bordered table-striped" width="100%">
	<tr>
		<td width="20%" align="center">Signed</td>
		<td width="20%">&nbsp;</td>
		<td width="20%">&nbsp;</td>
		<td width="20%">&nbsp;</td>
		<td width="20%" align="center">Date</td>
	</tr>
	<tr>
		<td colspan="5"><hr /></td>
	</tr>
	<tr>
		<td width="20%" align="center">Yang bertanda tangan</td>
		<td width="20%">&nbsp;</td>
		<td width="20%">&nbsp;</td>
		<td width="20%">&nbsp;</td>
		<td width="20%" align="center">Tanggal</td>
	</tr>
</table>

<script>
	window.print();
</script>