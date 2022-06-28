




		


				<!-- Content area -->
				<div class="content">

				

				

									<!-- Basic responsive configuration -->
						<div class="card">
						<div class="card-header">
							<h5 class="card-title">Data Siswa</h5>
						</div>

						<div class="card-body">
						
							
						</div>

						<table class="table datatable-responsive">
							<thead>
								<tr>
									<th>NO</th>
									<th>NAMA</th>
									<th>KELAS</th>
									<th>TAGIHAN</th>
									<th>NOMINAL</th>
									
									<th class="text-center">AKSI</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 1; foreach($tagihan as $i){?>
								<tr>
									<td><?=$no?></td>
									<td><?=$i->nama?></td>
									<td><?=$i->kelas?></td>
									<td><?=$i->keterangan?></td>
									<td><?=$i->nominal?></td>
								
									<td class="text-center">
										<div class="list-icons">
											<div class="dropdown">
											<form id="payment-form" method="post" action="<?=site_url()?>/snap/finish">
											<input type="hidden" name="result_type" id="result-type" value=""></div>
											<input type="hidden" name="result_data" id="result-data" value=""></div>
											</form>
											<button class="btn btn-success" id="pay-bayar" 
												data-id = "<?=$i->nisn?>"
												data-nama = "<?=$i->nama?>"
												data-kelas = "<?=$i->kelas?>"
												data-keterangan = "<?=$i->keterangan?>"
												data-nominal = "<?=$i->nominal?>"
												>Bayar</button>
											
											</div>
										</div>
									</td>
								</tr>
								<?php $no++; }?>
							</tbody>
						</table>
					</div>
					<!-- /basic responsive configuration -->

				</div>
				<!-- /content area -->


				<script type="text/javascript">
  
  $('#pay-bayar').click(function (event) {
	event.preventDefault();
	$(this).attr("disabled", "disabled");
	var nisn = $(this).data('id');
	var nama = $(this).data('nama');
	var kelas = $(this).data('kelas');
	var keterangan = $(this).data('keterangan');
	var nominal = $(this).data('nominal');
	
  $.ajax({
	type :"POST",
	data :{
		nisn :nisn,
		nama :nama,
		kelas:kelas,
		keterangan:keterangan,
		nominal:nominal
	},
	url: '<?=base_url()?>snap/token',
	cache: false,

	success: function(data) {
	  //location = data;

	  console.log('token = '+data);
	  
	  var resultType = document.getElementById('result-type');
	  var resultData = document.getElementById('result-data');

	  function changeResult(type,data){
		$("#result-type").val(type);
		$("#result-data").val(JSON.stringify(data));
		//resultType.innerHTML = type;
		//resultData.innerHTML = JSON.stringify(data);
	  }

	  snap.pay(data, {
		
		onSuccess: function(result){
		  changeResult('success', result);
		  console.log(result.status_message);
		  console.log(result);
		  $("#payment-form").submit();
		},
		onPending: function(result){
		  changeResult('pending', result);
		  console.log(result.status_message);
		  $("#payment-form").submit();
		},
		onError: function(result){
		  changeResult('error', result);
		  console.log(result.status_message);
		  $("#payment-form").submit();
		}
	  });
	}
  });
});

</script>

  