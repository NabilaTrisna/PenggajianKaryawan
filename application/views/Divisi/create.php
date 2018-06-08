<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Tambah Data Pegawai</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('divisi/store'); ?>

   <div class="form-group">
      <label for="id_divisi">ID DIVISI</label>
      <input type="text" class="form-control" id="id_divisi" name="id_divisi" placeholder="Masukkan ID DIVISI">
    </div>

    <div class="form-group">
      <label for="Nama">Nama  DIVISI</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama DIVISI">
    </div>

    <a class="btn btn-info" href="<?php echo base_url('divisi/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close() ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>