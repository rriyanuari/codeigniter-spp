<div class="row">
  <div class="col-md-6">
    <?php $years = range(2015, strftime("%Y", time())); ?>
    <div class="form-group">
      <label for="Periode">Periode</label>
      <select class="form-control" id="periode">
        <option>Select Year</option>
        <?php foreach($years as $year) : ?>
          <option value="<?php echo $year; ?>" <?php if ($tagihan['periode'] == $year ) echo "selected"; ?>><?php echo $year; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="jurusan">Jurusan</label>
      <select class="form-control" id="jurusan">
        <option value="Teknik Informatika" <?php if ($tagihan['jurusan'] == "Teknik Informatika" ) echo "selected"; ?>>Teknik Informatika</option>
        <option value="Sistem Informatika" <?php if ($tagihan['jurusan'] == "Sistem Informatika" ) echo "selected"; ?>>Sistem Informatika</option>
      </select>
    </div>
    <div class="form-group">
      <label for="tagihan">Total Tagihan</label>
      <input type="number" class="form-control" id="tagihan" name="tagihan" value="<?=$tagihan['total_tagihan']?>">
    </div>
    <div class="form-group">
      <button type="button" class="btn btn-outline-success btn-block tmb_edit" id="<?=$tagihan['id']?>">
        <b>Simpan</b>
      </button>  
    </div>
  </div>
</div>