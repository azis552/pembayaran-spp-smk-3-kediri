

				<!-- Content area -->
				<div class="content">

				

				

									<!-- Basic responsive configuration -->
						<div class="card">
						<div class="card-header">
							<h5 class="card-title">Data Pembayaran</h5>
						</div>

						<div class="card-body">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Tambah Pembayaran
						</button>
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Pembayaran</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<!-- Basic legend -->
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">FORM DATA PEMBAYARAN</h5>
								</div>

								<div class="card-body">
									<form action="<?= base_url('backend/tambah_pembayaran')?>" method="POST" >
										<fieldset>
										

											<div class="form-group row">
												<label class="col-lg-4 col-form-label">KETERANGAN</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" name="keterangan">
												</div>
											</div>

											<div class="form-group row">
												<label class="col-lg-4 col-form-label">NOMINAL</label>
												<div class="col-lg-8">
													<input type="text" class="form-control" name="nominal">
												</div>
											</div>
											<div class="form-group row">
												<label class="col-lg-4 col-form-label">Status</label>
												<div class="col-lg-8">
				                                    <select name="status" data-placeholder="Pilih Status" class="form-control form-control-select2" data-fouc>
				                                        <option value="Aktif">Aktif</option> 
				                                        <option value="Tidak Aktif">Tidak Aktif</option> 
				                                       
				                                    </select>
			                                    </div>
				                			</div>
											
										</fieldset>

										
									
								</div>
							</div>
							<!-- /basic legend -->

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
							</form>
							</div>
						</div>
						</div>	
						</div>

						<table class="table datatable-responsive">
							<thead>
								<tr>
									<th>NO</th>
									<th>Keterangan</th>
									<th>Nomial</th>
									<th>Status</th>
									
									<th class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($pembayaran as $i){?>
								<tr>
									<td><?=$no?></td>
									<td><?=$i->keterangan ?></td>
									<td><?=$i->nominal ?></td>
									<td><?=$i->status ?></td>
									
									<td class="text-center">
										<div class="list-icons">
											<div class="dropdown">
												<a href="#" class="list-icons-item" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
													<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
													<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
												</div>
											</div>
										</div>
									</td>
								</tr>
								<?php $no++;}?>
							</tbody>
						</table>
					</div>
					<!-- /basic responsive configuration -->

				</div>
				<!-- /content area -->


				