<!-- Data Table -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<!-- /.card-header -->
			<div class="card-body">
				<table class="table table-hover display nowrap" id="dataUser" style="width:100%">
					<div class="d-flex mb-4">
						<div>
						</div>
						<div class="ml-auto">
						</div>
					</div>

					<thead>
						<tr>
							<th class="text-center">Tgl bayar</th>
							<th class="text-center">Periode</th>
							<th class="text-center">Mahasiswa</th>
							<th class="text-center">Jumlah</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($pembayarans as $pembayaran):
						?>
							<tr>
								<td class="" width="15%"><?= date( 'd-M-Y', strtotime($pembayaran['tgl_bayar']) ); ?></td>
								<td class="text-center"><?= $pembayaran['periode'] ?></td>
								<td class="">
									<a href="<?= base_url('admin/buku-spp/'). $pembayaran['nim']?>">
										<?= $pembayaran['nama_lengkap'] . ' - ' . $pembayaran['nim'] ?>
									</a>
								</td>
								<td class="text-right" width="15%"><?= number_format($pembayaran['nominal_bayar'], 0, ',', '.'); ?></td>
								<td width="15%" class="project-actions text-center">
									<a href="<?=base_url('admin/edit-pembayaran/').$pembayaran['id']?>" class="btn btn-sm btn-primary mr-2">
                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger tmb_hapus" id="<?= $pembayaran['id'] ?>" >
                    <i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="hapus"></i>
                  </a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
</div>
<!-- /.Data Table -->
