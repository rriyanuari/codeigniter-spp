<!-- Data Table -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<!-- /.card-header -->
			<div class="card-body">
				<table class="table table-hover display nowrap" id="dataUser" style="width:100%">
					<div class="d-flex mb-4">
						<div>
							<p>
								Nama : Riyanuari Ramdhani <br />
								Jurusan : Teknik Informatika 19 <br />
								Total Tagihan
							</p>
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
							<th class="text-center">No</th>
							<th class="text-center">Periode</th>
							<th class="text-center">Tagihan</th>
							<th class="text-center">Status</th>
							<th class="text-center">Tgl Bayar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center">1</td>
							<td class="">Januari 2022</td>
							<td class="text-center">Rp. 1.200.000</td>
							<td class="text-center"><span class="badge badge-success">Lunas</span></td>
							<td class="text-center">03-01-2022</td>
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
