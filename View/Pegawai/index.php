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

<!-- Start Item Show  -->

<legend>Daftar Pegawai</legend>
    <a class="btn btn-primary" href="<?php echo base_url('pegawai/tambah') ?>">
            Tambah
    </a>
    <br>

<?php if (isset($results)) { ?>
  
  
    <table class="table table-striped">

    
      <thead>      
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Kontak</th>
        <th>E-mail</th>
        <th>Divisi</th>
        <th>Action</th>
        <th>
          
          </a>
        </th>
      </thead>
      <tbody>
        <?php $number=1; foreach ($results as $data) { ?>
        <tr>
        <td> <?php echo $number++; ?>    
        <td><?php echo $data->NIK ?></td>
        <td><a href="<?php echo base_url('pegawai/show/'.$data->NIK) ?>"> <?php echo $data->nama ?></td>
        <td><?php echo $data->tanggal_lahir ?></td>
        <td><?php echo $data->alamat ?></td>
        <td><?php echo $data->no_hp ?></td>
        <td><?php echo $data->email ?></td>
        <td>
            <?php 
            foreach($namaDivisi as $ND) 
            {
              if ($ND->id_divisi == $data->divisi)
              {
                
                echo $ND->nama;
              }
            }?>
        </td>
        <td>
        <?php echo form_open('pegawai/hapus/'.$data->NIK)  ?>
            <a class="btn btn-info" href="<?php echo base_url('pegawai/edit/'.$data->NIK) ?>">
              Ubah
            </a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
            <?php echo form_close() ?>
        </td>    
        </tr>
        <?php } ?>
    </tbody>
    </table>
  <?php echo $links ?>
  <?php } else { ?>
  <div>Tidak ada data</div>
  <?php } ?>

<!-- End Item Show  -->

</div>
   </div>

</body>

<?php $this->load->view('/layouts/base_end') ?>
