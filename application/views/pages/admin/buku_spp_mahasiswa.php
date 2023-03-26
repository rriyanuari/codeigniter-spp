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
										<option value="<?php echo $year; ?>" <?php if ($periode == $year ) echo "selected"; ?>><?php echo $year; ?></option>
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
							<div class="row">
								<div class="col-auto ml-auto">
									<a href="<?= base_url('admin/tambah-pembayaran/' . $mahasiswa['nim'] . "/" . $periode) ?>">
										<button type="button" class="btn btn-success">
											<i class="fas fa-plus"></i> <b>Input Pembayaran</b>
										</button>
									</a>
								</div>
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
						<tfoot >
							<tr class="font-italic">
								<td colspan="3">Total Pembayaran</td>
								<td class="text-right"><?= number_format($total_pembayaran, 0, ',', '.');  ?></td>
							</tr>
							<tr class="font-weight-bold">
								<td colspan="2">Sisa Tagihan</td>
								<td class="text-right"><?= number_format($data_tagihan['total_tagihan'], 0, ',', '.'); ?> - <?= number_format($total_pembayaran, 0, ',', '.');  ?></td>
								<td class="text-right"><?= number_format($data_tagihan['total_tagihan']	- $total_pembayaran, 0, ',', '.');  ?></td>
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
