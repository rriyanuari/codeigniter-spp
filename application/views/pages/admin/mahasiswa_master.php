<!-- Data Table -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-hover display nowrap" style="width:100%">
          <div class="d-flex mb-4">

            <div class="ml-auto">
              <a href="<?= base_url('admin/tambah-mahasiswa') ?>">
                <button type="button" class="btn btn-success ">
                  <i class="fas fa-plus"></i> <b>Tambah Mahasiswa</b>
                </button>
              </a>
            </div>
          </div>
    
          <thead>
            <tr>  
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Jurusan</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach($mahasiswas as $mahasiswa):
            ?>
              <tr>
                <td width="10%" class="text-center"><?= $no++; ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td><?= $mahasiswa['nama_lengkap'] ?></td>
                <td><?= $mahasiswa['jenis_kelamin'] ?></td>
                <td><?= $mahasiswa['jurusan'] ?></td>
                <td width="20%" class="project-actions text-center">
                  <a href="<?=base_url('admin/edit-mahasiswa/').$mahasiswa['id']?>" class="btn btn-sm btn-primary mr-2">
                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger tmb_hapus" id="<?= $mahasiswa['id'] ?>" >
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