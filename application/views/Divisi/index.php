<?php $this->load->view('layouts/base_start') ?>


<div class="container">
<br>
<br>
<legend>Daftar Jabatan Pegawai</legend>
<a class="btn btn-primary" href="<?php echo base_url('divisi/create') ?>">
            Tambah
          </a>

  <?php if (isset($results)) { ?>
  <table class="table table-striped">
    <thead>
      <th>NO</th>
      <th>ID DIVISI</th>
      <th>Nama DIVISI</th>
    </thead>
    <tbody>
    <?php  $number = 1; foreach ($results as $data) { ?>
    <tr>
    <td>
        <a href="<?php echo base_url('divisi/show/'.$data->id_divisi) ?>">
        <?php echo $number++; ?>
        </a>
   </td>
  <td>
      <a href="<?php echo base_url('divisi/show/'.$data->id_divisi) ?>">
       <?php echo $data->id_divisi ?>
      </a>
  </td>
  <td>
  <a href="<?php echo base_url('divisi/show/'.$data->id_divisi) ?>">
  <?php echo $data->nama ?>
  </a></td>
      <td><?php echo form_open('divisi/destroy/'.$data->id_divisi)  ?>
            <a class="btn btn-info" href="<?php echo base_url('divisi/edit/'.$data->id_divisi) ?>">
              Ubah
            </a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
            <?php echo form_close() ?>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <?php echo $links ?>
  <?php } else { ?>
  <div>Tidak ada data</div>
  <?php } ?>
</div>

<?php $this->load->view('layouts/base_end') ?>