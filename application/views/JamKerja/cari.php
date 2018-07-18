<?php $this->load->view('layouts/base_start') ?>
<?php $this->load->view('Pegawai/Layout/Navigation') ?>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Penilaian Pegawai</title>

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

<legend> Daftar Jam Kerja Karyawan </legend>
    <a class="btn btn-primary" href="<?php echo base_url('jamkerja/index') ?>">
            Kembali
    </a>
    <br>
    <br>

  <table class="table table-striped">

  
    <thead>      
      <th>No</th>
      <th>ID Jam Kerja</th>
      <th>Nama Pegawai</th>
      <th>Total Jam Kerja / Bulan </th>
      <th>
        
        </a>
      </th>
    </thead>
    <tbody>
        <?php if(count($cari) > 0 ) {
        $number = 1; foreach($cari as $row) { ?>
        <tr>
          <td>
              <?php echo $number++ ?>
            </a>
          </td>
          <td>
          <a href="<?php echo base_url('jamkerja/show/'.$row->id_jam) ?>">
              <?php echo $row->id_jam ?>
            </a>
          </td>
          <td>
          <?php 
            foreach($nama as $NP) 
            {
              if ($NP->NIK == $row->pegawai)
              {
                         
                echo $NP->nama;
              }
            }?>
          </td>
          <td>
            <B>
            <?php
              echo $row->total_jam; echo "  Jam / Bulan";
            ?>
            </B>
          </td>
        </tr>
        <?php }
        } else { echo "Data Tidak Ada";} ?>
      </tbody>
    </table>
    <?php //echo $links ?>
  <?php 
  //else { ?>
  <div> </div>
  <?php //} ?>
 
</body>

<?php $this->load->view('/layouts/base_end') ?>
