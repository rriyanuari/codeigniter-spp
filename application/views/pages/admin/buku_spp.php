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

					<thead>
						<tr>
							<th class="text-center">NIM</th>
							<th class="text-center">Mahasiswa</th>
							<th class="text-center">Jurusan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($mahasiswas as $mahasiswa):
						?>
							<tr>
								<td class=""><?= $mahasiswa['nim']; ?></td>
								<td class=""><a href="<?= base_url('admin/buku-spp/'.$mahasiswa['nim']); ?>"><?= $mahasiswa['nama_lengkap']; ?></a></td>
								<td class="text-center"><?= $mahasiswa['jurusan']; ?></td>
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
