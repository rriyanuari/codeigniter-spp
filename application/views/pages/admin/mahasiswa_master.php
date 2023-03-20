<!-- Data Table -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-hover display nowrap" id="dataUser" style="width:100%">
          <div class="d-flex mb-4">

            <div class="ml-auto">
              <a href="<?=base_url('admin/tambah-mahasiswa')?>">
                <button type="button" class="btn btn-success ">
                  <i class="fas fa-plus"></i> <b>Tambah Mahasiswa</b>
                </button>  
              </a>
              <!-- <a href="#"><button class="btn btn-small btn-outline-primary m-2 mb-3 "><i class="fas fa-print"></i></button></a>
              <a href="#"><button class="btn btn-small btn-outline-primary m-2 mb-3"><i class="fas fa-download"></i></button></a> -->
            </div>
          </div>

          <thead>
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>Nama</th>
              <th>JK</th>							
              <th>Jurusan</th>							
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $no = 1;
            foreach($users as $user):
            ?>
            <tr>
              <td width="10%" class="text-center"><?= $no++; ?></td>
              <td><?= ($user['role'] > 1) ? "Admin" : "User"; ?></td>
              <td><?= $user['username']; ?></td>
              <td><?= $user['password']; ?></td>
              <td width="20%" class="project-actions text-center">
                  <a href="<?=base_url('admin/edit-user/').$user['id_user']?>" class="mr-2">
                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit"></i>
                  </a>
                  <a href="#" class="tmb_hapus text-danger" id="<?= $user['id_user'] ?>">
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

