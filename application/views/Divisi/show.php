<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Divisi/Layout/Navigation') ?>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Data Divisi Pegawai</title>

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
  <legend>Lihat DIVISI </legend>
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