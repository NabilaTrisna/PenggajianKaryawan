<!-- pegawai/edit.php -->

<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Update Data Pegawai</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('divisi/update/'.$data->id_divisi); ?>
    <?php echo form_hidden('id_divisi', $data->id_divisi) ?>
    <div class="form-group">
      <label for="Nama">Nama DIVISI</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?php echo $data->nama ?>">
    </div>

    <a class="btn btn-info" href="<?php echo base_url('divisi/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close(); ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>