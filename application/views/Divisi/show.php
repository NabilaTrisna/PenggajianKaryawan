<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Divisi/Layout/Navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" type="image/png" href="<?php echo base_url('assets/gambar/icon4.png'); ?>">
<title>Halaman Admin</title>

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
<br>
<div class="container-fluid">
  <legend><font face = "Georgia">Detail DIVISI </legend>
  <div class="content">
    <div class="form-group">
      <label for="Nama">Nama DIVISI</label>
      <p><?php echo $data->nama ?></p>
    </div>
    <div class="form-group">
      <label for="Gapok">Gaji Pokok</label>
      <p><?php echo $data->gapok ?></p>
    </div>

    <a class="btn btn-info" href="<?php echo base_url('divisi/') ?>">Kembali</a>
  </div>
</div>

<?php $this->load->view('layouts/base_end') ?>