<!-- Data Table -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-hover display nowrap" id="dataUser" style="width:100%">
          <div class="d-flex mb-4">

            <div class="ml-auto">
              <a href="<?= base_url('admin/tambah-mahasiswa') ?>">
                <button type="button" class="btn btn-success ">
                  <i class="fas fa-plus"></i> <b>Tambah Mahasiswa</b>
                </button>
              </a>
              <!-- <a href="#"><button class="btn btn-small btn-outline-primary m-2 mb-3 "><i class="fas fa-print"></i></button></a>
              <a href="#"><button class="btn btn-small btn-outline-primary m-2 mb-3"><i class="fas fa-download"></i></button></a> -->
            </div>
          </div>

          <thead>
            <tr class="text-center">  
              <th>No</th>
              <th>Periode Tahun</th>
              <th>Jurusan</th>
              <th>Jumlah Pembayaran</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            ?>
              <tr>
                <td width="10%" class="text-center"><?= $no++; ?></td>
                <td class="text-center">2022</td>
                <td>Teknik Informatika</td>
                <td class="text-right">12.000.000</td>
                <td width="20%" class="project-actions text-center">
                  <a href="#" class="btn btn-sm btn-primary mr-2">
                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger mr-2">
                    <i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="hapus"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td width="10%" class="text-center"><?= $no++; ?></td>
                <td class="text-center">2022</td>
                <td>Sistem Informatika</td>
                <td class="text-right">10.000.000</td>
                <td width="20%" class="project-actions text-center">
                  <a href="#" class="btn btn-sm btn-primary mr-2">
                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger mr-2">
                    <i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="hapus"></i>
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