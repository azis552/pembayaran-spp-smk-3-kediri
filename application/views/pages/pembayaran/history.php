




		


				<!-- Content area -->
				<div class="content">

				

				

									<!-- Basic responsive configuration -->
						<div class="card">
						<div class="card-header">
							<h5 class="card-title">History Pembayaran</h5>
						</div>

						<div class="card-body">
							
							
						</div>

						<table class="table datatable-responsive">
							<thead>
								<tr>
									<th>Order ID</th>
									<th>Nama</th>
									<th>Keterangan</th>
									<th>Tagihan</th>
									<th>Jumlah Dibayar</th>
									<th>Metode Pembayaran</th>
									<th>VA</th>
									<th>Waktu</th>
									<th>Status</th>
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($history as $i){?>
									<tr>
									<td><?=$i->order_id?></td>
									<td><?=$i->nama?></td>
									<td><?=$i->keterangan?></td>
									<td><?=$i->nominal?></td>
									<td><?=$i->gross_amount?></td>
									<td><?=$i->payment_type." ".$i->bank?></td>
									<td><?=$i->va_number?></td>
									<td><?=$i->transaction_time?></td>
									<td><?=$i->status_code == "201" ? "Pending" : "Success" ?></td>
									<td><a href="<?= $i->pdf_url ?>">PDF</a></td>
								</tr>
								<?php }?>
								
							
							</tbody>
						</table>
					</div>
					<!-- /basic responsive configuration -->

				</div>
				<!-- /content area -->


				