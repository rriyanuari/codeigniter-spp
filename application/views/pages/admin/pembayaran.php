<!-- Data Table -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<!-- /.card-header -->
			<div class="card-body">
				<table class="table table-hover display nowrap" id="dataUser" style="width:100%">
					<div class="d-flex mb-4">
						<div>
							<h5>Periode Tahun 2023</h5>
						</div>
						<div class="ml-auto">
							<h6>( <?= date('d/M/Y', time()); ?> )</h6>
							<!-- <a href="<?=base_url('admin/tambah-user')?>">
                <button type="button" class="btn btn-success ">
                  <i class="fas fa-plus"></i> <b>Tambah User</b>
                </button>  
              </a> -->
							<!-- <a href="#"><button class="btn btn-small btn-outline-primary m-2 mb-3 "><i class="fas fa-print"></i></button></a>
              <a href="#"><button class="btn btn-small btn-outline-primary m-2 mb-3"><i class="fas fa-download"></i></button></a> -->
						</div>
					</div>

					<thead>
						<tr>
							<th class="text-center">ID bayar</th>
							<th class="text-center">Tgl bayar</th>
							<th class="text-center">Mahasiswa</th>
							<th class="text-center">Jumlah</th>
							<th class="text-center">Bukti bayar</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="">202301002</td>
							<td class="" width="15%"><?= date('d-m-Y', time()); ?></td>
							<td class="">Riyanuari Ramdhani Rachmat</td>
							<td class="text-right" width="15%">700.000</td>
							<td class="text-center" width="10%">
								<a href="#" class="btn btn-sm btn-primary mr-2">
									<i class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="lihat"></i>
								</a>
							</td>
							<td width="15%" class="project-actions text-center">
								<a href="#" class="btn btn-sm btn-success mr-2">
									<i class="fas fa-check-circle" data-toggle="tooltip" data-placement="top" title="Konfirmasi"></i>
								</a>
								<a href="#" class="btn btn-sm btn-danger mr-2">
									<i class="fas fa-times-circle" data-toggle="tooltip" data-placement="top" title="Tolak"></i>
								</a>
							</td>
						</tr>
						<tr>
							<td class="">202301003</td>
							<td class="" width="15%"><?= date('d-m-Y', time()); ?></td>
							<td class="">Ahmad Sopian Sauri</td>
							<td class="text-right" width="15%">700.000</td>
							<td class="text-center" width="10%">
								belum mengirimkan	
							</td>
							<td width="15%" class="project-actions text-center">
								<a href="#" class="btn btn-sm btn-success mr-2">
									<i class="fas fa-check-circle" data-toggle="tooltip" data-placement="top" title="Konfirmasi"></i>
								</a>
								<a href="#" class="btn btn-sm btn-danger mr-2">
									<i class="fas fa-times-circle" data-toggle="tooltip" data-placement="top" title="Tolak"></i>
								</a>
							</td>
						</tr>
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
