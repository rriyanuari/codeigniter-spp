<div class="row">
  <div class="col-md-6">
      <div class="form-group">
      <label for="nim">NIM</label>
      <input type="text" class="form-control" id="nim" name="nim" value="<?=$mahasiswa['nim']?>">
    </div>
    <div class="form-group">
      <label for="nama_lengkap">Nama Lengkap</label>
      <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?=$mahasiswa['nama_lengkap']?>">
    </div>
    <div class="form-group">
      <label for="jenis_kelamin">Jenis Kelamin</label>
      <select class="form-control" id="jenis_kelamin">
        <option value="Laki-Laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-Laki" ) echo "selected"; ?>>Laki-Laki</option>
        <option value="Perempuan" <?php if ($mahasiswa['jenis_kelamin'] == "Perempuan" ) echo "selected"; ?>>Perempuan</option>
      </select>
    </div>
    <div class="form-group">
      <label for="jurusan">Jurusan</label>
      <select class="form-control" id="jurusan">
        <option value="Teknik Informatika" <?php if ($mahasiswa['jurusan'] == "Teknik Informatika" ) echo "selected"; ?>>Teknik Informatika</option>
        <option value="Sistem Informatika" <?php if ($mahasiswa['jurusan'] == "Sistem Informatika" ) echo "selected"; ?>>Sistem Informatika</option>
      </select>
    </div>
    <div class="form-group">
      <button type="button" class="btn btn-outline-success btn-block tmb_edit" id="<?=$mahasiswa['id']?>">
        <b>Simpan</b>
      </button>  
    </div>
  </div>
</div>