<div class="container">
	<center>
		<?php if($this->session->flashdata('error')){ ?>
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
		</div>
		<?php } ?>
		<div class="wrap ">
			<div class="card text-center" style="width: 60rem; ">
				<div class="card-body">
					<h4 class="card-title" style="text-align:center"><b>Sistem Informasi Pengelolaan Keuangan Pembangunan Desa
							Kedung Pomahan Wetan</b></h4>
					<hr>
					<div class="card-image">
					<div style="float:right">
						<div class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">
								<i class="fas fa-user-tie fa-2x"></i>
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">								
							
								<li><a class="dropdown-item" href="<?php echo site_url('Login/LogOut')?>">Log Out</a></li>
							</ul>
						</div>
					</div>
					<div style="clear:both"></div>				
					<div class="row">
						<div class="col-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><b>DOKUMEN</b></h5>
									<p class="card-text"></p>
									<a href="<?php echo base_url("Dokumen")?>" 
									<?php if ($Jabatan == 'Kaur Perencanaan' || $Jabatan == 'Sekretaris Desa' || $Jabatan == 'Admin'){ ?> 
										class="btn btn-primary" 
									<?php }else {?>
										class="btn btn-secondary disabled" <?php } ?>
									>Pilih</a>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><b>PERANGKAT DESA</b></h5>
									<p class="card-text"></p>
									<a href="<?php echo base_url("PerangkatDesa")?>"
									<?php if ($Jabatan == 'Admin'){ ?> 
										class="btn btn-primary" 
									<?php }else {?>
										class="btn btn-secondary disabled" <?php } ?>
									>Pilih</a>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><b>PARAMETER</b></h5>
									<p class="card-text"></p>
									<a href="<?php echo base_url("Parameter")?>"
									<?php if ($Jabatan == 'Sekretaris Desa' || $Jabatan == 'Admin'){ ?> 
										class="btn btn-primary" 
									<?php }else {?>
										class="btn btn-secondary disabled" <?php } ?>>Pilih</a>
								</div>
							</div>
						</div>
						<div class="col-4 mt-2">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><b>PENERIMAAN</b></h5>
									<p class="card-text"></p>
									<a href="<?php echo site_url('Penerimaan')?>"
									<?php if ($Jabatan == 'Kaur Keuangan' || $Jabatan == 'Admin'){ ?> 
										class="btn btn-primary" 
									<?php }else {?>
										class="btn btn-secondary disabled" <?php } ?>
									>Pilih</a>
								</div>
							</div>
						</div>
						<div class="col-4 mt-2">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><b>PENGELUARAN</b></h5>
									<p class="card-text"></p>
									<a href="<?php echo site_url('pengeluaran')?>"
									<?php if ($Jabatan == 'Kaur Keuangan' || $Jabatan == 'Admin'){ ?> 
										class="btn btn-primary" 
									<?php }else {?>
										class="btn btn-secondary disabled" <?php } ?>
									>Pilih</a>
								</div>
							</div>
						</div>
						<div class="col-4 mt-2">
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><b>LAPORAN</b></h5>
									<p class="card-text"></p>
									<a href="<?php echo site_url('laporan')?>"
									<?php if ($Jabatan == 'Kaur Keuangan' || $Jabatan == 'Kepala Desa' || $Jabatan == 'Admin'){ ?> 
										class="btn btn-primary" 
									<?php }else {?>
										class="btn btn-secondary disabled" <?php } ?>
									>Pilih</a>
								</div>
							</div>
						</div>
					</div>
				</div>		
				</div>

			</div>
		</div>
	</center>
</div>
