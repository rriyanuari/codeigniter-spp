<!-- Data Table -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- /.card-header -->
      <div class="card-body">
        <table class="table table-hover display nowrap" id="dataUser" style="width:100%">
          <div class="d-flex mb-4">

            <div class="ml-auto">
              <a href="<?= base_url('admin/tambah-tagihan') ?>">
                <button type="button" class="btn btn-success ">
                  <i class="fas fa-plus"></i> <b>Tambah Tagihan</b>
                </button>
              </a>
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
              foreach($tagihans as $tagihan):
            ?>
              <tr>
                <td width="10%" class="text-center"><?= $no++; ?></td>
                <td class="text-center"><?= $tagihan['periode']; ?></td>
                <td><?= $tagihan['jurusan']; ?></td>
                <td class="text-right"><span class="text-left">Rp.</span> <?= number_format($tagihan['total_tagihan'], 0, ',', '.'); ?></td>
                <td width="20%" class="project-actions text-center">
                  <a href="<?=base_url('admin/edit-tagihan/').$tagihan['id']?>" class="btn btn-sm btn-primary mr-2">
                    <i class="fas fa-edit" data-toggle="tooltip" data-placement="top" title="edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger mr-2 tmb_hapus" id="<?= $tagihan ['id'] ?>">
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