
<link href="../css/transaction.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
	label{
		color: rgb(107, 52, 106);
	}
</style>
<section class="content">
	<div class="col-md-12">
		<div class="box">
			<div class="box-body">
			<div class="row">
			<div class="col-md-6">
			<a class="btn btn-success" href="../controllers/transaction.php?page=list">New Order</a>
				
			</div>
				
			</div>

			<div class="row">
				<div class="col-md-6">
				<label>On Going</label>
					<div id="" class="panel panel-default panel-item">
						<div class="row">
							<table id="table_item" class="table my-item" style="font-size: 12px;">
		                      <thead>
			                       <tr>
	 								<th width="5%">No.</th>
		                          	<th class="">Nama</th>
		                          	<th class="">Pemijat</th>
		                          	<th class="">Pijat</th>
		                          	<th class="">Ruangan</th>
		                        </tr>
		                      </thead>
		                      <tbody class="" id="data_items" class="scrollable">

		                      </tbody>
		                    </table>
							</div>
						</div>
					</div>

			<div class="col-md-6">
				<label>Reserved</label>
					<div id="" class="panel panel-default panel-item">
						<div class="row">
							<table id="table_item" class="table my-item" style="font-size: 12px;">
			                    <thead>
			                        <tr>
	 								<th width="5%">No.</th>
		                          	<th class="">Nama</th>
		                          	<th class="">Jam</th>
		                          	<th class="">Pemijat</th>
		                        </tr>
		                      </thead>
		                      <tbody class="" id="data_items" class="scrollable">

		                      </tbody>
		                    </table>
							</div>
						</div>
					</div>
			</div>

			<div class="row">
				<div class="col-md-6">
				<label>Past</label>
					<div id="" class="panel panel-default panel-item">
						<div class="row">
							<table id="table_item" class="table my-item" style="font-size: 12px;">
			                      <thead>
			                        <tr>
									<th width="5%">No.</th>
		                          	<th width="10%">Invoice</th>
		                          	<th class="">Nama</th>
		                          	<th class="">Tanggal</th>
		                          	<th class="">Jam</th>
		                          	<th class="">Harga</th>
		                        </tr>
		                      </thead>
		                      <tbody class="" id="data_items" class="scrollable">

		                      </tbody>
		                    </table>
							</div>
						</div>
					</div>
			</div>
			</div>
		
		</div>
		</div>
	</div>
</section>


<script type="text/javascript">
	$('.clockpicker').clockpicker({
		placement: 'bottom',
    align: 'left',
    donetext: 'Done',
    'default': 'now'
	});
</script>