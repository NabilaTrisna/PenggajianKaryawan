<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Pegawai/Layout/Navigation') ?>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Data Pegawai</title>

<!-- Bootstrap Core CSS -->
<link href="<?php base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php base_url()?>../../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php base_url()?>../assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="<?php base_url()?>assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php base_url()?>../assets/css/sb-admin.css" rel="stylesheet">
<!-- Morris Charts CSS -->
<link href="<?php base_url()?>assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php base_url()?>../../assets/css/sb-admin.css" rel="stylesheet">
<link href="<?php base_url()?>../assets/css/plugins/morris.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="<?php base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php base_url()?>../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php base_url()?>../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>


<body>

<div id="page-wrapper">

  <div class="container-fluid">




<div id="page-wrapper">

<div class="container-fluid">
<legend>Data Divisi Pegawai</legend>
<a class="btn btn-primary" href="<?php echo base_url('divisi/create') ?>">
            Tambah
          </a>

  <?php if (isset($results)) { ?>
  <table class="table table-striped">
    <thead>
      <th>NO</th>
      <th>ID DIVISI</th>
      <th>Nama DIVISI</th>
      <th>Gaji Pokok</th>
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
  </a>
  </td>
  <td>
  <a href="<?php echo base_url('divisi/show/'.$data->id_divisi) ?>">
  <?php echo $data->gapok ?>
  </a>
  </td>
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