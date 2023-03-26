<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title><?php echo $title; ?></title>

	<!-- General CSS Files -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">

	<!-- CSS Libraries -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jqvmap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

	<!-- Template CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
</head>

<body class="layout-3">
	<div id="app">
		<div class="main-wrapper container">
			<div class="navbar-bg bg-primary"></div>
			<nav class="navbar navbar-expand-lg main-navbar">
				<form class="form-inline mr-auto">
				</form>
				<ul class="navbar-nav navbar-right">
					<li class="dropdown"><a href="#" data-toggle="dropdown"
							class="nav-link dropdown-toggle nav-link-lg nav-link-user">
							<img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png"
								class="rounded-circle mr-1">
							<div class="d-sm-none d-lg-inline-block">Halo, User</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
							<!-- <a href="<?php echo base_url(); ?>dist/features_profile" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile
                </a> -->
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item has-icon text-danger"
								data-confirm="Logout?|Apakah anda yakin ingin logout?"
								data-confirm-yes="window.location.href =`<?php echo base_url('logout')?>`">
								<i class="fas fa-sign-out-alt"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
		</div>

		<!-- Main Content -->
		<div class="main-content container">
			<section class="section">
				<div class="section-header">
					<h1><?= $title;  ?></h1>
				</div>

				<div class="section-body">
					<!-- Data Table -->
					<div class="row">
						<div class="col-12">
							<div class="card">
								<!-- /.card-header -->
								<div class="card-body">
									<table class="table table-hover display nowrap" id="dataUser" style="width:100%">
										<div>
											<div class="row">
												<div class="col">Nama Mahasiswa</div>
												<div class="col">: <?= $mahasiswa['nama_lengkap']; ?></div>
											</div>
											<div class="row">
												<div class="col">NIM</div>
												<div class="col">: <?= $nim; ?></div>
											</div>
											<div class="row">
												<div class="col">Jurusan</div>
												<div class="col">: <?= $mahasiswa['jurusan']; ?></div>
											</div>
											<div class="row">
												<div class="col">Tahun Angkatan</div>
												<div class="col">: <?= $mahasiswa['tahun_angkatan']; ?></div>
											</div>
										</div>

										<hr />

										<div class="mb-3">
											<div class="row mb-3 align-items-center">
												<div class="col-6">Pilih Periode</div>
												<div class="col-3">
													<?php $years = range($mahasiswa['tahun_angkatan'], strftime("%Y", time())); ?>

													<select class="form-control" id="periode">
														<option>Select Year</option>
														<?php foreach($years as $year) : ?>
														<option value="<?php echo $year; ?>" <?php if ($periode == $year ) echo "selected"; ?>>
															<?php echo $year; ?></option>
														<?php endforeach; ?>
													</select>
												</div>
												<div class="col-3">
													<button class="btn btn-sm btn-primary" id="tmb_cari">Pilih</button>
												</div>
											</div>

											<hr />

											<?php
							if($periode == ""){
						?>
											<div class="row">
												<div class="col text-center"> --- Silahkan pilih periode --- </div>
											</div>
											<?php
							} else if(!$data_pembayaran){
						?>
											<div class="row">
												<div class="col text-center"> --- Tidak Ada Data Pembayaran --- </div>
											</div>
											<?php
							} else {
						?>
											<div class="row">
												<div class="col">Tahun Periode</div>
												<div class="col">: <?= $periode; ?></div>
											</div>
											<div class="row">
												<div class="col">Total Tagihan</div>
												<div class="col">: Rp. <?= number_format($data_tagihan['total_tagihan'], 0, ',', '.'); ?></div>
											</div>
										</div>

										<thead>
											<tr class="text-center">
												<th>No</th>
												<th>Periode</th>
												<th>Tgl Bayar</th>
												<th>Nominal Bayar</th>
											</tr>
										</thead>
										<tbody>
											<?php
								$no = 0;
								$total_pembayaran = 0;
								foreach($buku_spps->result_array() as $buku_spp):
									$no++;
									$total_pembayaran += $buku_spp['nominal_bayar']
							?>
											<tr>
												<td class="text-center"><?= $no; ?></td>
												<td class=""><?= $buku_spp['periode'] ?></td>
												<td class="text-center"><?= date( 'd-M-Y', strtotime($buku_spp['tgl_bayar']) ); ?></td>
												<td class="text-right"><?= number_format($buku_spp['nominal_bayar'], 0, ',', '.');  ?></td>
											</tr>
											<?php endforeach; ?>
										</tbody>
										<tfoot>
											<tr class="font-italic">
												<td colspan="3">Total Pembayaran</td>
												<td class="text-right"><?= number_format($total_pembayaran, 0, ',', '.');  ?></td>
											</tr>
											<tr class="font-weight-bold">
												<td colspan="2">Sisa Tagihan</td>
												<td class="text-right"><?= number_format($data_tagihan['total_tagihan'], 0, ',', '.'); ?> -
													<?= number_format($total_pembayaran, 0, ',', '.');  ?></td>
												<td class="text-right">
													<?= number_format($data_tagihan['total_tagihan']	- $total_pembayaran, 0, ',', '.');  ?></td>
											</tr>
										</tfoot>
										<?php } ?>
									</table>
								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.Data Table -->



				</div>
			</section>
		</div>

		<footer class="main-footer">
			<div class="container text-center">
				Copyright &copy; 2022 <br /> Informatics Areta Collage
			</div>
		</footer>
	</div>
	</div>

	<!-- General JS Scripts -->
	<script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>

	<!-- Template JS File -->
	<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

	<script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>

	<script>
		$('.summernote').summernote({
			placeholder: 'Isi deskripsi di sini',
			tabsize: 2,
			height: 100,
			toolbar: [
				['para', ['ul']],
			]
		});

	</script>

</body>

</html>
