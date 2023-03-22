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
							<th class="text-center">NIM</th>
							<th class="text-center">Mahasiswa</th>
							<th class="text-center">Kelas</th>
							<th class="text-center">Keterangan</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="">1119110002</td>
							<td class="">Riyanuari Ramdhani Rachmat</td>
							<td class="text-center">TI 19 SE M</td>
							<td class="text-center"><span class="badge badge-danger">- 2 bulan</span></td>
							<td width="20%" class="project-actions text-center">
								<a href="#" class="btn btn-sm btn-primary mr-2">
									<i class="fas fa-info-circle" data-toggle="tooltip" data-placement="top" title="detail"></i>
								</a>
							</td>
						</tr>
            <tr>
							<td class="">1119110011</td>
							<td class="">Ahmad Sopian Sauri</td>
							<td class="text-center">TI 19 CDM M</td>
							<td class="text-center"><span class="badge badge-success">Lunas</span></td>
							<td width="20%" class="project-actions text-center">
								<button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="#exampleModal">
									<i class="fas fa-info-circle"></i>
								</button>
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

<div class="modal fade" data-backdrop="false" id="exampleModal">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
						Ahmad Sopian Sauri <br />
						<span class="text-l">1119110011</span>
					</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>