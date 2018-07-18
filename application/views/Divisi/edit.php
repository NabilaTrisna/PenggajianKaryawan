<!-- pegawai/edit.php -->
<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Divisi/Layout/Navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Update Data Divisi Pegawai</title>

<!-- Bootstrap Core CSS -->
<link href="<?php base_url()?>../../assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">

<!-- Morris Charts CSS -->
<link href="<?php base_url()?>../../assets/css/plugins/morris.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php base_url()?>../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>



<div id="page-wrapper">

<div class="container-fluid">

  <legend>Update Data Divisi Pegawai</legend>
  <div class="col-xs-12 col-sm-12 col-md-12">
  <?php echo form_open('divisi/update/'.$data->id_divisi); ?>
    <?php echo form_hidden('id_divisi', $data->id_divisi) ?>
    <div class="form-group">
      <label for="Nama">Nama DIVISI</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama" value="<?php echo $data->nama ?>">
    </div>
    <div class="form-group">
      <label for="Gapok">Gaji Pokok</label>
      <input type="text" class="form-control" id="gapok" name="gapok" placeholder="Masukkan Gaji Pokok" value="<?php echo $data->gapok ?>">
    </div>

    <a class="btn btn-info" href="<?php echo base_url('divisi/') ?>">Kembali</a>
    <button type="submit" class="btn btn-primary">OK</button>
  <?php echo form_close(); ?>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>