<?php $this->load->view('layouts/base_start') ?>

<div class="container">
  <legend>Lihat DIVISI </legend>
  <div class="content">
    <div class="form-group">
      <label for="Nama">Nama DIVISI</label>
      <p><?php echo $data->nama ?></p>
    </div>

    <a class="btn btn-info" href="<?php echo base_url('divisi/') ?>">Kembali</a>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>