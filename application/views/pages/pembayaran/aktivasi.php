




		


				<!-- Content area -->
				<div class="content">

				<!-- Basic layout-->
				<div class="card">
								<div class="card-header">
									<h5 class="card-title">FORM AKTIVASI</h5>
								</div>

								<div class="card-body">
									<form action="<?= base_url('backend/aktivasiPembayaran')?>" method="POST">
									
										<div class="row">
									
											<div class="col">
											
											<select name="kelas" data-placeholder="Pilih Status" class="form-control form-control-select2" data-fouc>
				                                        <option value="null">PILIH KELAS</option> 
														<?php foreach($kelas as $i){?>
															<option value="<?= $i->kelas?>"><?= $i->kelas?></option> 
														<?php }?>
				                                        
				                                       
				                                    </select>
												<span>Aktivasi berdasarkan kelas</span>
											</div>
											<div class="col">
											<select name="nisn" data-placeholder="Pilih Status" class="form-control form-control-select2" data-fouc>
														<option value="null">PILIH KELAS</option> 
														<?php foreach($siswa as $i){?>
															<option value="<?= $i->nisn?>"><?= $i->nama?></option> 
														<?php }?>
				                                    </select>
												<span>Aktivasi berdasarkan Nama</span>
											</div>
										</div>
										<br>
										<div class="form-group">
											<label>Pilih Pembayaran</label>
											<select name="pembayaran" data-placeholder="Pilih Status" class="form-control form-control-select2" data-fouc>
												<option value="null">PILIH PEMBAYARAN</option> 
														<?php foreach($pembayaran as $i){?>
															<option value="<?= $i->id?>"><?= $i->keterangan?></option> 
														<?php }?>
											</select>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Aktivasi Pembayaran <i class="icon-paperplane ml-2"></i></button>
										</div>
									</form>
								</div>
							</div>
							<!-- /basic layout -->

				

				
				</div>
				<!-- /content area -->


				