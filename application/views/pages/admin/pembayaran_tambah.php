<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label for="nim">NIM</label>
      <input type="text" class="form-control" id="nim" name="nim" value="<?= $nim; ?>" disabled>
    </div>
    <div class="form-group">
      <label for="periode">Periode</label>
      <input type="text" class="form-control" id="periode" name="periode" value="<?= $periode; ?>" disabled>
    </div>
    <div class="form-group">
      <label for="nominal_bayar">Nominal Pembayaran</label>
      <input type="number" class="form-control" id="nominal_bayar" name="nominal_bayar">
    </div>
    <div class="form-group">
      <button type="button" class="btn btn-outline-success btn-block" id="tmb_tambah">
        <b>Simpan</b>
      </button>  
    </div>
  </div>
</div>