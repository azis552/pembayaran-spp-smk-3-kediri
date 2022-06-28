




		


				<!-- Content area -->
				<div class="content">

				

				

									<!-- Basic responsive configuration -->
						<div class="card">
						<div class="card-header">
							<h5 class="card-title">Data Siswa</h5>
						</div>

						<div class="card-body">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  								Import 
						</button>
						<!-- modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="<?=base_url('backend/import')?>" method="POST" enctype='multipart/form-data'> 
										<div class="form-group row">
											<label class="col-lg-2 col-form-label font-weight-semibold">Single file upload:</label>
											<div class="col-lg-10">
												<input type="file" name="upload_file" class="file-input" data-browse-on-zone-click="true" data-fouc>
												
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									
								</div>
								</div>
							</div>
							</div>
						<!-- end modal -->
							<a type="button" href="<?= base_url('backend/export') ?>" class="btn btn-success">Export Template</a>
							<button type="button" class="btn btn-secondary">Tambah Siswa</button>
							
						</div>
					
						<table class="table datatable-responsive">
							<thead>
								<tr>
									<th>NO</th>
									<th>NISN</th>
									<th>NAMA</th>
									<th>TEMPAT LAHIR</th>
									<th>TELEPON</th>
									<th>EMAIL</th>
									<th>KELAS</th>
									<!-- <th class="text-center">Actions</th> -->
								</tr>
								
							</thead>
							<tbody >
								<?php $no=1; foreach($siswa as $i){?>
									<tr>
										<td><?= $no?></td>
										<td><?= $i->nisn?></td>
										<td><?= $i->nama?></td>
										<td><?= $i->tempat_lahir?></td>
										<td><?= $i->telepon?></td>
										<td><?= $i->email?></td>
										<td><?= $i->kelas?></td>
									</tr>
								<?php $no++; }?>

							</tbody>
						</table>
					</div>
					<!-- /basic responsive configuration -->

				</div>
				<!-- /content area -->


				

